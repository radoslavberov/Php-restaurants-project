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
  <a class="btn btn-primary" href="/rents/create">Create</a>
  <br/>
  @if (count ($rents) > 0)
  <table class="table table-dark">
    <tr>
      <th>RestaurantName</th>
      <th>Price</th>
      <th>Available</th>
    </tr>
      @foreach($rents as $rent)
      <tr>
        <td>{{$rent->RestaurantName}}</td>
        <td>{{$rent-> Price}}</td>
        <td>{{$rent -> Available}}</td>
        <td>
          @if(!Auth::guest())
          <form action="{{action('RentsController@destroy', $rent -> id )}}" method="POST">
            {{csrf_field()}}
            <input name="_method" type="hidden" value="DELETE">
            <button type="submit" class="btn btn-danger">DELETE</button>
            <a class="btn btn-primary"  href="{{route('rents.edit', $rent  -> id)}}" method="POST"> EDIT</a>
            @endif
            <a class="btn btn-primary"  href="{{route('rents.show', $rent  -> id)}}" method="POST"> SHOW</a>
          </form>
        </td>
      </tr>
      @endforeach
      @else
      <p>No owners found</p>
      @endif
  </table>
</div>
{{$rents->links()}}
@endsection
