<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $table = 'services';
    protected $primaryKey = "service_id";
    // protected $fillable =[
    //     'service_id, id_category', 'product', 'laundry_price','dryclean_price', 'wash_price', 'dry_price', 'iron_price', 'image'
    // ];
    protected $guarded = [];

    // public function category(){
    //     return $this->belongsTo(Category::class);
    // }
}