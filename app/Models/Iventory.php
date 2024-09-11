<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Iventory extends Model
{
    use HasFactory;
    protected $table='iventory';
    protected $fillable = ['namabarang', 'stockin', 'stockout','stock'];
}
