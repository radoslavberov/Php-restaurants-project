<form action="/rents" method="post">
    {{csrf_field()}}
    <div class="form-group">
        {{csrf_field()}}
        <label for="name">RestaurantName:</label>
        <input type="text" class="form-control" name="RestaurantName" id="restaurantname" />
    </div>
    <div class="form-group">
        {{csrf_field()}}
        <label for="Price">Price:</label>
        <input type="text" class="form-control" name="Price" id="price" />
    </div>
    <div class="form-group">
        {{csrf_field()}}
        <label for="Available">Available:</label>
        <input type="text" class="form-control" name="Available" id="Available" />
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>
