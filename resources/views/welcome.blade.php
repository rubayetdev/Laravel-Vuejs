{{--welcome.blade.php--}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Vue CRUD</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">
<div id="app">
    <crud-component></crud-component>
        @vite('resources/js/app.js')
    <data-component></data-component>
</div>
<script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
