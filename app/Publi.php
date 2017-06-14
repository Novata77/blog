<?php 
  
 namespace App;

use App\User;

 use Illuminate\Database\Eloquent\Model;

 /**
  * summary
  */
 class Publi extends Model
 {
     protected $table ='publis';

     protected $fillable=['titulo','descripsion','url'];
 }