<?php

namespace App\Livewire;

use Livewire\Component;
use Symfony\Component\HttpFoundation\Request;
use App\Models\Resources;

class SearchDirectory extends Component
{
    
    
    public function render()
    {
        return view('livewire.search-directory');
    }
}
