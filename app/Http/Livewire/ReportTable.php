<?php

namespace App\Http\Livewire;

use App\Models\Report;
use Livewire\Component;

class ReportTable extends Component
{
    public $cases;

    protected $listeners = [
        'reportAdded' => 'reload'
    ];

    public function mount() {
        $this->cases = Report::with('school')->get();
    }

    public function reload() {
        $this->cases = Report::with('school')->get();
    }

    public function render()
    {
        return view('livewire.report-table');
    }
}
