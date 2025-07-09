<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rima extends Model
{
    /** @use HasFactory<\Database\Factories\RimaFactory> */
    use HasFactory;
    protected $guarded = ['id'];
}
