<?php

namespace App\Http\Livewire;

use App\Models\School;
use Livewire\Component;

class SchoolsList extends Component
{
    public $schools;
    public $enrolled;
    public $employed;

    public function render()
    {
        $this->schools = School::all();
        foreach($this->schools as $s) {
            $this->enrolled += $s->student_total;
            $this->employed += $s->staff_total;
        }
        return view('livewire.schools-list');
    }
}
