<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>Register</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
  <h1>Create an account</h1>

  @if ($errors->any())
    <div style="color:red;">
      <ul>
        @foreach ($errors->all() as $e)
          <li>{{ $e }}</li>
        @endforeach
      </ul>
    </div>
  @endif

  <form method="POST" action="{{ url('/register') }}">
    @csrf
    <div>
      <label>Email</label><br>
      <input type="email" name="email" value="{{ old('email') }}" required>
    </div>

    <div>
      <label>Password (min 8 chars)</label><br>
      <input type="password" name="password" required>
    </div>

    <div>
      <label>Confirm Password</label><br>
      <input type="password" name="password_confirmation" required>
    </div>

    <button type="submit">Register</button>
  </form>

  <p>Already have an account? <a href="{{ route('login') }}">Login</a></p>
</body>
</html>
