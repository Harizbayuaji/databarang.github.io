<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'barangs';
    protected $primaryKey = 'kd_brg';
    protected $timestaps = false;
}
