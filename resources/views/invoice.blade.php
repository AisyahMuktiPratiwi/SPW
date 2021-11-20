@extends('layout.admin')

@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Le Zato | Data Invoice</title>
</head>

<body>


  <div class="content-wrapper" style="background-color:rgb(255, 247, 247);">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0" style="color: rgb(201, 0, 0)">Kelola Data Invoice</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/home">Home</a></li>
              <li class="breadcrumb-item active">Kelola Data Invoice</li>
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
                <th scope="col">#</th>
                <th scope="col">Kode</th>
                <th scope="col">Nama</th>
                <th scope="col">Email</th>
                <th scope="col">No Hp</th>
                <th scope="col">Alamat</th>
                <th scope="col">Metode Pembayaran</th>
                <th scope="col">Rekening</th>
                <th scope="col">Print</th>

              </tr>
            </thead>
           <tbody style="background-color:rgb(255, 171, 161); color:rgb(24, 22, 22)">
              @php
              $no = 1;
              @endphp
              @foreach($data as $inv)
              <tr>
                <th scope="row">{{ $no++ }}</th>
                <td> <a href="/detailinv/{{ $inv->id}}">{{ $inv->kodeunik }}</a></td>
                <td>{{ $inv->name }}</td>
                <td>{{ $inv->email }}</td>
                <td>{{ $inv->nohp }}</td>
                <td>{{ $inv->alamat }}</td>
                <td>{{ $inv->metodepembayaran }}</td>
                <td>{{ $inv->rekening }}</td>
                <td><a href="{{ route('cetakinv', $inv->id) }}" class="btn" style="background-color:rgb(201, 0, 0)"><i class="fa fa-print" aria-hidden="true" style="color:white"></i></a></td>
              </tr>
              @endforeach

            </tbody>
          </table>
        </div>
      </div>

    </div>


  </div>
</body>

</html>
@endsection
