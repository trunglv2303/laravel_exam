<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
</head>
<body>

<Table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Password</th>
        <th>Eidt </th>
        <th>Delete </th>

    </tr>
    @foreach($users as $user
)
    <tr>
        <td>{{$user->id }} </td>
        <td>{{$user->name }} </td>
        <td>{{$user->email }} </td>
        <td>{{$user->password }} </td>

<td>
    <a href="{{ route('getusereditbyid', $user->id) }}">Edit</a></td>
        <td>
            <form action="{{ route('deleteuser', $user->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        </td>

    </tr>

    @endforeach
</Table>


</body>
</html>
