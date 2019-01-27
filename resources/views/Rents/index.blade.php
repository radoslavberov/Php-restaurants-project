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
  <table>
    <tr>
      <th>RestaurantName</th>
      <th>Price</th>
      <th>Available</th>
    </tr>
    <form>
      @foreach($rents as $rent)
      <tr>
        <td>{{$rent-> RestaurantName}}</td>
        <td>{{$rent -> Price}}</td>
        <td>{{$rent -> Available}}</td>
        <td>
          <form action="{{route('rents.destroy', $rent -> id)}}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit" name="btm-btn-danger">Delete</button>
          </form>
        </td>
        <td>
          <a class="btn btn-primary"  href="{{route('rents.show', $rent  -> id)}}" method="POST"> SHOW</a>
          <a class="btn btn-primary"  href="{{route('rents.edit', $rent  -> id)}}" method="POST"> EDIT</a>
        </td>
      </tr>
      @endforeach
    </form>
  </table>
</div>
