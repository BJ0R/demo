<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>

    @if ($errors->any())
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ url('/login') }}">
        @csrf

        <label for="email">Email:</label><br />
        <input type="email" id="email" name="email" value="{{ old('email') }}" required autofocus><br /><br />

        <label for="password">Password:</label><br />
        <input type="password" id="password" name="password" required><br /><br />

        <label>
            <input type="checkbox" name="remember"> Remember Me
        </label><br /><br />

        <button type="submit">Log In</button>
    </form>
</body>
</html>
