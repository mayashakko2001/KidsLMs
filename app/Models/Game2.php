<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game2 extends Model
{
    use HasFactory;
    protected $table = 'games2';
    public $timestamps = false;
    protected $fillable = [
        'path'];
}
