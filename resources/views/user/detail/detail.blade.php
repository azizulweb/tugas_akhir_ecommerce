@extends('layout.header')
@yield('content')
<body class="bg-caffe">
    <div class="container border mb-4 mt-4 rounded-3 shadow bg-dark-subtle">
        <!-- Menu -->



        <!--Catalouge -->
            <h3 class="text-center">Detail Product</h3>
            <div class="text-center w-50 mx-auto fw-light">Pilihlan Sepatu terbaikmu!!! <div>Show Your Choice, Show Your Charm</div></div>
        

    <div class="row row-cols-md-3 row-cols-2 gx-5 p-5">
           @foreach ( $product as $item )
           <div class="col mb-5">
            <div class="card shadow">
                <img src="{{ asset($item->gambar) }}" class="card-img-top">
                <div class="card-body ">
                    <h5 class="card-title">{{$item->nama_sepatu}}</h5>
                    <p class="card-text"></p><span>Stok :</span>{{$item->qty}}</p>
                </div>

                <div class="card-footer d-md-flex">
                    <a href="{{route('order.product', $item->id)}}" type="button" class="btn btn-success">Buy</a>
                    <span class="m-auto text-dark fw-bold d-block text-center">{{$item->harga}}</span>
                </div>

            </div>
        </div>
           @endforeach
        
    </div>
    <div class="d-flex justify-content-end">
        @if (Auth::user()->role == 'user')
        <a href="{{url('/user/produk')}}" class="btn btn-dark">Back to Page</a>
        @else
        <a href="{{url('/admin/produk')}}" class="btn btn-dark">Back to Page</a>
        @endif
      </div>

    </div>



   
</body>


