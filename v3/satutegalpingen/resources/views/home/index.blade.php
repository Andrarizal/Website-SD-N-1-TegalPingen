<!doctype html>

<?php 
  // if (auth()->check()) {

  //   return redirect('/t3g4l/ministrator/home');

  // }
?>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.87.0">
    <title>Fixed top navbar example · Bootstrap v5.1</title>

    <!-- Bootstrap core CSS -->
    <!-- <link href="{!! url('assets/bootstrap/css/bootstrap.min.css') !!}" rel="stylesheet"> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">    

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="{!! url('assets/css/app.css') !!}" rel="stylesheet">
</head>
<body> 
    @guest
    <main class="container">
        <a href="{{route('login.show')}}">Login</a>
        <a href="{{route('register.show')}}">Register</a>
        <a href="{{route('registerSuper.show')}}">Register SUper</a>
    </main>
    @endguest
    @auth
      <main class="container">
        <a href="{{route('admin.home')}}">You are logged in as ADMIN, return</a>
    </main>
    @endauth
   <!--  <script src="{!! url('assets/bootstrap/js/bootstrap.bundle.min.js') !!}"></script> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
      
  </body>
</html>
