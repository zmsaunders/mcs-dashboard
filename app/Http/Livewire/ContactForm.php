<?php

namespace App\Http\Livewire;

use App\Mail\ContactMail;
use Livewire\Component;
use Mail;

class ContactForm extends Component
{
    public $name = '';
    public $email = '';
    public $message = '';
    public $company = '';

    public $complete = false;
    public $show = false;

    protected $rules = [
        'name' => 'required|min:3',
        'email' => 'required|email',
        'message' => 'required|min:10',
    ];

    public function render()
    {
        return view('livewire.contact-form');
    }

    public function show() {
        $this->show = true;
    }

    public function send()
    {
        $this->validate();

        if ($this->company === '') {
            Mail::to(env('MAIL_REC'))->send(new ContactMail($this->name, $this->email, $this->message));
        }

        $this->complete = true;
    }
}
