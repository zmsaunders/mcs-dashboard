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
    public $text;
    public $type;
    public $class;

    protected $stuTotal;
    protected $staTotal;

    public function mount()
    {
        $this->stuTotal = 0;
        $this->staTotal = 0;
        foreach(School::orderBy('name')->get() as $school) {
            $this->stuTotal += $school->student_total;
            $this->staTotal += $school->staff_total;
        }
    }

    public function render()
    {
        // Do we have any data for this week?
        $this->week = date('Y-m-d', strtotime('Previous Monday'));

        if (! Report::where('week', $this->week)->first()) {
            $this->week = date('Y-m-d', strtotime('Previous Week'));
        }

        // Previous Week
        $this->pweek = date('Y-m-d', strtotime('-1 week', strtotime($this->week)));
        $this->generateTotal();
        return view('livewire.percent-tile');
    }

    public function generateTotal()
    {
        $cases = Report::with('school')->where('week', $this->week)->get()->sortBy('school.name');
        $pcases = Report::with('school')->where('week', $this->pweek)->get()->sortBy('school.name');
        $this->perc = 0;
        $this->pperc = 0;
        foreach ($cases as $c) {
            $this->perc += $c->{$this->type};
        }

        foreach ($pcases as $c) {
            $this->pperc += $c->{$this->type};
        }

        switch($this->type) {
            case "student_positive":
            case "student_quarantine":
                $this->perc = round((float) ($this->perc / $this->stuTotal) * 100, 1);
                $this->pperc = round((float) ($this->pperc / $this->stuTotal) * 100, 1);
            break;
            case "staff_positive":
            case "staff_quarantine":
                $this->perc = round((float) ($this->perc / $this->staTotal) * 100, 1);
                $this->pperc = round((float) ($this->pperc / $this->staTotal) * 100, 1);
            break;
        }
    }
}
