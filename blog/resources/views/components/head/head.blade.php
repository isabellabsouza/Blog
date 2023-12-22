<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <x-head.bootstrap/>
    <x-head.tinymce-config/>
    <x-head.google-fonts/>

    <!-- CSS -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css">

    <!-- Favicon -->
    <link rel="shortcut icon" href="/assets/favicon.png" type="image/x-icon">

    <title>{{ $title }}</title>
</head>

<body>

    {{ $slot }}


</body>

</html>
