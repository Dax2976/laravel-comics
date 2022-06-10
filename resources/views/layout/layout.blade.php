<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dc Comics</title>
    <link rel="stylesheet" href="{{'/css/app.css'}}">
</head>

<body>
    @include('partials.header')
    <main>
        @yield('content')
    </main>
    <main>
        @include('partials.footer')
    </main>
    
</body>

</html>