@extends('layout')

@section('content')
<table class="table table-dark">
    <tr>
        <th>RestaurantName</th>
        <th>Price</th>
        <th>Available</th>

    </tr>
    <tr>
        <td>{{$rent -> RestaurantName}}</td>
        <td>{{$rent -> Price}}</td>
        <td>{{$rent -> Available}}</td>
    </tr>
</table>
