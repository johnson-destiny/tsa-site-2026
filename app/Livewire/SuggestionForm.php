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
        $validated = $this->validate( [
            'resourceName' => 'required|min:3|max:255',
            'resourceDescription' => 'required|min:10|max:255',
            'email' => 'required|email',
            'resourceLink' => 'required|url',
        ]);

        Suggestion::create([
            'resource_name' => $validated['resourceName'],
                'resource_description' => $validated['resourceDescription'],
                'email' => $validated['email'],
                'link' => $validated['resourceLink'],
                ]
        );
        session()->flash('status', 'Your suggestion has been submitted! Thank you!');
        $this->redirect('/suggest-a-resource');
    }
    public function render()
    {
        return view('livewire.suggestion-form');
    }
}
