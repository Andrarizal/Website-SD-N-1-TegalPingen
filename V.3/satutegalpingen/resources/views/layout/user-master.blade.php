<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SD N 1 TegalPingen | </title></title>
    <link rel="stylesheet" href="{!! url('assets/css/bootstrap.min.css') !!}">
    <link rel="stylesheet" href="{!! url('assets/css/owl.carousel.min.css') !!}">
    <link rel="stylesheet" href="{!! url('assets/icon/css/all.min.css') !!}">
    <link rel="stylesheet" href="{!! url('assets/css/style.css') !!}">

</head>

<body>
    
    @include('layout.partials.header')

    <!-- section menu-->
    @include('layout.partials.navbar')
	
	@yield('content')
  
    
    @include('layout.partials.footer')


    <script src="{!! url('assets/js/jquery-3.3.1.slim.min.js') !!}"></script>
    <script src="{!! url('assets/js/bootstrap.min.js') !!}"></script>
    <script src="{!! url('assets/js/owl.carousel.min.js') !!}"></script>
    <script src="{!! url('assets/js/main.js') !!}"></script>
</body>

</html>
