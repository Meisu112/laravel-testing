<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <h1>Welcome to Dashboard!</h1>
    @if (session('success'))
    <p style="color: green;">
        {{ session('success') }}
    </p>
@endif

    <h2>User Information</h2>

    <p>
        <strong>Name:</strong>
        {{ $user->name }}
    </p>

    <p>
        <strong>Email:</strong>
        {{ $user->email }}
    </p>
    <p>
    <strong>Phone Number:</strong>
    {{ $user->phone }}
    </p>
    <p>
    <a href="/profile/edit">Edit Profile</a>
    </p>
<p><a href="/password/change">Change Password</a></p>
    <form action="/logout" method="POST">
        @csrf
        <button type="submit">Logout</button>
    </form>
</body>
</html>
