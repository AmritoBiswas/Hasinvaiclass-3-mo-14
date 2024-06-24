<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://matcha.mizu.sh/matcha.css">
    <title>{{$title}}</title>
</head>
<body>
    <menu>
       <li><a href="/">Home</a></li>
       <li><a href="/login">Login</a></li>
       <li><a href="/form">Form</a></li>
       <li><a href="/contact">Contact</a></li>
    </menu>
    {{$slot}}
</body>
</html>