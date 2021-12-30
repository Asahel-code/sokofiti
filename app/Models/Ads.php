<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ads extends Model
{
    use HasFactory;

    protected $table = "ads";

    protected $fillable = ['name', 'slug', 'desription', 'price', 'price_negotiable', 'sell_options', 'Ad_image_0', 'Ad_image_1', 'Ad_image_2', 'Ad_image_3', 'contactname', 'contactemail', 'contactnumber', 'location', 'hide_number', 'category_id'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function price()
    {
        return $this->belongsTo(Price::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
