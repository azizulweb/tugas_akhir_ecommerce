<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\kategori;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function product()

    {
        $man = kategori::where('gender', 'Man')->get();
        $woman = kategori::where('gender', 'Woman')->get();
        // dd($groupedProducts);
        return view('user.product',compact('man','woman'));
                
    }

    public function show(string $id)
    {

        $data = Product::find($id);
        return view('user.order',compact('data'));
        

                
    }

    public function productadmin()
    {
     
        $man = kategori::where('gender', 'Man')->get();
        $woman = kategori::where('gender', 'Woman')->get();
        // dd($groupedProducts);
        return view('admin.admin',compact('man','woman'));
    }

    public function create()
    {
        $kategori= kategori::all();
        return view('admin.tambahproduk.tambah', compact('kategori'));
    }

    public function store(Request $request)
    {
        // dd($request->all());
        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $fileName = $request->nama_sepatu . '.' . $file->getClientOriginalExtension();
            $path = $file->storeAs('public/Produk', $fileName);
        }
        $produk =new product();
        $produk->nama_sepatu=$request->nama_sepatu;
        $produk->kategori=$request->kategori;
        $produk->ukuran=$request->ukuran;
        $produk->harga=$request->harga;
        $produk->qty=$request->qty;
        $produk->gambar=str_replace('public', 'storage', $path);
        $produk->save();
        return redirect('/admin/produk');
    }
}


