<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Pembayaran;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function pembelian(string $id)
    {
        $order = Order::where('id_users', $id)->get();
        return view('user.DataOrder', compact('order'));
    }

    public function datapembelian(  )
    {
        $order = Order::all();
        return view('admin.DataAdmin', compact('order'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function checkout(Request $request)
    {
        $total_harga=$request->jumlah_pesanan * $request->harga;
        // dd($total_harga);
        $order = new Order();
        $order->id_product=$request->id_product;
        $order->id_users=$request->id_users;
        $order->id_pembayaran=$request->id_pembayaran;
        $order->jumlah_pesanan=$request->jumlah_pesanan;
        $order->ukuran=$request->ukuran;
        $order->tanggal_order=$request->tanggal_order;
        $order->total_harga=$total_harga;
        $order->save();
        return redirect('/DataOrder/'.$request->id_users);
    }

    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {
         // Ambil semua data order beserta relasi user dan payment
         $item= Order::with(['users', 'product', 'pembayaran'])->findOrFail($order);
        
         // Kirim data ke view
         return view('user.DataOrder',  compact('order'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit (string $id)
    {
        $order = Order::find($id);
        $pembayaran=Pembayaran::all();
        return view('admin.EditData', compact('order','pembayaran'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = Order::findOrFail($id);  
        $data->id_pembayaran=$request->id_pembayaran;
        $data->jumlah_pesanan=$request->jumlah_pesanan;
        $data->tanggal_order=$request->tanggal_order;
        $data->ukuran=$request->ukuran;
        $data->save();
        return redirect('DataOrder-admin');
        
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $order=Order::findOrFail($request->id);
        $order->delete();
        return redirect('/DataOrder-admin');
    }

    public function delete(Request $request)
    {
        $order=Order::findOrFail($request->id);
        $order->delete();
        return redirect('/DataOrder/'.$request->userid);
    }
}
