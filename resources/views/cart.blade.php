@extends('layout.depan')

@section('content')
<div class="container">
    <table id="cart" class="table table-hover " style="margin-top:3rem;">
        <thead style="background-color:rgb(255, 53, 53); color:white">
            <tr>
                <th style="width:50%">Produk</th>
                <th style="width:10%">Harga</th>
                <th style="width:8%">Jumlah</th>
                <th style="width:22%" class="text-center">Subtotal</th>
                <th style="width:10%"></th>
            </tr>
        </thead>
        <tbody style="background-color:rgb(255, 171, 161); color:rgb(24, 22, 22)">
            @php $total = 0 @endphp
            @if(session('cart'))
            @foreach(session('cart') as $id => $details)
            @php $total += $details['harga'] * $details['quantity'] @endphp
            <tr data-id="{{ $id }}">
                <td data-th="Product">
                    <div class="row">
                        <div class="col-sm-3 hidden-xs"><img src="{{ asset('gambarproduk/'. $details['gambar'] )}}" width="100" height="100" class="img-responsive" /></div>
                        <div class="col-sm-9">
                            <h4 class="nomargin">{{ $details['nama'] }}</h4>
                        </div>
                    </div>
                </td>
                <td data-th="Price">Rp.{{ $details['harga'] }}</td>
                <td data-th="Quantity">
                    <input type="number" value="{{ $details['quantity'] }}" class="form-control quantity update-cart" />
                </td>


                <td data-th="Subtotal" class="text-center">Rp.{{ $details['harga'] * $details['quantity'] }}</td>
                <td class="actions" data-th="">
                    <a href="{{ route( 'remove.from.cart') }}" class="btn btn-danger btn-sm remove-from-cart"><i class="fa fa fa-trash-alt"></i></a>
                </td>
            </tr>
            @endforeach
            @endif
        </tbody>
        <tfoot>
            <tr>
                <td></td>
                <td></td>
                <td></td>

                <td></td>
                <td colspan="5" class="text-right">
                    <h3><strong style="color: black;">Total Rp.{{ $total }}</strong></h3>
                </td>
            </tr>
            <tr>
                <td colspan="5" class="text-right">

                    <a href="/checkout" class="btn" style="float:right;background-color:rgb(47, 185, 47);color:white">Checkout</a>
                    <a href="{{ url('/') }}" class="btn btn-warning" style="float:right;background-color:rgb(56, 56, 223); color:white"><i class="fa fa-angle-left" style="color:white"></i>Kembali Belanja</a>
                </td>
            </tr>
        </tfoot>
    </table>
</div>
@endsection

@section('scripts')
<script rel="javascript" type="text/javascript" href="js/jquery-1.11.3.min.js" />
$(".update-cart").change(function(e) {
e.preventDefault();

var ele = $(this);

$.ajax({
url: "{{ route('update.cart') }}",
method: "patch",
data: {
_token: '{{ csrf_token() }}',
id: ele.parents("tr").attr("data-id"),
quantity: ele.parents("tr").find(".quantity").val()
},
success: function(response) {
window.location.reload();
}
});
});

$(".remove-from-cart").click(function(e) {
e.preventDefault();

var ele = $(this);

if (confirm("Apa Kamu Yakin Akan Menghapus?")) {
$.ajax({
url: "{{ route( 'remove.from.cart' ) }}",
method: "get",
data: {
_token: '{{ csrf_token() }}',
id: ele.parents("tr").attr("data-id")
},
success: function(response) {
window.location.reload();
}
});
}
});
</script>
@endsection
