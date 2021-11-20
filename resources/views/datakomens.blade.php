@extends('layout.admin')

@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Le Zato | komens Komen</title>
</head>

<body>


  <div class="content-wrapper" style="background-color:rgb(255, 247, 247);">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0" style="color: rgb(201, 0, 0);">Kelola komens Tetimony</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/home">Home</a></li>
              <li class="breadcrumb-item active">Kelola komens Testimony</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

    <div class="container">

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
                <th scope="col">Komentar</th>
                 <th scope="col">Produk</th>
                <th scope="col">Gambar</th>
                    <th scope="col">Tanggal</th>
                 <th scope="col">Aksi</th>
              </tr>
            </thead>
           <tbody style="background-color:rgb(255, 171, 161); color:rgb(24, 22, 22)">
              @php
              $no = 1;
              @endphp
              @foreach($data as $komens)

              <tr>
                <th scope="row">{{ $no++ }}</th>
                <td>{{ $komens->nmplgn }}</td>
                <td>{{$komens->komen }}</td>
                 <td>
                    {{ $komens->katkomen }}
                </td>
                   <td>
                 <a href="{{ asset('gmbrkomen/'.$komens->gmbrkomen)}}" ><img src="{{ asset('gmbrkomen/'.$komens->gmbrkomen)}}" alt="" style="width:40px;"></a>
                </td>

                <td>
                    {{ $komens->tnggl }}
                </td>
                <td>
                  <a href="/deletekomens/{{ $komens->id}}" class="btn btn-danger">Delete</a>
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
