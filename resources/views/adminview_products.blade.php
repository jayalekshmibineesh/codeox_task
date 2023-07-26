@extends('index_admin')
@section('content') 
<div class="container" >
    <div class="row">
        <div class="col-4">
        </div>
        <center>
            <table class="table table-bordered table-danger table-striped" style="width:90% ;">
                <tr>
                    <th>product Name</th>
                    <th>Product image</th>
                    <th>product price</th>
                    <th>product details</th>
                    <th>status</th>
                    <th colspan="2">Action <th>
                    
                </tr>
                @foreach($product as $products)
                <tr>
                    <td>{{ $products->product_name }}</td>
                    <td><img src="{{asset('storage/images/'.$products->image)}}" alt="" width="70px" height="50px"></td>
                    <td>{{ $products->product_price }}</td>
                    <td>{{ $products->product_details }}</td>
                    <td>{{ $products->status }}</td>
                    <td><a class="btn btn-primary" href="{{ route('product_update', $products->product_id) }}">edit</a> </td>
                    <td><a  class="btn btn-danger"href="{{ route('deleteproduct', $products->product_id) }}"> delete</a></td>
                 </tr> 
                @endforeach
            </table>
            </center>
    
    </div> 
</div>
@endsection
