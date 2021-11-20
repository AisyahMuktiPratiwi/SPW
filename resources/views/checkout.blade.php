@extends('layout.depan')

@section('content')


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Le Zato | Checkout</title>
</head>

<body style="background-color:rgb(255, 247, 247);">
    <h1 style="color:rgb(179, 0, 0); text-align:center;margin-top:2rem">Konfirmasi Pembayaran</h1>
    <div class="container">
        <form action="/pembayaran" method="POST" enctype="multipart/form-data" style="margin-top: 3rem;color:rgba(0, 0, 0, 0.575);">
            @csrf

            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label" required>Nama</label>
                        <input type="text" name="name" class="form-control" id="exampleInputEmail1" value="{{Auth::user()->name}}" aria-describedby="emailHelp" style="border-color:blueviolet;"required>
                    </div>
                     <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label" required>Email</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" name="email" value="{{Auth::user()->email}}" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label" required>No HP</label>
                        <input type="text" name="nohp" class="form-control" id="exampleInputEmail1" required>
                    </div>
                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label" required>Alamat</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" name="alamat" required>
                    </div>
                    <select class="form-select" aria-label="Default select example" name="metodepembayaran" style=" color:blueviolet" required>
                        <option value="kosong">Metode Pembayaran</option>
                        <option value="COD">COD
                        <option>
                        <option value="Dana|86869685">Dana|86869685
                        <option>
                        <option value="BNI|878796">BNI|878796
                        <option>
                        <option value="BRI|767507">Dana|76757
                        <option>
                        <option value="BCA|345565">Dana|345565
                        <option>

                    </select>
                     <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Rekening</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" name="rekening">
                    </div>



                </div>
                @php
            $no = 1;
            @endphp
            @php $total = 0 @endphp
            @if(session('cart'))
            @foreach(session('cart') as $id => $details)
            @php $total += $details['harga'] * $details['quantity'] @endphp
                <div class="col-md-6"  data-id="{{ $id }}">
                                       <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Order</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" readonly name="produk" value="{{ $details['nama'] }}">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Total Item</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" readonly name="totalitem" value="{{ $details['quantity'] }}">
                    </div>

                        <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Total Harga</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" readonly name="totalharga" value=" Rp.{{ $details['harga'] * $details['quantity'] }}">
                    </div>




                      @endforeach
                       <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">kode unik</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" readonly name="kodeunik" value="{{ $nomer}}">
                    </div>
                                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label" style="border-color: blueviolet;">Bukti</label>
                        <input type="file" class="form-control" name="bukti" style="border-color: blueviolet;">
                    </div>
                      <button type="submit" class="btn btn-primary" style="float: right; background-color: rgb(201, 0, 0);">Pesan</button>


                </div>


            </div>


        </form>
    </div>
    </div>

    @endif

    @endsection
    <input type="text" class="form-control" id="exampleInputEmail1" readonly name="kodeunik" value="{{$nomer}}">

    @section('scripts')
    <script rel="javascript" type="text/javascript" href="js/jquery-1.11.3.min.js" />
    $(".update-cart").change(function(e) {
    e.preventDefault();

    var ele = $(this);

    $.ajax({
    url: "{{ route('update.cart') }}" , method: "patch" , data: { _token: '{{ csrf_token() }}' , id: ele.parents("tr").attr("data-id"), quantity: ele.parents("tr").find(".quantity").val() }, success: function(response) { window.location.reload(); } }); }); </script>



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>

@endsection
