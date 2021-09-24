<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ReportChart extends Component
{
    public $class;
    public $title;
    public $subtitle;
    public $weeks = 6;
    public $chartid;
    public $url;
    public $sourcechart;
    public $colors;

    protected $listeners = [
        'FilterChange' => 'updateFilters'
    ];

    public function mount() {
        $this->colors = ($this->chartid == 'student_chart') ? "['#34D399', '#60A5FA']" : "['#A78BFA', '#FBBF24']";
    }

    public function render()
    {
        return view('livewire.report-chart');
    }

    public function updateFilters($week, $school)
    {
        $this->endDate = $week;
    }
}
