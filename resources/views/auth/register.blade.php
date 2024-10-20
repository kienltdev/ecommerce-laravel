<!DOCTYPE html>
<html>
<head>
    <title>User Registration</title>
</head>
<body>
    <h1>Register</h1>
    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <label>Name:</label>
        <input type="text" name="name" value="{{ old('name') }}" required><br>

        <label>Email:</label>
        <input type="email" name="email" value="{{ old('email') }}" required><br>

        <label>Password:</label>
        <input type="password" name="password" required><br>

        <label>Confirm Password:</label>
        <input type="password" name="password_confirmation" required><br>

        <button type="submit">Register</button>
    </form>
</body>
</html>
