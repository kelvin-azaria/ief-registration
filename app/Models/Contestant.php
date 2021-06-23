<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contestant extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 
        'campus_name',
        'campus_province',
        'campus_city',
        'id_card_address',
        'residence_address',
        'phone',
        'birth_date',
        'instagram_video_url',
        'description',
    ];
}
