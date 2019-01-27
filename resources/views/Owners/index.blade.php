<table>
    <tr>
        <th>Name</th>
        <th>RestaurantName</th>
    </tr>
    <form>
        @foreach($owners as $owner)
            <tr>
                <td>{{$owner-> Name}}</td>
                <td>{{$owner -> RestaurantName}}</td>
                <td>
                  <form class="" action="{{route('owners.destroy', $owner  -> id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" name="btm-btn-danger">Delete</button>
                  </form>
                </td>
                <td>
                    <a class="btn btn-primary"  href="{{route('owners.show', $owner  -> id)}}" method="POST"> SHOW</a>
                    <a class="btn btn-primary"  href="{{route('owners.edit', $owner  -> id)}}" method="POST"> EDIT</a>
                </td>
            </tr>
        @endforeach
    </form>
</table>
