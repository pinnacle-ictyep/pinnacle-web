<?php

namespace App\Models;

use App\Models\Gallery;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Roomtype extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $appends = ['images'];

    public function getImagesAttribute(){
        return config('app.url').'/storage/'. $this->image;
    }

    // public function gallery(){
    //     return $this->hasMany(Gallery::class, 'roomtype_id');
    // }

    public function hotel(){
        return $this->belongsTo(Hotel::class, 'hotel_id');
    }
}
