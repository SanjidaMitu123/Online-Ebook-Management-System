<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reader extends Model
{
    protected $table = 'readers';
    protected $guarded=[];
    use HasFactory;
}
