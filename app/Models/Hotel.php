<?php

namespace App\Models;

use App\Models\Gallery;
use App\Models\Roomtype;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Hotel extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function gallery(){
        return $this->hasMany(Gallery::class);
    }

    public function roomtype(){
        return $this->hasMany(Roomtype::class);
    }

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
}
