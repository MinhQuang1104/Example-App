<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>List users</h2>
<table border="1">
    <tr>
        <td>ID</td>
        <td>Name</td>
        <td>Email</td>
        <td>Action</td>
    </tr>
    {{-- @foreach($users as $user)
        <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>
                <a href="{{route('edit', [$user->id])}}">Update</a> <br>
                <a href="{{route('delete', [$user->id])}}">Delete</a>
            </td>
        </tr>
    @endforeach --}}
</table>
{{-- <a href="{{ route('signout') }}">Logout</a> --}}
</body>
