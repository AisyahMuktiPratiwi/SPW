<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Le zato|Cetak Invoice</title>
</head>
<body>
<div class="container">
<br>
<br>
<img src="{{ asset('template/dist/img/logo2.png') }}" style="text-align:center;width:85px;margin-top:2rem;display:block;margin:auto">
<h1  style="text-align:center;margin-top:1rem;">Invoice Pembelian</h1>
<table class="table table-bordered" style="margin-top:1rem;">
   <thead >
              <tr>
                  <th scope="col">Nama</th>
                <th scope="col">Produk</th>
                <th scope="col">Total Item</th>
                <th scope="col">Harga</th>

              </tr>
            </thead>
              <tbody>

              <tr>
                <th> {{$data->name }}</th>
                <th> {{$data->produk }}</th>
                <th> {{$data->totalitem }}</th>
                <th> {{$data->totalharga }}</th>
                </tr>


</table>
            <h5 style="float:right"> {{ $data->kodeunik }}</h5>

</div>
<script type="text/javascript">window.print();</script>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
</body>
</html>
