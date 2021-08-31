<?php

namespace App\Http\Livewire;

use App\Models\Report;
use App\Models\School;
use Livewire\Component;

class PercentTile extends Component
{
    public $schools;
    public $current;
    public $week;
    private $cases;

    public $stup;
    public $stuq;
    public $stap;
    public $staq;

    public function render()
    {
        $this->week = date('Y-m-d', strtotime('Previous Week'));
        $this->cases = Report::with('school')->where('week', $this->week)->get()->sortBy('school.name');
        $this->schools = School::orderBy('name')->get();
        $this->generateTotal();
        return view('livewire.percent-tile');
    }

    public function generateTotal()
    {
        $students = 0;
        $staff = 0;
        foreach($this->schools as $school) {
            $students += $school->student_total;
            $staff += $school->staff_total;
        }
        foreach ($this->cases as $c) {
            $this->stup += $c->student_positive;
            $this->stuq += $c->student_quarantine;
            $this->stap += $c->staff_positive;
            $this->staq += $c->staff_quarantine;
        }

        $this->stup = round((float) ($this->stup  / $students) * 100, 1);
        $this->stuq = round((float) ($this->stuq  / $students) * 100, 1);
        $this->stap = round((float) ($this->stap  / $staff) * 100, 1);
        $this->staq = round((float) ($this->staq  / $staff) * 100, 1);
    }
}
