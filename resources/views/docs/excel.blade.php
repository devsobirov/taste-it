<table border="1" cellspacing="0" cellpadding="5">
    <thead>
    <tr>
        <th>#ID</th>
        <th>Food name</th>
        <th>Image</th>
        <th>Category</th>
    </tr>
    </thead>
    <tbody>
    @foreach($food as $item)
        <tr>
            <td >{{ $item->id }}</td>
            <td >{{ $item->name }}</td>
            <td ><img src="{{$item->image}}"></td>
            <td >{{ $item->category->name }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
