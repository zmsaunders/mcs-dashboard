<?php

namespace App\Http\Livewire;

use App\Models\Report;
use App\Models\School;
use Livewire\Component;

class ReportTable extends Component
{
    public $cases;
    public $totals = [
        'stup' => 0,
        'stuq' => 0,
        'stap' => 0,
        'staq' => 0,
        'enrolled' => 0,
        'employed' => 0
    ];
    public $week;

    protected $listeners = [
        'reportAdded' => 'refreshData',
        'FilterChange' => 'updateFilters',
    ];

    public function mount() {
        // Do we have any data for this week?
        $this->week = date('Y-m-d', strtotime('Previous Monday'));

        if (! Report::where('week', $this->week)->first()) {
            $this->week = date('Y-m-d', strtotime('Previous Week'));
        }

        // Get totals...
        $schools = School::all();
        foreach ($schools as $s) {
            $this->totals['enrolled'] += $s->student_total;
            $this->totals['employed'] += $s->staff_total;
        }

        $this->refreshData();
    }

    public function render()
    {
        return view('livewire.report-table');
    }

    public function refreshData()
    {
        $this->cases = Report::with('school')->where('week', $this->week)->get()->sortBy('school.name');
        $this->totals['stup'] = 0;
        $this->totals['stuq'] = 0;
        $this->totals['stap'] = 0;
        $this->totals['staq'] = 0;

         foreach ($this->cases as $c) {
            $this->totals['stup'] += $c->student_positive;
            $this->totals['stuq'] += $c->student_quarantine;
            $this->totals['stap'] += $c->staff_positive;
            $this->totals['staq'] += $c->staff_quarantine;
        }
    }

    public function nextWeek()
    {
        $this->week = date('Y-m-d', strtotime('+1 week', strtotime($this->week)));
        $this->refreshData();
    }

    public function prevWeek()
    {
        $this->week = date('Y-m-d', strtotime('-1 week', strtotime($this->week)));
        $this->refreshData();
    }

    public function updateFilters($week, $school)
    {
        $this->week = date('Y-m-d', strtotime($week));
        $this->refreshData();
    }
}
