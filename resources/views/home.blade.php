<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Laravel primi passi</title>

    <!-- Fonts -->

    <!-- Styles -->
    <style>

    </style>
</head>

<body class="bg-dark">
    <div class="container">
        <div class="row m-2 py-5">
            <div class="col-12 text-center text-white">
                <h1>Hello World</h1>
                <h3>{{$message}}</h3>
                <h5>{{$name.' '.$surname}}</h5>
            </div>
        </div>
    </div>
    
    
    
</body>

</html>