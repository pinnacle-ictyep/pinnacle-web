<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory; 
    protected $appends = ['images'];

    protected $guarded = ['id'];

    public function hotel(){
        return $this->belongsTo(Hotel::class, 'hotel_id');
    }

    public function getImagesAttribute(){
        return config('app.url').'/storage/'. $this->img_scr;
    }
}
