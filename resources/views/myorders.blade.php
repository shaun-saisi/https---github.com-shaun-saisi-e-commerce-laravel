@extends('master')
@section("content")
<div class=" custom-product">
  <div class="col-sm-10">
    <div class="trending-wrapper">
      <h4>My Orders</h4>
      
      @foreach($orders as $item)
        <div class=" row searched-item cart-list-divider">
          <div class="col-sm-3">
            <a href="detail/{{$item->id}}">
                <img class="trending-image" src="{{$item->gallery}}">
              </a>
          </div>
          <div class="col-sm-4">
              <div class="">
                <h2>{{$item->name}}</h2>
                <h5>{{$item->description}}</h5>
              </div>    
          </div>
          
        </div>
      @endforeach      
    </div>
    <a class="btn btn-success"href="ordernow">Buy Now</a><br><br>
  </div>
</div>
@endsection