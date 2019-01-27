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

                    <a class="btn btn-primary"  href="{{route('rents.show', $rent  -> id)}}" method="POST"> SHOW</a>
                    <a class="btn btn-primary"  href="{{route('rents.edit', $rent  -> id)}}" method="POST"> EDIT</a>
                </td>
            </tr>
        @endforeach
    </form>
</table>
