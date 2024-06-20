@extends('layout.header')
@section('content')

<div class="container border mb-4 mt-4 rounded-3 shadow bg-dark-subtle">
    <!-- Menu -->
    <!--Catalouge -->
    <h3 class="text-center">Data Pembelian</h3>
    <div>
      <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">Id Product</th>
            <th scope="col">Id Pembayaran</th>
            <th scope="col">Metode Pembayaran</th>
            <th scope="col">Total Pesanan</th>
            <th scope="col">Total Harga</th>
            <th scope="col">Size</th>
            <th scope="col">Tanggal Pesanan</th>
            
          </tr>
        </thead>
        <tbody>
            @foreach ($order as $item )

      <tr>
            <td>{{ $item->user->name }}</td>
            <td>{{ $item->product->nama_sepatu}}</td>
            <td>{{ $item->pembayaran->pilih_pembayaran }}</td>
            <td>{{ $item->jumlah_pesanan }}</td>
            <td>{{ $item->total_harga }}</td>
            <td>{{ $item->ukuran }}</td>
            <td>{{ $item->tanggal_order }}</td>
        <td>
            <td>
              @if (Auth::user()->role == 'admin')
              <a href="{{route('user.DataOrder', $item->id)}}" class="btn btn-warning">Edit</a>
            </td>
           @endif
           <td>
             <form action="{{url('/hapuspesanan')}}" method="POST" >
               @csrf
               @method('delete')
               <input type="hidden" name="id" value="{{$item->id}}">
               <button type="submit" class="btn btn-danger">Delete</button>
             </form>
           </td>
        </td>
      </tr>

          @endforeach
        </tbody>
    </table>
      <div class="d-flex justify-content-end">
        <a href="{{url('/user/produk')}}" class="btn btn-dark">Back to Page</a>
      </div>
  </div>

</div>



@endsection