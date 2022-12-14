<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class audio extends Model
{
    use HasFactory;
    protected $table = 'Image';
    protected $primaryKey = 'id';
    protected $fillable =[
        'id', 'name', 'author', 'link'
    ];
}