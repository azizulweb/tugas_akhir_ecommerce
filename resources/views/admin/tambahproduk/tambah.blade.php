@extends('layout.header')
@section('content')

<body class="bg-caffe">
    <div class="container border mb-4 mt-4 rounded-3 shadow bg-dark-subtle">
        <!-- Menu -->



        <!--Catalouge -->
        <h3 class="text-center"> Product</h3>
        <div class="text-center w-50 mx-auto fw-light bold-text">Pilihlan Sepatu terbaikmu!!! <div>Show Your Choice, Show Your Charm</div></div>
            <form  action="{{route('simpanproduk')}}" method="post" enctype="multipart/form-data">
              @csrf
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nama Sepatu</label>
                <input type="text" name="nama_sepatu" class="form-control" id="exampleFormControlInput1" >
              </div>
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Kategori</label>
                <select  name="kategori" class="form-select" aria-label="Default select example">
                  <option selected></option>
                  @foreach ($kategori as $item)
                  <option value="{{$item->id}}">{{$item->category}}-{{$item->gender}}</option>
                  @endforeach
                </select>
              </div>
              <div class="input-group mb-3">
                <label class="input-group-text" for="inputGroupFile02">Gambar Produk</label>
                <input name="gambar" type="file" class="form-control" id="inputGroupFile02">
              </div>
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Ukuran</label>
                <input type="text" name="ukuran" class="form-control" id="exampleFormControlInput1" >
              </div>
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Harga</label>
                <input type="text" name="harga" class="form-control" id="exampleFormControlInput1" >
              </div>
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Stok</label>
                <input type="text" name="qty" class="form-control" id="exampleFormControlInput1" >
              </div>
              
              <div>
                <button type="submit" class="btn btn-info">Tambah Barang</button>
              </div>
           </form>
    </div>



   
</body>
@endsection