<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    use HasFactory;

    protected $table = 'pembayaran' ;
    protected $filable = [
        'pilih_pembayaran',
        'status_pembayaran'

    ];

}
