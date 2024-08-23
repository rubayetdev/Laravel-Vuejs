<!-- resources/views/login.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link href="{{ mix('css/app.css') }}" rel="stylesheet"> <!-- Tailwind CSS -->
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">
<div id="app">
    <login-component></login-component>
    @vite('resources/js/app.js')
</div>
<script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
