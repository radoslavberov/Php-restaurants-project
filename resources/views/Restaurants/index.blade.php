<table>
    <tr>
        <th>RestaurantName</th>
        <th>Address</th>
        <th>Capacity</th>
    </tr>
    <form>
        @foreach($restaurants as $restaurant)
            <tr>
                <td>{{$restaurant-> RestaurantName}}</td>
                <td>{{$restaurant -> Address}}</td>
                <td>{{$restaurant -> Capacity}}</td>
                <td>

                    <a class="btn btn-primary"  href="{{route('restaurants.show', $restaurant  -> id)}}" method="POST"> SHOW</a>
                    <a class="btn btn-primary"  href="{{route('restaurants.edit', $restaurant  -> id)}}" method="POST"> EDIT</a>
                </td>
            </tr>
        @endforeach
    </form>
</table>
