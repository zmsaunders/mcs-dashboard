<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ChartWeekSettings extends Component
{
    public $weeks = 6;
    public $chartid;

    protected $listeners = [
        'SetWeeks' => 'updateWeeks'
    ];

    public function render()
    {
        return view('livewire.chart-week-settings');
    }

    public function setWeek($weeks)
    {
        $this->emit('SetWeeks', $weeks);
    }

    public function updateWeeks($weeks) {
        $this->weeks = $weeks;
    }
}
