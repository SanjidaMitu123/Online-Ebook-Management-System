<?php

namespace App\Models\models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book_write extends Model
{
    protected $table = 'write_book';
    protected $guarded=[];
    use HasFactory;
    public function authorname(){

        return $this->belongsTo(user::class,'write_book_id','id');
    }
}
