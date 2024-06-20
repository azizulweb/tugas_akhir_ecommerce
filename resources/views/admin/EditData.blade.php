@extends('layout.header')
@section('content')

<body class="bg-caffe">
    <div class="container border mb-4 mt-4 rounded-3 shadow bg-dark-subtle">
        <!-- Menu -->



        <!--Catalouge -->
        <h3 class="text-center">Edit Data Product</h3>
        <div class="text-center w-50 mx-auto fw-light bold-text">Pilihlan Sepatu terbaikmu!!! <div>Show Your Choice, Show Your Charm</div></div>
            <form action="{{route('update.pesanan', $order->id)}}" method="post">
              @csrf
              @method('PUT')
              <div class="mb-3">
                <input name="id_users" value="{{Auth::user()->id}}" type="hidden" class="form-control" id="exampleFormControlInput1" >
              </div>
              <div class="mb-3">
                <input name="id_product" value="{{$order->id}}" type="hidden" class="form-control" id="exampleFormControlInput1" >
              </div>
              <select name="id_pembayaran" class="form-select" aria-label="Default select example">
                    <option selected>Pilih Pembayaran</option>
                    @foreach ($pembayaran as $item)
                    <option value="{{$item->id}}">{{$item->pilih_pembayaran}}</option>    
                    @endforeach
              </select>
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Jumlah Pemesanan</label>
                <input type="number" name="jumlah_pesanan" min="1" class="form-control" id="exampleFormControlInput1"  value="{{ $order->jumlah_pesanan }}">
              </div>
              <div class="mb-3">
                <input type="hidden" name="harga" value="{{$order->harga}}" min="1" class="form-control" id="exampleFormControlInput1" value="{{ $order->harga }}" >
              </div>
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Tanggal Order</label>
                <input type="date" name="tanggal_order" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com"  value="{{ $order->tanggal_order }}">
              </div>
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Ukuran</label>
                <select name="ukuran" class="form-select" aria-label="Default select example">
                    <option value="37" {{ $order->ukuran == 37 ? 'selected' : '' }}>37</option>
                    <option value="38" {{ $order->ukuran == 38 ? 'selected' : '' }}>38</option>
                    <option value="39" {{ $order->ukuran == 39 ? 'selected' : '' }}>39</option>
                    <option value="40" {{ $order->ukuran == 40 ? 'selected' : '' }}>40</option>
                    <option value="41" {{ $order->ukuran == 41 ? 'selected' : '' }}>41</option>
                    <option value="42" {{ $order->ukuran == 42 ? 'selected' : '' }}>42</option>
                    <option value="43" {{ $order->ukuran == 43 ? 'selected' : '' }}>43</option>
                </select>
              </div>
              
              <div>
                <button type="submit" class="btn btn-warning">Update</button>
              </div>
           </form>
    </div>



   
</body>
@endsection