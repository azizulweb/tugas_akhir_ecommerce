<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $table = 'order' ;
    protected $filable = [
        'id_product',
        'id_users',
        'id_pembayaran',
        'jumlah_pesanan',
        'total_harga',
        'tanggal_order'
    ];

    public function user()
    {
       return $this->belongsTo(User::class,'id_users', 'id');  
    }
    public function product()
    {
       return $this->belongsTo(Product::class,'id_product', 'id');  
    }
    public function pembayaran()
    {
       return $this->belongsTo(Pembayaran::class,'id_pembayaran', 'id');  
    }
}
