<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\models\Category;

class Ebook extends Model
{
    protected $table = 'ebooks';
    protected $guarded=[];
    use HasFactory;
    public function categoryR()
    {
        return $this->belongsTo(Category::class,'category_id','id');
    }
   
}
