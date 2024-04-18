<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TestBag1 extends Model
{
    use HasFactory;
    protected $table = 'test_bag_1';
    protected $fillable = [
        'nama_user',
        'type_user',
        'no_hp_user',
        'komentar_user',
    ];
}
