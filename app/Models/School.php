<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    use HasFactory;
    protected $table = 'school';
    protected $fillable = ['image', 'name', 'email', 'website', 'address', 'status', 'created_at', 'updated_at'];
}
