<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Limelight|Roboto:400,700" rel="stylesheet">
    <link rel="stylesheet" href={{ asset('css/style.css') }}>
    <title>@yield('title')</title>
</head>
<body>
    @yield('nav')
    <main>
        @yield('main')
    </main>
    <script
    src="https://code.jquery.com/jquery-3.2.1.min.js"
    integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
    crossorigin="anonymous"></script>
    <script src={{ asset('js/script.js') }}></script>
</body>
</html>