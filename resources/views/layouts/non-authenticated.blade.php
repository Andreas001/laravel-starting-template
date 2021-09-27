<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Current session is not authenticated, please login" name="description" />
    <meta content="Author" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    @include('layouts.shared.head')
</head>

<body>
    @yield('content')
    @include('layouts.shared.footer-script')
</body>

</html>