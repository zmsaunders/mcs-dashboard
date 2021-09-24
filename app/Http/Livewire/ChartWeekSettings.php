<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ChartWeekSettings extends Component
{
    public $weeks = 6;
    public $chartid;

    public function render()
    {
        return view('livewire.chart-week-settings');
    }

    public function setWeek($weeks)
    {
        $this->weeks = $weeks;
        $this->emit('SetWeeks-'.$this->chartid, $weeks);
    }
}
