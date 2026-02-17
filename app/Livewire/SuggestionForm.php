<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Suggestion;

class SuggestionForm extends Component
{
    public $resourceName = '';
    public $resourceDescription = '';
    public $email = '';
    public $resourceLink = '';

    public function save() {
        Suggestion::create([
            'resource_name' => $this->resourceName,
                'resource_description' => $this->resourceDescription,
                'email' => $this->email,
                'link' => $this->resourceLink,
                ]
        );

        session()->flash('status', 'Your suggestion has been submitted! Thank you!');
    }
    public function render()
    {
        return view('livewire.suggestion-form');
    }
}
