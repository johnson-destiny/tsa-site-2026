<?php

namespace App\Livewire;

use Livewire\Component;

class CyclingText extends Component
{
    public array $words = ['Nonprofits', 'Grants', 'Organizations'];
    public int $index = 0;

    public function rotate() {
        $this->index = ($this->index + 1) % count($this->words);
    }
    public function render()
    {
        return view('livewire.cycling-text');
    }
}
