<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
class Category extends Model
{
    protected $fillable = ['id','category_name','slug','category_id','maker_name','maker_id','parent_id','created_at','updated_at'];
    public function setSlugAttribute($value){
        $this->attributes['slug'] = Str::slug(mb_substr($this->title,0,30) . "-" . \Carbon\Carbon::now()->format('dmyHi'), '-');
    }
    public function children(){
        return $this->hasMany(self::class,'parent_id');
    }
}
