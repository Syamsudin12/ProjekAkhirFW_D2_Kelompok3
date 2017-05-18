<!DOCTYPE html>
<html lang="en"> 
  <head>  
    <title>Blog Template for Bootstrap</title>
    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="../css/blog.css" rel="stylesheet">
  </head>
  <body>
    @include('layouts.nav')
    <div class="container">
      <div class="row">
       @yield('content')
       @include('layouts.sidebar')
        </div><!-- /.blog-sidebar -->
      </div><!-- /.row -->
    </div><!-- /.container -->
@include('layouts.footer')
