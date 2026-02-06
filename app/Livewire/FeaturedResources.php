<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Resources;

class FeaturedResources extends Component
{
    public $queries = array(
        "grants" => ["funding", "grants"],
        "training" => ["training"],
        "orlando" => ["orlando"],
        "tampa" => ["tampa"],
        "daytona" => ["daytona"]
    );

    public $selected = '';

    public $resources = [];

    public function findRecords($key)
    {
        $this->selected = $key;

        $terms = $this->queries[$key];
        
        if (empty($terms)) {
            $this->resources = [];
            return;
        }
        
        // Essentially an unnamed function that loops through the terms and finds matching records
        // This is done with closure
        $this->resources = Resources::where(function($query) use($terms) {
            foreach ($terms as $term) {
                $query->orWhere('description', 'like', "%{$term}%");
            }
        })->take(3)->get();
    }
    public function render()
    {
        return view('livewire.featured-resources');
    }
}
