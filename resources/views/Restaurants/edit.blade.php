<form action="{{action('RestaurantsController@update',$restaurant->id)}}" method="post">
    {{csrf_field()}}
    <input type="hidden" class="form-control" name="_method" value="patch"/>
    <div class="form-group">
        {{csrf_field()}}
        <label for="RestaurantName">RestaurantName:</label>
        <input value="{{$restaurant['RestaurantName']}}" type="text" class="form-control" name="RestaurantName" id="restaurantname"/>
    </div>
    <div class="form-group">
        {{csrf_field()}}
        <label for="Address">Address:</label>
        <input value="{{$restaurant['Address']}}" type="text" class="form-control" name="Address" id="address"/>
    </div>
    <div class="form-group">
        {{csrf_field()}}
        <label for="Capacity">Capacity:</label>
        <input value="{{$restaurant['Available']}}" type="text" class="form-control" name="Capacity" id="capacity"/>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary">Save</button>
    </div>
</form>
