<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Resources extends Model
{
    use Searchable;


    protected $fillable = ['title', 'description'];

    public function toSearchableArray(): array
    {
        return array_merge($this->toArray(),
            [
                'id' => (string) $this->id,
                'title' => $this->title,
                'description' => $this->description,
                'created_at' => $this->created_at->timestamp,

            ]
        );
    }
}
