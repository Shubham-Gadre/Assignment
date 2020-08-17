@extends('Product.common')


@section('content')
    @if($msg= Session::get('success') )
         <div class="alert alert-success">
             <p>{{$msg}}</p>
        </div>
    @endif

    <div class="row">
            <div class="col">
               <div class="table-responsive">
                              <table class="table table-striped table-hover">
                                 <thead>
                                  <tr>
                                    <th>ID</th>
                                    <th>Title</th>
                                    <th>Details</th>
                                     <th>Price</th>                    
                                    <th>Action</th>
                                  </tr>
                                 </thead>
                                 @foreach($products as $product )
                                 <tbody>
                                    <tr>
                                      <td>{{$product->$id}}</td>
                                      <td>{{$product->$title}}</td>
                                      <td>{{$product->$details}}</td>
                                      <td>{{$product->$price}}</td>
                                     
                                      
                                      <td>
                                            <a class="btn btn-info" href="{{ route('product.destroy', $product->$id) }}">Delete</a>

                                            <a class="btn btn-info" href="{{route()}}">action</a>
                                      </td>
                                      
                                    </tr>
                                    
                                 </tbody>
                                 @endforeach
                                 
                              </table>
                     </div>
            </div>
          </div>          
@endsection