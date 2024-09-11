<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Device extends Model
{
    use HasFactory;

    // protected $guarded = [];
    protected $table='device';
    protected $fillable = ['ipserver', 'port', 'serial', 'location','detaillocation','bank1','bank2','bank3','bank4','bank5','bank6','bank7'];
}
