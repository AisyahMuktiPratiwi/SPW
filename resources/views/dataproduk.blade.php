@extends('layout.admin')

@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Le Zato | Data Produk</title>
</head>

<body>


  <div class="content-wrapper" style="background-color:rgb(255, 247, 247);">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0" style="color:rgb(201, 0, 0);">Kelola Data Produk</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/home">Home</a></li>
              <li class="breadcrumb-item active">Kelola Data Produk</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

    <div class="container">
      <a href="/tambahproduk" class="btn mb-2" style="color:white;background-color:rgb(201, 0, 0);">Tambah+</a>

      <div class="row">
        <div class="col-12">
          @if ($message = Session::get('success'))
          <div class="alert alert-success" role="alert">
            {{ $message }}
          </div>
          @endif
          <table class="table table-stripe">
            <thead style="background-color: rgb(201, 0, 0);color:white">
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nama</th>
                <th scope="col">Kategori</th>
                <th scope="col">Stok</th>
                <th scope="col">Rasa</th>
                <th scope="col">Harga</th>
                <th scope="col">Gambar</th>
                <th scope="col">Aksi</th>

              </tr>
            </thead>
            <tbody style="background-color:rgb(255, 171, 161); color:rgb(24, 22, 22)">
              @php
              $no = 1;
              @endphp
              @foreach($data as $row)

              <tr>
                <th scope="row">{{ $no++ }}</th>
                <td>{{ $row->nama }}</td>
                <td>{{ $row->kategori }}</td>
                <td>{{ $row->stok }}</td>
                <td>{{ $row->rasa }}</td>
                <td>Rp.{{$row->harga }}</td>
                <td>
                  <img src="{{ asset('gambarproduk/'.$row->gambar)}}" alt="" style="width:40px;">
                </td>
                <td><a href="/tampilkanproduk/{{ $row->id}}" class="btn btn-warning" style="color:white">Edit</a>
                  <a href="/deleteproduk/{{ $row->id}}" class="btn btn-danger">Delete</a>
                </td>
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
