<!DOCTYPE html>
<html>
<head>
    <title>Laravel Vue CRUD</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    @vite('resources/js/app.js')
    @vite('resources/css/app.css')
</head>
<body>
<div id="app">
    <data-component></data-component>
</div>
<script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
