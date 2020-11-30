<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Mercury"> <!-- Add more text -->
    <meta name="author" content="MatheusSw">

    <link rel="stylesheet" href="https://use.typekit.net/zbt3frp.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link href="{{ mix('/css/app.css') }}" rel="stylesheet">

    <title>Mercury</title> <!-- Add blade layout for page name e.g: Mercury - Home -->
</head>

<body class="text-primary">
<div id="root"></div>
</body>

<script src="{{ asset('js/app.js') }}"></script>
</html>

