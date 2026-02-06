<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Suggestion extends Model
{
    protected $fillable = [
        'resource_name',
        'resource_description',
        'resource_link',
    ];
}
