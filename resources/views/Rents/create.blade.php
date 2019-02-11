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
        <label for="Price">Price:</label>
        <input type="text" class="form-control" name="Price" id="price" />
      </div>
      <div class="form-group">
        {{csrf_field()}}
        <p>Available:</p>
          <input type="radio" id="yes" name="Available" value="Yes" checked>
            <label for="yes">Yes</label>
          <input type="radio" id="no" name="Available" value="No">
            <label for="no">No</label>
      </div>
      <select class="form-control m-bot15" name="Restaurant_id">
        <label for="Restaurant_id">Restaurant:</label>
        @foreach($restaurants as $restaurant)
            <option value="{{ $restaurant->id }}">{{ $restaurant->RestaurantName }}</option>
        @endforeach
      </select>
      <div class="form-group">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
  </div>
</div>
@endsection
