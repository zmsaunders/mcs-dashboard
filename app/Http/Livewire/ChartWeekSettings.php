<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ChartWeekSettings extends Component
{
    public $weeks = 4;
    public function render()
    {
        return view('livewire.chart-week-settings');
    }

    public function setWeek($weeks)
    {
        $this->weeks = $weeks;
        $this->emit('SetWeeks', $weeks);
    }
}
