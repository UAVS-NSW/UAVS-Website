<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sponsor extends Model
{
    use HasFactory;
    protected $table = 'sponsor';
    protected $fillable = ['image', 'description', 'infor', 'carrers', 'status', 'created_at', 'updated_at'];
}
