<?php

namespace App\Model;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    public function getRouteKeyName()
    {
        return 'slug';
    }

//    protected $fillable = ['title','slug','body','category_id','user_id'];

    // the above format might not be the best way to do that when you have over 20 fields to fill,and you shouldn;t have to fill the box with all 20 field name,below is the best way to solve this problem (protected $guarded = [])

    protected $guarded = [];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function replies(){
        return $this->hasMany(Reply::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }


    public function getPathAttribute(){
      return asset("api/question/$this->slug");
    }
}
