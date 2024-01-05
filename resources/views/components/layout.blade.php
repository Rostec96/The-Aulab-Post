<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <title>The Aulab Post</title>

</head>
<body>
    
<x-navbar />

<div class="min-vh-100">
    {{$slot}}
</div>

</body>
</html>