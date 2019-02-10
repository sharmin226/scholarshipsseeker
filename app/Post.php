<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
   protected $fillable = ['title', 'deadline', 'country','course', 'subject', 'website', 'nationality', 'slug','user_id'];


   public function user()
   {
      return $this->belongsTo('App\User');
   }

   public function profile()
   {
   	  return $this->belongsTo('App\Profile');
   }
}

