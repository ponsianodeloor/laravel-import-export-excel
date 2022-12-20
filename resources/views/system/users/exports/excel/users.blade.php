<table>
    <thead>
    <tr>
        <th>id</th>
        <th>User</th>
        <th>Email</th>
        <th>Date created</th>
        <th>Date Updated</th>
    </tr>

    </thead>
    <tbody>
    @foreach($users as $user)
        <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->created_at}}</td>
            <td>{{$user->updated_at}}</td>
        </tr>
    @endforeach
    </tbody>
</table>
