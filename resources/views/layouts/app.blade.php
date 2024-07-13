<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sizzles & Sage</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="icon" href="{{ asset('images/favicon.png') }}" type="image/x-icon">
    <!-- Include Google Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oleo+Script+Swash+Caps&display=swap" rel="stylesheet">
    <!-- Additional stylesheets, scripts, etc. -->
</head>
<body>

@include('includes.header')

<div class="content">
    @yield('content')
</div>

@include('includes.footer')

</body>
</html>
