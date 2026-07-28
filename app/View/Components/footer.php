<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Rule;

class Footer extends Component
{
    #[Rule('required|email|max:254')]
    public $email = '';

    public function subscribe()
    {
        $this->validate();

        // Add backend handler entry logic here (e.g., Newsletter::create(['email' => $this->email]);)

        $this->reset('email');
        
        // Dispatches status to layout notifications
        $this->dispatch('notify', message: 'Subscribed successfully!');
    }

    public function render()
    {
        return view('livewire.footer');
    }
}
