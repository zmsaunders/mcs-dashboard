<?php

namespace App\Http\Livewire;

use App\Models\School;
use Livewire\Component;

class CaseReport extends Component
{
    public $createCase = false;
    public $schools;

    public $total;

    // The data
    public $affected;
    public $school_id;
    public $group; // staff or students
    public $type; // positive or quarantined
    public $week; // Date

    public function mount()
    {
        $this->schools = School::all();
        $total = 0;
        foreach ($this->schools as $school) {
            $total += $school->student_total;
        }

        $this->total = $total;
    }

    public function render()
    {
        return view('livewire.case-report');
    }

    public function showModal()
    {
        $this->createCase = true;
    }
}
