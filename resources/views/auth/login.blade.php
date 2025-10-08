<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>Login</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
  <h1>Login</h1>

  @if ($errors->any())
    <div style="color:red;">
      <ul>
        @foreach ($errors->all() as $e)
          <li>{{ $e }}</li>
        @endforeach
      </ul>
    </div>
  @endif

  <form method="POST" action="{{ url('/login') }}">
    @csrf
    <div>
      <label>Email</label><br>
      <input type="email" name="email" value="{{ old('email') }}" required autofocus>
    </div>
    <div>
      <label>Password</label><br>
      <input type="password" name="password" required>
    </div>
    <button type="submit">Login</button>
  </form>

  <p>No account? <a href="{{ route('register') }}">Register</a></p>
</body>
</html>
