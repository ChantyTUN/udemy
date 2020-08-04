<?php

namespace App\Model;

use App\Model\Category;
use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    protected $fillable=['name','description','price','category_id','image'];

    public function category(){
        return $this->hasOne(Category::class,'id','category_id');
    }

}
