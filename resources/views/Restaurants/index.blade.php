@extends('layout')

@section('content')
<style>
.uper {
  margin-top: 40px;
}
</style>
<div class="uper">
  @if(session()->get('success'))
  <div class="alert alert-success">
    {{ session()->get('success') }}
  </div><br />
  @endif
  <a class="btn btn-primary" href="/restaurants/create">Create</a>
  <table class="table table-dark">
    <tr>
      <th>RestaurantName</th>
      <th>Address</th>
      <th>Capacity</th>
    </tr>
    <form>
      @foreach($restaurants as $restaurant)
      <tr>
        <td>{{$restaurant-> RestaurantName}}</td>
        <td>{{$restaurant -> Address}}</td>
        <td>{{$restaurant -> Capacity}}</td>
        <td>
            @if(!Auth::guest())
          <form action="{{route('restaurants.destroy', $restaurant -> id)}}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">DELETE</button>

          </form>
        </td>
        <td>
          <a class="btn btn-primary"  href="{{route('restaurants.edit', $restaurant  -> id)}}" method="POST"> EDIT</a>
          @endif
        </td>
        <td>
          <a class="btn btn-primary"  href="{{route('restaurants.show', $restaurant  -> id)}}" method="POST"> SHOW</a>
        </td>
      </tr>
      @endforeach
    </form>
  </table>
</div>
@endsection
