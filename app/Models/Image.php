<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    // Specify the table name if it's not the default (optional, Laravel assumes `images`)
    protected $table = 'images';

    // Define which attributes can be mass-assigned (fillable fields)
    protected $fillable = ['filepath'];
}
