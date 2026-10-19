<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background: #f3f4f6;
            margin: 0;
            padding: 40px 16px;
        }

        .container {
            max-width: 420px;
            margin: auto;
            padding: 30px;
            background: white;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
        }

        h1 {
            text-align: center;
        }

        label {
            display: block;
            margin: 16px 0 7px;
            font-weight: bold;
        }

        input {
            width: 100%;
            height: 42px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 6px;
        }

        button {
            width: 100%;
            margin-top: 22px;
            padding: 12px;
            background: #2563eb;
            color: white;
            border: none;
            border-radius: 6px;
            cursor: pointer;
        }

        .error {
            color: red;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Edit Profile</h1>

        @if ($errors->any())
            <ul class="error">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif

        <form action="/profile/update" method="POST">
            @csrf

            <label for="name">Name</label>
            <input
                type="text"
                id="name"
                name="name"
                value="{{ old('name', $user->name) }}"
                required
            >

            <label for="phone">Phone Number</label>
            <input
                type="tel"
                id="phone"
                name="phone"
                value="{{ old('phone', $user->phone) }}"
                required
            >

            <button type="submit">Update Profile</button>
        </form>

        <p><a href="/dashboard">Back to Dashboard</a></p>
    </div>
</body>
</html>
