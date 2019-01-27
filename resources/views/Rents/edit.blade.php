<form action="{{action('RentsController@update',$rent->id)}}" method="post">
    {{csrf_field()}}
    <input type="hidden" class="form-control" name="_method" value="patch"/>
    <div class="form-group">
        {{csrf_field()}}
        <label for="RestaurantName">RestaurantName:</label>
        <input value="{{$rent['RestaurantName']}}" type="text" class="form-control" name="RestaurantName" id="restaurantname"/>
    </div>
    <div class="form-group">
        {{csrf_field()}}
        <label for="Price">Price:</label>
        <input value="{{$rent['Price']}}" type="text" class="form-control" name="Price" id="price"/>
    </div>
    <div class="form-group">
        {{csrf_field()}}
        <label for="Available">Available:</label>
        <input value="{{$rent['Available']}}" type="text" class="form-control" name="Available" id="available"/>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary">Save</button>
    </div>
</form>
