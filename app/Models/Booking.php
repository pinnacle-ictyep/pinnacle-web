<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function hotel(){
        $this->belongsTo(Hotel::class, 'hotel_id');
    }

    public function roomtype(){
        $this->belongsTo(Roomtype::class, 'roomtype-id');
    }
    public function user(){
        $this->belongsTo(User::class);
    }
}
