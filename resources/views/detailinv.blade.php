@extends('layout.admin')

@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Le Zato | Data Detail Invoice</title>
</head>

<body>


  <div class="content-wrapper" style="background-color:rgb(255, 247, 247);">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0" style="color:rgb(201, 0, 0);">Detail Invoice</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/home">Home</a></li>
              <li class="breadcrumb-item active">Detail Invoice</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

    <div class="container">

      <div class="row">
        <div class="col-12">
          @if ($message = Session::get('success'))
          <div class="alert alert-primary" role="alert">
            {{ $message }}
          </div>
          @endif
          <table class="table table-stripe">
            <thead style="background-color:rgb(201, 0, 0);color:white;">
              <tr>

                <th scope="col">Produk</th>
                <th scope="col">Total Item</th>
                <th scope="col">Total Harga</th>
                <th scope="col">Bukti Pembayran</th>
              </tr>
            </thead>
         <tbody style="background-color:rgb(255, 171, 161); color:rgb(24, 22, 22)">
              <tr>

                <td>{{$data->produk }}</td>
                <td>{{$data->totalitem }}</td>
                <td>{{$data->totalharga }}</td>
                <td>
                 <a href="{{ asset('buktiproduk/'.$data->bukti)}}" ><img src="{{ asset('buktiproduk/'.$data->bukti)}}" alt="" style="width:40px;"></a>
                </td>
              </tr>


            </tbody>
          </table>
        </div>
      </div>

    </div>


  </div>
</body>

</html>
@endsection
