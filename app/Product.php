<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;
class Product extends Model
{
    protected $fillable = ['id', 'description','category_id'];

    public function category()
    {
        return $this->belongsTo('App\Category');
    }
}
