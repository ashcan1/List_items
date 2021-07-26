<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class fruit extends Model
{
    protected $table='fruit';

    use HasFactory;
    public $timestamps=false;
}
