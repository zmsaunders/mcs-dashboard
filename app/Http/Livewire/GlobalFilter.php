<?php

namespace App\Http\Livewire;

use App\Models\Report;
use App\Models\School;
use Livewire\Component;

class GlobalFilter extends Component
{
    // We need to allow people to filter by Schools as well as Dates
    public $schools;
    public $school = 'all';

    public $dates;
    public $date;

    public function mount()
    {
        $this->schools = School::all();
        $this->findDates();
    }

    public function render()
    {
        return view('livewire.global-filter');
    }

    public function findDates()
    {
        // Get Available Dates
        $weeks = Report::select('week')->distinct()->orderBy('week', 'desc')->get();
        foreach ($weeks as $week) {
            if (is_null($this->date)) {
                $this->date = $week->week;
            }

            $this->dates[$week->week] = date('M d, Y', strtotime($week->week)) . " - " . date('M d, Y', strtotime('+1 week', strtotime($week->week)));
        }
    }

    public function updated()
    {
        $this->emit('FilterChange', $this->date, $this->school);
    }
}
