<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TodoListModel extends Model
{
    protected $fillable = [
        'title',
        'subtitle',

    ];
    use HasFactory;
}
