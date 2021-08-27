<?php

namespace App\Http\Livewire;

use App\Models\School;
use Livewire\Component;

class SchoolsList extends Component
{
    public $schools;

    public function render()
    {
        $this->schools = School::all();
        return view('livewire.schools-list');
    }
}
