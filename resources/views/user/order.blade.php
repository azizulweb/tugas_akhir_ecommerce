@extends('layout.header')
@section('content')

<body class="bg-caffe">
    <div class="container border mb-4 mt-4 rounded-3 shadow bg-dark-subtle">
        <!-- Menu -->



        <!--Catalouge -->
        <h3 class="text-center">Order Product</h3>
        <div class="text-center w-50 mx-auto fw-light bold-text">Pilihlan Sepatu terbaikmu!!! <div>Show Your Choice, Show Your Charm</div></div>
            <form action="{{route('checkout')}}" method="post">
              @csrf
              <div class="mb-3">
                <input name="id_users" value="{{Auth::user()->id}}" type="hidden" class="form-control" id="exampleFormControlInput1" >
              </div>
              <div class="mb-3">
                <input name="id_product" value="{{$data->id}}" type="hidden" class="form-control" id="exampleFormControlInput1" >
              </div>
              <select name="id_pembayaran" class="form-select" aria-label="Default select example">
                <option selected>Pilih Pembayaran</option>
                @foreach ($pembayaran as $item)
                <option value="{{$item->id}}">{{$item->pilih_pembayaran}}</option>    
                @endforeach
              </select>
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Jumlah Pemesanan</label>
                <input type="number" name="jumlah_pesanan" min="1" class="form-control" id="exampleFormControlInput1" >
              </div>
              <div class="mb-3">
                <input type="hidden" name="harga" value="{{$data->harga}}" min="1" class="form-control" id="exampleFormControlInput1" >
              </div>
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Tanggal Order</label>
                <input type="date" name="tanggal_order" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
              </div>
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Ukuran</label>
                <input type="number" name="ukuran" min="37" max="43" class="form-control" id="exampleFormControlInput1" >
              </div>
              
              <div>
                <button type="submit" class="btn btn-info">Check Out</button>
              </div>
           </form>
    </div>



   
</body>
@endsection