@extends('layout')

@section('content')
<style>
.uper {
  margin-top: 40px;
}
</style>
<div class="card uper">
  <div class="card-header">
    Add Rent
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
    <form action="/rents" method="post">
      {{csrf_field()}}
      <div class="form-group">
        {{csrf_field()}}
        <label for="RestaurantName">RestaurantName:</label>
        <input type="text" class="form-control" name="RestaurantName" id="restaurantname" />
      </div>
      <div class="form-group">
        {{csrf_field()}}
        <label for="Price">Price:</label>
        <input type="text" class="form-control" name="Price" id="price" />
      </div>
      <div class="form-group">
        {{csrf_field()}}
        <label for="Available">Available:</label>
        <input type="text" class="form-control" name="Available" id="Available" />
      </div>
      <div class="form-group">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
  </div>
</div>
@endsection
