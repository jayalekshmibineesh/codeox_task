@extends('customer_index')
@section('content')
<div class="container">
 <div class="row">
    @foreach($approvedProducts as $product) 
         <div class="card mb-4" style="width:500px">
           <center><img src="{{asset('storage/images/'.$product->image)}}" alt="" width="300px" height="50px">
            <h3>Product Name:{{$product->product_name}} </h3>
             <p> Price:{{$product->product_price}}</p>
              <p>Details:{{$product->product_details}}</p>
         </div>
         &nbsp;&nbsp;&nbsp;&nbsp;
         </center>
@endforeach
  </div>
 </div>
@endsection