<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ReportChart extends Component
{
    public $class;
    public $title;
    public $subtitle;
    public $weeks = 4;

    protected $listeners = [
        'FilterChange' => 'updateFilters'
    ];

    public function mount() {
        $this->title = "Totals for last 4 weeks";
        $this->subtitle = "Totals across all schools in district";
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
