<?php

namespace App\Models;


use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Announcemt extends Model

{ 
    use HasFactory;

    protected $table = 'announcemt';

    protected $fillable = [
        'title',
        'annunciamentBody',
        'img',
        'price',
        'user_id'
    ];

 public function user(){

    return $this->belongsTo(User::class);
 }
}
