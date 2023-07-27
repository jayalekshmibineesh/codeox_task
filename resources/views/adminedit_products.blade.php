@extends('userhome_index')
@section('content')
@if(session('success'))
<div class="alert alert-success">
  {!!session('success')!!}
</div>
@endif
<section class="">  
  <!-- <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6"> -->
          <div class="card" style="background-color:#fae6c4; with:500border-radius: 15px; margin-top:20%;">
            <div class="card-body p-5">
              <h3 class="text-uppercase text-center mb-5">Edit Product</h3>
              <form action="{{route('product_update',$data->product_id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-outline mb-4 mt-2">
                  <input type="text" id="form3Example1cg"name="product_name"  value="{{$data->product_name}}" placeholder="Enter product name"class="form-control form-control-lg" />
                  <input type="file"name="image" id="form3Example4cg"placeholder="Enter image" value="{{$data->image}}"  class="form-control form-control-lg mt-2" />
                  <input type="text"name="product_details" id="form3Example4cg"  value="{{$data->product_details}}" placeholder="Enter  product details" class="form-control form-control-lg mt-2" />
                  <input type="text" name="product_price" id="form3Example4cdg"  value="{{$data->product_price}}" placeholder="Enter product price" class="form-control form-control-lg mt-2 mb-2" />
                 <div class="d-flex justify-content-center">
                    <button type="submit" class="btn btn-primary"name="submit" value="register">Update</button>
                 </div>
              </form>
            </div>
          </div>
        <!-- </div>
      </div>
    </div>
  </div> -->
</section>

@endsection