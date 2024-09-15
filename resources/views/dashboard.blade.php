<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"> <!-- Jika menggunakan CSS -->
</head>
<body>
    <div style="text-align: center; padding: 50px;">
        <h1>Dashboard</h1>
        <p>Welcome to the dashboard!</p>
        <a href="{{ route('login') }}" style="text-decoration: none; color: blue;">Go to Login</a>
    </div>
</body>
</html>
