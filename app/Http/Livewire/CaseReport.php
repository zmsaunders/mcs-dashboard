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
    public $student_positive = 0;
    public $staff_positive = 0;
    public $student_quarantine = 0;
    public $staff_quarantine = 0;

    public $school_id;
    public $week; // Date

    public function mount()
    {
        // Get most recent monday:
        $this->week = date('Y-m-d', strtotime("Previous Monday"));
        $this->schools = School::orderBy('name')->get();
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
        $report->student_positive = $this->student_positive;
        $report->student_quarantine = $this->student_quarantine;
        $report->staff_positive = $this->staff_positive;
        $report->staff_quarantine = $this->staff_quarantine;
        $report->school_id = $this->school_id;
        $report->week = $this->week;
        $report->save();
        $this->resetFields();
        $this->emit('reportAdded');
    }

    public function resetFields() {
        // Don't reset week
        $this->student_positive = 0;
        $this->staff_positive = 0;
        $this->student_quarantine = 0;
        $this->staff_quarantine = 0;
        $this->school_id = null;
    }
}
