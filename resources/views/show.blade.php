<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Last Name</th>
            <th scope="col">Email</th>
            <th scope="col">Phone Number</th>
            <th scope="col">Description</th>
            <th scope="col">Edit | Remove</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $item)
        <tr>
            <td>{{ $item->id }}</td>
            <td>{{ $item->Name }}</td>
            <td>{{ $item->Lastname }}</td>
            <td>{{ $item->Email }}</td>
            <td>{{ $item->Phonenumber }}</td>
            <td>{{ $item->Description }}</td>
            <td>
                <a href="/delete/{{$item->id}}">Delete</a>
                <a href="/edit/{{$item->id}}">Edit</a>
            </td>

        </tr>
        @endforeach
    </tbody>
</table>
