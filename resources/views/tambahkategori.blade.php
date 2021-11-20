@extends('layout.admin')

@section('content')

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Le Zato | Tambah Kategori</title>
</head>

<body>


  <div class="content-wrapper"style="background-color:rgb(255, 247, 247);">

    <div class="container">
      <h1 class="text-center mb-5 mt-5" style="color: rgb(201, 0, 0);">Tambah Data Kategori</h1>
      <div class="row justify-content-center mb-5">
        <div class="col-8">
          <div class="card">
            <div class="card-body">
              <form action="/insertkategori" method="POST" enctype="multipart/form-data" style="border-color:rgb(201, 0, 0);">
                @csrf
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Nama Kategori</label>
                  <input type="text" name="nm" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" style="border-color: rgb(201, 0, 0);" required>
                </div>


                <button type="submit" class="btn" style="background-color:rgb(201, 0, 0);color:white;">Submit</button>
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
