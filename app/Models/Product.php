<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model

{
    use HasFactory;
    
    protected $table = 'product' ;
    protected $filable = [
        'nama_sepatu',
        'kategori',
        'gambar',
        'ukuran',
        'harga',
        'qty'

    ];
}
