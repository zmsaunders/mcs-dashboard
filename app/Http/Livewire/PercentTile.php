<?php

namespace App\Http\Livewire;

use App\Models\Report;
use App\Models\School;
use Livewire\Component;

class PercentTile extends Component
{
    public $week;
    public $pweek;
    public $perc;
    public $pperc;
    public $current_total;
    public $prev_total;
    public $text;
    public $type;
    public $class;
    public $school = 'all';

    public $stuTotal;
    public $staTotal;

    public $source;

    protected $listeners = [
        'reportAdded' => 'loadData',
        'FilterChange' => 'updateFilters',
    ];

    public function mount()
    {
        // Do we have any data for this week?
        $this->week = date('Y-m-d', strtotime('Previous Monday'));

        if (! Report::where('week', $this->week)->first()) {
            $this->week = date('Y-m-d', strtotime('Previous Week'));
        }
    }

    public function loadData()
    {
        // Previous Week
        $this->pweek = date('Y-m-d', strtotime('-1 week', strtotime($this->week)));

        $this->stuTotal = 0;
        $this->staTotal = 0;

        if ($this->school == 'all') {
            foreach(School::orderBy('name')->get() as $school) {
                $this->stuTotal += $school->student_total;
                $this->staTotal += $school->staff_total;
            }
        } else {
            $school = School::where('id', $this->school)->first();
            $this->stuTotal = $school->student_total;
            $this->staTotal = $school->staff_total;
        }

        $this->generateTotal();
    }

    public function render()
    {
        $this->loadData();
        return view('livewire.percent-tile');
    }

    public function generateTotal()
    {
        $cquery = Report::with('school')->where('week', $this->week);
        $pquery = Report::with('school')->where('week', $this->pweek);
        if($this->school != 'all') {
            $cquery = $cquery->where('school_id', $this->school);
            $pquery = $pquery->where('school_id', $this->school);
        }

        $cases = $cquery->get()->sortBy('school.name');
        $pcases = $pquery->get()->sortBy('school.name');
        $this->current_total = 0;
        $this->previous_total = 0;
        foreach ($cases as $c) {
            $this->current_total += $c->{$this->type};
        }

        foreach ($pcases as $c) {
            $this->previous_total += $c->{$this->type};
        }

        switch($this->type) {
            case "student_positive":
            case "student_quarantine":
                $this->source = $this->stuTotal;
                $this->perc = round((float) ($this->current_total / $this->stuTotal) * 100, 1);
                $this->pperc = round((float) ($this->previous_total / $this->stuTotal) * 100, 1);
            break;
            case "staff_positive":
            case "staff_quarantine":
                $this->source = $this->staTotal;
                $this->perc = round((float) ($this->current_total / $this->staTotal) * 100, 1);
                $this->pperc = round((float) ($this->previous_total / $this->staTotal) * 100, 1);
            break;
        }
    }

    public function updateFilters($week, $school)
    {
        $this->week = date('Y-m-d', strtotime($week));
        $this->pweek = date('Y-m-d', strtotime('-1 week', strtotime($this->week)));
        $this->school = $school;
        $this->loadData();
    }
}
