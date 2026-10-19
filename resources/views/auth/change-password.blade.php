
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Password</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 24px 16px;
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #e0eaff, #f5f3ff);
        }

        .container {
            width: 100%;
            max-width: 420px;
            padding: 32px;
            background: #ffffff;
            border-radius: 16px;
            box-shadow: 0 10px 35px rgba(37, 99, 235, 0.12);
        }

        .icon {
            width: 58px;
            height: 58px;
            margin: 0 auto 16px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            background: #dbeafe;
            font-size: 28px;
        }

        h1 {
            margin: 0 0 8px;
            color: #1e293b;
            text-align: center;
            font-size: 26px;
        }

        .subtitle {
            margin: 0 0 26px;
            color: #64748b;
            text-align: center;
            font-size: 14px;
            line-height: 1.5;
        }

        label {
            display: block;
            margin: 17px 0 8px;
            color: #334155;
            font-size: 14px;
            font-weight: bold;
        }

        input {
            width: 100%;
            height: 46px;
            padding: 12px;
            border: 1px solid #cbd5e1;
            border-radius: 8px;
            outline: none;
            font-size: 15px;
            transition: border-color 0.2s, box-shadow 0.2s;
        }

        input:focus {
            border-color: #2563eb;
            box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.12);
        }

        .error-box {
            padding: 10px 14px;
            margin-bottom: 16px;
            border-radius: 8px;
            background: #fef2f2;
            color: #dc2626;
            font-size: 14px;
        }

        .error-box ul {
            margin: 0;
            padding-left: 20px;
        }

        button {
            width: 100%;
            min-height: 46px;
            margin-top: 26px;
            border: none;
            border-radius: 8px;
            background: #2563eb;
            color: white;
            font-size: 15px;
            font-weight: bold;
            cursor: pointer;
            transition: background 0.2s;
        }

        button:hover {
            background: #1d4ed8;
        }

        .back-link {
            display: block;
            margin-top: 22px;
            color: #2563eb;
            text-align: center;
            text-decoration: none;
            font-size: 14px;
        }

        .back-link:hover {
            text-decoration: underline;
        }

        @media (max-width: 480px) {
            .container {
                padding: 24px 20px;
            }
        }

.password-wrapper {
    position: relative;
}

.password-wrapper input {
    padding-right: 48px;
}

.toggle-password {
    position: absolute;
    right: 10px;
    top: 50%;
    transform: translateY(-50%);
    width: 32px;
    height: 32px;
    margin: 0;
    padding: 0;
    background: transparent;
    color: #64748b;
    border: none;
    font-size: 18px;
    cursor: pointer;
}

.toggle-password:hover {
    background: transparent;
    color: #2563eb;
}

    </style>
</head>

<body>
    <div class="container">

        <div class="icon">🔒</div>

        <h1>Change Password</h1>

        <p class="subtitle">
            Create a strong password to keep your account secure.
        </p>

        @if ($errors->any())
            <div class="error-box">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="/password/change" method="POST">
            @csrf




<label for="current_password">Current Password</label>
<div class="password-wrapper">
    <input
        type="password"
        id="current_password"
        name="current_password"
        autocomplete="current-password"
        required
    >
    <button
        type="button"
        class="toggle-password"
        onclick="togglePassword('current_password', this)"
        aria-label="Show current password"
    >👁</button>
</div>

<label for="password">New Password</label>
<div class="password-wrapper">
    <input
        type="password"
        id="password"
        name="password"
        autocomplete="new-password"
        required
    >
    <button
        type="button"
        class="toggle-password"
        onclick="togglePassword('password', this)"
        aria-label="Show new password"
    >👁</button>
</div>

<label for="password_confirmation">Confirm New Password</label>
<div class="password-wrapper">
    <input
        type="password"
        id="password_confirmation"
        name="password_confirmation"
        autocomplete="new-password"
        required
    >
    <button
        type="button"
        class="toggle-password"
        onclick="togglePassword('password_confirmation', this)"
        aria-label="Show confirmed password"
    >👁</button>
</div>

<button type="submit">Update Password</button>



        </form>

        <a class="back-link" href="/dashboard">
            ← Back to Dashboard
        </a>

    </div>

<script>
    function togglePassword(inputId, button) {
        const input = document.getElementById(inputId);

        if (input.type === 'password') {
            input.type = 'text';
            button.textContent = '🙈';
            button.setAttribute('aria-label', 'Hide password');
        } else {
            input.type = 'password';
            button.textContent = '👁';
            button.setAttribute('aria-label', 'Show password');
        }
    }
</script>

</body>
</html>
