@extends('layout')

@section('content')
<style>
.uper {
  margin-top: 40px;
}
</style>
<div class="card uper">
  <div class="card-header">
    Add Restaurant
  </div>
  <div class="card-body">
    @if ($errors->any())
    <div class="alert alert-danger">
      <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div><br />
    @endif
    <form action="/restaurants" method="post">
      {{csrf_field()}}
      <div class="form-group">
        {{csrf_field()}}
        <label for="RestaurantName">RestaurantName:</label>
        <input type="text" class="form-control" name="RestaurantName" id="restaurantname" />
      </div>
      <div class="form-group">
        {{csrf_field()}}
        <label for="Address">Address:</label>
        <input type="text" class="form-control" name="Address" id="address" />
      </div>
      <div class="form-group">
        {{csrf_field()}}
        <label for="Capacity">Capacity:</label>
        <input type="text" class="form-control" name="Capacity" id="capacity" />
      </div>
      <div class="form-group">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
  </div>
</div>
@endsection
