@extends('layout.depan')

@section('content')

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Le Zato | Tambah Testimony</title>
</head>

<body>


  <div class="content-wrapper" >

    <div class="container">
      <h1 class="text-center mb-5 mt-5" style="color:rgb(201, 0, 0) ;">Tambah Testimony</h1>
      <div class="row justify-content-center mb-5">
        <div class="col-8">
          <div class="card">
            <div class="card-body">
              <form action="/insertkomen" method="POST" enctype="multipart/form-data" style="border-color:blueviolet;">
                @csrf
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Nama Pengguna</label>
                  <input type="text" name="nmplgn" class="form-control" id="exampleInputEmail1" value="{{Auth::user()->name}}" aria-describedby="emailHelp" style="border-color:blueviolet;"required readonly>
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Komentar</label>
                  <input type="text" name="komen" class="form-control" id="exampleInputEmail1"  aria-describedby="emailHelp" style="border-color:blueviolet;"required >
                </div>
                       <div class="mb-3">
                  <select class="form-select" name="katkomen" aria-label="Default select example" style="border-color: blueviolet;" required>
                    <option selected>--Pilih Nama Produk--</option>
                    @foreach($produk as $pr)
                    <option value="{{$pr->nama}}">{{$pr->nama}}</option>
                    @endforeach
                  </select>
                </div>

      <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label" style="border-color: blueviolet;">Gambar</label>
                  <input type="file" class="form-control" name="gmbrkomen" style="border-color: blueviolet;" required>
                </div>
  <div class="mb-3">

                  <input type="text" name="tnggl" value="{{ $tanggal }}" class="form-control" id="exampleInputEmail1"  aria-describedby="emailHelp" style="border:none;"required >
                </div>
                <button type="submit" class="btn"style="background-color:rgb(201, 0, 0);color:white">Submit</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>


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
