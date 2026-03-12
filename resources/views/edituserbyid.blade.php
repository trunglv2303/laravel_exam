<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
</head>
<body>
<form action="/api/updateusers/{{ $user->id }}" method="POST">
    @csrf
    <label>Name</label><br>
    <input type="text" name="name" value="{{ $user->name }}">
    <br><br>
    <label>Email</label><br>
    <input type="email" name="email" value="{{ $user->email }}">
    <br><br>
    <label>Password</label><br>
    <input type="password" name="password">
    <br><br>
    <button type="submit">Update User</button>
</form>
</body>

</html>
