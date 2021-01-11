<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $guarded=[];

    use HasFactory;


    public function author(){

        return $this->hasOne(Author::class,'user_id','id');
    }
}
