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
  <table class="table table-dark">
    <tr>
      <th>Name</th>
      <th>RestaurantName</th>
    </tr>
    <form>
      @foreach($owners as $owner)
      <tr>
        <td>{{$owner-> Name}}</td>
        <td>{{$owner -> RestaurantName}}</td>
        <td>
          <form action="{{route('owners.destroy', $owner  -> id)}}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete</button>
          </form>
        </td>
        <td>
          <a class="btn btn-primary"  href="{{route('owners.show', $owner  -> id)}}" method="POST"> SHOW</a>
          <a class="btn btn-primary"  href="{{route('owners.edit', $owner  -> id)}}" method="POST"> EDIT</a>
        </td>
      </tr>
      @endforeach
    </form>
  </table>
</div>
