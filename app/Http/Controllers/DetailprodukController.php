<?php

namespace App\Http\Controllers;

use App\Models\detailproduk;
use App\Models\Pembayaran;
use App\Models\Product;
use Illuminate\Http\Request;

class DetailprodukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function detail()
    {
        return view('user.detail.detail');
    }


    public function bycategory($category)
    {

        $product = Product::where('kategori', $category)->get();
        return view('user.detail.detail',compact('product'));
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = Product::findOrFail($id);
        $pembayaran = Pembayaran::all();
        return view('user.order',compact('data','pembayaran'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(detailproduk $detailproduk)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, detailproduk $detailproduk)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(detailproduk $detailproduk)
    {
        //
    }
}
