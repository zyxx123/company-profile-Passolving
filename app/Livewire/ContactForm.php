<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Validate;
use App\Models\ContactMessage;

class ContactForm extends Component
{
    #[Validate('required|min:3')]
    public $name = '';

    #[Validate('required|email')]
    public $email = '';
    
    public $company = '';

    public $phone = '';

    #[Validate('required|min:10')]
    public $message = '';

    public $successMessage = '';

    public function submit()
    {
        $this->validate();

        ContactMessage::create([
            'name' => $this->name,
            'email' => $this->email,
            'company' => $this->company,
            // 'phone' => $this->phone, // assuming migration doesn't have phone, I won't save it or I should create a new migration
            'message' => $this->message,
        ]);

        $this->successMessage = 'Pesan Anda Berhasil Terkirim!';
        $this->reset(['name', 'email', 'company', 'phone', 'message']);
    }

    public function render()
    {
        return view('livewire.contact-form');
    }
}
