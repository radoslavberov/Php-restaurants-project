@extends('layout')

@section('content')
<table class="table table-dark">
    <tr>
        <th>RestaurantName</th>
        <th>Address</th>
        <th>Capacity</th>

    </tr>
    <tr>
        <td>{{$restaurant -> RestaurantName}}</td>
        <td>{{$restaurant -> Address}}</td>
        <td>{{$restaurant -> Capacity}}</td>
    </tr>
</table>
