<?php

namespace App\Livewire;

use Livewire\Component;
use App\Actions\EmailContactLeadAction;

class ContactForm extends Component
{
    public string $name = '';
    public string $email = '';
    public string $phone = '';
    public string $message = '';
    protected $rules = [
        'name' => 'required|min:3',
        'email' => 'required|email|min:4',
        'phone' => 'nullable',
        'message' => 'nullable',
        //'prefered' => 'required|min:0|max:1'
    ];

    public function submit()
    {
        $validated = $this->validate();
        (new EmailContactLeadAction)($validated);
    }

    public function render()
    {
        return view('livewire.contact-form');
    }
}
