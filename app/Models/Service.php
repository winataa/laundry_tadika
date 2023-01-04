<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $table = 'services';
    protected $primaryKey = "service_id";

    protected $guarded = [];

    // protected $fillable = [
    //     'service_id',
    //     'category',
    //     'product',
    //     'price',
    //     'image',
    // ];

    // public function category(){
    //     return $this->belongsTo(Category::class);
    // }
}