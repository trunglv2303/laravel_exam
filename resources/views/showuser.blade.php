<!DOCTYPE html>
<html>
<head>
    <title>User Detail</title>
</head>
<body>

<h1>User Detail</h1>

<p>ID: {{ $user->id }}</p>
<p>Name: {{ $user->name }}</p>
<p>Email: {{ $user->email }}</p>

<h1>User Update</h1>

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
<h1>Adduser </h1>
<form action="/api/users" method="POST">
    @csrf
    <label>Name</label><br>
    <input type="text" name="name" >
    <br><br>
    <label>Email</label><br>
    <input type="email" name="email">
    <br><br>
    <label>Password</label><br>
    <input type="password" name="password">
    <br><br>
    <button type="submit">Add  User</button>
</form>
</body>
</html>
