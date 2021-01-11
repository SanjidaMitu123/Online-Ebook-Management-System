<?php

namespace App\Models\models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AuthorRequest extends Model
{
    protected $table = 'author_requests';
    protected $guarded=[];
    use HasFactory;
}
