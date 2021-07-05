<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MessageLivre extends Model
{
    use HasFactory;

    protected $fillable = ['pseudo', 'message'];
    //public $timestamps=false;
}
