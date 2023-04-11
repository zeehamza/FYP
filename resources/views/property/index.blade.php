<table id="showBooksIn" class="table table-bordered">
    <thead>
        <tr>
            <th>Name</th>
            <th>Location</th>
            <th>Total Rooms</th>
            <th>Type</th>
            <th>Washroom</th>
            <th>Kitchen</th>
            <th>Furnished</th>
            <th>Floor</th>
            <th>Price</th>
            <th>Image</th>
        </tr>
    </thead>
    @foreach($properties as $row)
    <tr>
        <td>{{$row['name']}}</td>
        <td>{{$row['location']}}</td>
        <td>{{$row['total_rooms']}}</td>
        <td>{{$row['type']}}</td>
        <td>{{$row['washroom']}}</td>
        <td>{{$row['kitchen']}}</td>
        <td>{{$row['furnished']}}</td>
        <td>{{$row['floor']}}</td>
        <td>Rs {{$row['price']}}</td>
        <td><img src="images/{{$row['image']}}" alt="{{$row['name']}}" width="100" height="100"></td>
    </tr>
    @endforeach
</table>