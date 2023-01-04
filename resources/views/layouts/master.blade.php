<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Switch Template</title>
    <link href="https://fonts.googleapis.com/css?family=Heebo:400,700|IBM+Plex+Sans:600" rel="stylesheet">
    <link rel="stylesheet" href="{{ URL::asset('/dist/css/style.css') }}">   <!-- href="{{ URL::asset('dist/css/style.css') }}" -->
    <script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>
</head>
<body class="is-boxed has-animations">
    <div class="body-wrap boxed-container">

@include('includes.header')

@yield('content')

@include('includes.footer')
    </div>

    <script src="{{ URL::asset('/dist/js/main.min.js') }}"></script>
</body>
</html>
