
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Laravel Testing</title>
</head>
<body>
    <h1>PHP Laravel Testing Project</h1>

    <p>Enter your information below.</p>

    <form action="/testing" method="POST">
        @csrf

        <div>
            <label>Name:</label>
            <input type="text" name="name"
                   value="{{ old('name') }}" required>
        </div>

        <br>

        <div>
            <label>Email:</label>
            <input type="email" name="email"
                   value="{{ old('email') }}" required>
        </div>

        <br>

        <button type="submit">Submit</button>
    </form>

    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    @isset($result)
        <hr>
        <h2>Success! Data Received.</h2>

        <p>Name: {{ $result['name'] }}</p>
        <p>Email: {{ $result['email'] }}</p>
    @endisset
</body>
</html>
