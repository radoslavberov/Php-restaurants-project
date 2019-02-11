@extends('layout')

@section('content')
<div class="uper">
  @if(session()->get('success'))
  <div class="alert alert-success">
    {{ session()->get('success') }}
  </div><br />
  @endif
</br>
</br>
  <a class="btn btn-primary" href="/owners/create">Create</a>
  <br/>
  @if (count ($owners) > 0)
  <table class="table table-dark">
    <thead>
      <tr>
        <th>Name</th>
        <th>RestaurantName</th>
        <th></th>
      </tr>
    </thead>
    @foreach($owners as $owner)
    <tr>
      <td>{{$owner-> Name}}</td>
      <td>{{$owner -> RestaurantName}}</td>
      <td>
        @if(!Auth::guest())
        <form action="{{action('OwnersController@destroy', $owner->id )}}" method="POST">
          {{csrf_field()}}
          <input name="_method" type="hidden" value="DELETE">
          <button type="submit" class="btn btn-danger">DELETE</button>
          <a class="btn btn-primary"  href="{{route('owners.edit', $owner  -> id)}}" method="POST"> EDIT</a>
          @endif
          <a class="btn btn-primary"  href="{{route('owners.show', $owner  -> id)}}" method="POST"> SHOW</a>
        </form>
      </td>
    </tr>
    @endforeach
    @else
    <p>No owners found</p>
    @endif
  </table>
</div>
{{$owners->links()}}
@endsection
