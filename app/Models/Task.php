<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Task;

class Task extends Model
{
    protected $fillable = [
        'title', 'description', 'author_id', 'status'
    ];
}
