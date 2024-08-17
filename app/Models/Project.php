<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $table = 'projects';
    protected $primary_key = 'id';

    protected $fillable = [
        'title',
        'description',
        'category',
        'status'
    ];
}
