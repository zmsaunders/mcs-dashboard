<?php

namespace App\Http\Livewire;

use App\Models\Report;
use App\Models\School;
use Livewire\Component;

class ChartTitle extends Component
{
    public $date;
    public $school = 'all';
    public $weeks = 4;
    public $week;
    public $end;
    public $start;
    public $schoolverb;

    public $timeTitle;
    public $schoolTitle;

    protected $listeners = [
        'FilterChange' => 'updateFilters',
        'SetWeeks' => 'updateWeeks'
    ];

    public function mount()
    {
         // Get Available Dates
        $this->week = Report::select('week')->distinct()->orderBy('week', 'desc')->first()->week;
        $this->verberate();
    }

    public function verberate()
    {
        $this->schoolverb = ($this->school == 'all') ?
            'all schools in district' :
            School::find($this->school)->name;

        $this->end = date('m/d/y', strtotime('+1 week', strtotime($this->week)));
        $this->start = date('m/d/y', strtotime('-'. $this->weeks.' week', strtotime($this->end)));

        $this->timeTitle = "Totals for {$this->start} - {$this->end}";

        $this->schoolTitle = "Totals for {$this->schoolverb}";
    }

    public function render()
    {
        return view('livewire.chart-title');
    }

    public function updateFilters($week, $school)
    {
        $this->date = $week;
        $this->school = $school;
        $this->verberate();
    }

    public function updateWeeks($weeks)
    {
        $this->weeks = $weeks;
        $this->verberate();
    }
}
