<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @include('front.layout.nav')
    <div class="row">
       @yield('right')
       @yield('main')
       @yield('left')
    </div>

</body>
</html>