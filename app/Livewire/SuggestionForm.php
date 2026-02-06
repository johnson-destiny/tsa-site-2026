<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Suggestion;

class SuggestionForm extends Component
{
    public $resourceName = '';
    public $resourceDescription = '';
    public $resourceType = '';

    public function save() {
        Suggestion::create(
            $this->only(['resource_name', 'resource_description', 'resource_type'])
        );
    }
    public function render()
    {
        return view('livewire.suggestion-form');
    }
}
