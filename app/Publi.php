<?php 
  
 namespace App;


 use Illuminate\Database\Eloquent\Model;

 /**
  * summary
  */
 class Publi extends Model
 {
     protected $table ='publis';

     protected $fillable=['titulo','descripsion','url'];
 }