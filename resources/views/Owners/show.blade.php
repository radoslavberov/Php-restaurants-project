@extends('layout')

@section('content')
<table class="table table-dark">
    <tr>
        <th>Name</th>
        <th>RestaurantName</th>
    </tr>
    <tr>
        <td>{{$owner -> Name}}</td>
        <td>{{$owner -> RestaurantName}}</td>
    </tr>
</table>
