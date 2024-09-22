<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>
<body>
    

    <header>
        <h1>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consequatur sed aliquid quasi molestiae voluptate est accusamus tenetur accusantium, iste inventore fugiat, sint nostrum illo ratione corporis error repellat sit blanditiis?</h1>
    </header>

    @yield('content')
    <script src="{{ asset('js/script.js') }}"></script>

</body>
</html>