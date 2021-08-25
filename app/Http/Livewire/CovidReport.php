<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CovidReport extends Component
{
    public $students, $name, $email, $mobile, $report_id;
    public $isModalOpen = 0;

    public function render()
    {
        $this->students = Report::all();
        return view('livewire.covid-report');
    }

    public function create()
    {
        $this->resetCreateForm();
        $this->openModalPopover();
    }

    public function openModalPopover()
    {
        $this->isModalOpen = true;
    }

    public function closeModalPopover()
    {
        $this->isModalOpen = false;
    }

    private function resetCreateForm(){
        $this->school = '';
        $this->email = '';
        $this->mobile = '';
    }

    public function store()
    {
        $this->validate([
            'name' => 'required',
            'email' => 'required',
            'mobile' => 'required',
        ]);

        Report::updateOrCreate(['id' => $this->report_id], [
            'name' => $this->name,
            'email' => $this->email,
            'mobile' => $this->mobile,
        ]);

        session()->flash('message', $this->report_id ? 'Student updated.' : 'Student created.');

        $this->closeModalPopover();
        $this->resetCreateForm();
    }

    public function edit($id)
    {
        $student = Report::findOrFail($id);
        $this->student_id = $id;
        $this->name = $student->name;
        $this->email = $student->email;
        $this->mobile = $student->mobile;

        $this->openModalPopover();
    }

    public function delete($id)
    {
        Report::find($id)->delete();
        session()->flash('message', 'Studen deleted.');
    }
}
