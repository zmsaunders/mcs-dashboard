<?php

namespace App\Http\Livewire;

use App\Models\Report;
use App\Models\School;
use Livewire\Component;

class CaseReport extends Component
{
    public $createCase = false;
    public $schools;

    public $total;

    // The data
    public $affected = 0;
    public $school_id;
    public $group = 'students'; // staff or students
    public $type = 'positive'; // positive or quarantined
    public $week; // Date

    public function mount()
    {
        // Get most recent monday:
        $this->week = date('Y-m-d', strtotime("Previous Monday"));
        $this->schools = School::all();
    }

    public function render()
    {
        return view('livewire.case-report');
    }

    public function showModal()
    {
        $this->createCase = true;
    }

    public function save()
    {
        $report = new Report;
        $report->affected = $this->affected;
        $report->school_id = $this->school_id;
        $report->group = $this->group;
        $report->type = $this->type;
        $report->week = $this->week;
        $report->save();
        $this->resetFields();
        $this->emit('reportAdded');
    }

    public function resetFields() {
        // Don't reset week
        $this->affected = 0;
        $this->school_id = null;
        $this->group = 'students';
        $this->type = 'positive';;
    }
}
