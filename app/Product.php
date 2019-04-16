<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
class Product extends Model
{
    protected $fillable = ['id','title','small_title','published','slug','category_id','value','pict_way','available','description','maker_id','articul','meta_title','meta_description','meta_keyword'];
    public function setSlugAttribute($value)
    {
        $this->attributes['slug'] = Str::slug(mb_substr($this->title, 0, 30));
    }
    public function categories(){
        return $this->morphToMany('App\Category','categoryable');
    }
}
?>