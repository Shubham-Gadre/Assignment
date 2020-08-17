@extends('Product.common')


  @section('content')
    <div class="container">
       	      <div class="row">
       	      	 <div class="col-sm-4">
       	      	 </div>
       	      	 <div class="col-sm-4">

                  

       	      	 	<form method="post" action="{{route('Product.store') }}">
                          @csrf
                        <h2 class="text-center">Products</h2>
                        <hr>
                        <label>Title</label>
                        <input type="text" class="form-control" name="title" required><br>
                        <label>Price</label>
                        <input type="number" class="form-control" name="price" required><br>
                        <label>Details</label>
                        <input type="textarea" class="form-control" name="details" required><br>
                        <button type="submit" class="btn btn-primary">Add</button>
       	      	 	</form>
       	      	 </div>
       	      </div>
       </div>
   @endsection