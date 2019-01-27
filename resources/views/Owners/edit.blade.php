<form action="{{action('OwnersController@update',$owner->id)}}" method="post">
    {{csrf_field()}}
    <input type="hidden" class="form-control" name="_method" value="patch"/>
    <div class="form-group">
        {{csrf_field()}}
        <label for="name">Name:</label>
        <input value="{{$owner['Name']}}" type="text" class="form-control" name="Name" id="name"/>
    </div>
    <div class="form-group">
        {{csrf_field()}}
        <label for="restaurantname">RestaurantName:</label>
        <input value="{{$owner['Subject']}}" type="text" class="form-control" name="RestaurantName" id="restaurantname"/>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary">Save</button>
    </div>
</form>
