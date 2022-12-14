<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class audio extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'product';
    protected $primaryKey = 'Id_product';
    protected $fillable =[
        'Id_product', 'name_product', 'author', 'amount', 'link'
    ];
}
