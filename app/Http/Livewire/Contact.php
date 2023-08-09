<?php

namespace App\Http\Livewire;

use App\Mail\SendFromContactForm;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class Contact extends Component
{

    public $name;
    public $email;
    public $message;
    public $success;

    protected $rules = [
        'name' => 'required',
        'email' => 'required|email',
        'message' => 'required|min:5'
    ];

    public function sendEmail()
    {
        $contact = $this->validate();

        Mail::to('m@mattrhysdavies.co.uk')->send(new SendFromContactForm($contact));

        $this->success = 'Thanks for your message. I\'ll get back to you shortly';
    }


    public function render()
    {
        return view('livewire.contact');
    }
}
