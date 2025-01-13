<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
   use HasFactory;
   
   protected $fillable = [
       'book_title',
       'book_author',
       'year_published'
   ];

   public function user() {
    return $this->belongsTo(User::class);
   }
}
