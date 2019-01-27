<form action="/owners" method="post">
    {{csrf_field()}}
    <div class="form-group">
        {{csrf_field()}}
        <label for="name">Name:</label>
        <input type="text" class="form-control" name="Name" id="name" />
    </div>
    <div class="form-group">
        {{csrf_field()}}
        <label for="restaurantname">RestaurantName:</label>
        <input type="text" class="form-control" name="RestaurantName" id="restaurantname" />
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>
