@extends('layout.admin')

@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Le Zato | Data user</title>
</head>

<body>


  <div class="content-wrapper" style="background-color:rgb(255, 247, 247);">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0" style="color:rgb(201, 0, 0);">Data User</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/home">Home</a></li>
              <li class="breadcrumb-item active">Data User</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

    <div class="container">

      <div class="row">


          <table class="table table-stripe">
            <thead style="background-color:rgb(201, 0, 0);color:white;">
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nama</th>
                <th scope="col">Email</th>
                <th scope="col">Status</th>


              </tr>
            </thead>
           <tbody style="background-color:rgb(255, 171, 161); color:rgb(24, 22, 22)">
              @php
              $no = 1;
              @endphp
              @foreach($data as $user)
              <tr>
                <th scope="row">{{ $no++ }}</th>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->is_admin }}</td>
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
