<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Laravel 5 Fundamentals</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>
<body>

    <div class="container">

        @include('partials.flash')

        @yield('content')
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

    <script>
        $('div.alert').not('.alert-important').delay(3000).slideUp(300);
    </script>

</body>
</html>