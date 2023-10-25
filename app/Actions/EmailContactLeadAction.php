<?php
namespace App\Actions;
use Illuminate\Support\Facades\Mail;
use App\Models\ContactLead;
use App\Mail\ContactLeadMailable;

class EmailContactLeadAction {
    public function __invoke(array $formData)
    {
         $contactLead = $this->getOrCreateContactLead($formData);

    }
    private function getOrCreateContactLead(array $formData): ContactLead
    {
        return ContactLead::firstOrCreate($formData);
    }
    private function sendContactLeadToEmail(ContactLead $contactLead): void{
        Mail::to('')->send(new ContactLeadMailable($contactLead));
    }
}
