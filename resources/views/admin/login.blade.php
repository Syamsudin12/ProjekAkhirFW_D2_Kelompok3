<!DOCTYPE html>
<html lang="en">
<head>
		<meta charset="utf-8">
	<title>@yield('page_title','Halaman Awal') | Laboratorium FW</title>
	<link rel="stylesheet" type="text/css" href="{{asset('component/bootstrap/dist/css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('component/bootstrap/dist/css/font-awesome.min.css')}}">
	<style type="text/css">
		body{
			padding-top: 70px;
			padding-bottom: 70px
		}

		.startter-template{
			padding: 40px 15px;
			text-align: center;
		}

		.from-horizontal{
			padding-top: 15px 10px;
		}

		footer{
			padding-top: 15px;
			text-align: right;
		}
	</style>
</head>
<body>
	<nav class="navbar navbar-default navbar-fixed-top"><div class="container"><div class="navbar-header">
	<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expended="false" aria-controls="#navbar">
		<span class="sr-only">Toggle navigation</span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
	</button>
	<a href="{{url('/')}}" class="navbar-brand">Laravel-5</a>
			</div>
		</div>
	</nav>
<div class="clearfix"></div>
	<div class="col-md-4 col-offset-4">
		@if (count($errors) > 0)
							<div class="alert alert-danger">
								<ul>
									@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
									@endforeach
								</ul>
							</div>
							@endif
		<div class="panel panel-default">
			<div class="panel-heading">
				<strong>Masuk Aplikasi</strong>
			</div>
{!! From::open(['url'=>'login','class'=>'from-horizontal'])!!}
	<div class="from-group"><label class="col-sm-4 control-lable">Username</label>
	<div class="col-sm-8">
		{!!From::text('Username',null,['class'=>'from-control','placeholder'=>"Username"])!!}

	</div>
	</div>
	<div class="from-group">
		<label class="col-sm-4 control-lable">Password</label>
		<div class="col-sm-8">
		{!!From::password('password'['class'=>'from-control','placeholder'=>"Password"])!!}
		</div>
	</div>
	<div style="width: 100%;text-align: right;">
		<button class="btn btn-primary"><i class="fa fa-lock"></i>Masuk</button>
		<button type="reset" class="btn btn-danger"><i class="fa fa-undo"></i>Ulangi</button>
	</div>
	{!! From::close() !!}
		</div>
		</div>
		<nav class="navbar navbar-default navbar-fixed-bottom">
			<footer class="container">
				
			</footer>
		</nav>
		<script type="text/javascript" src="{{asset('component/jquery/dist/jquery.min.js') }}"></script>
        <script type="text/javascript" src="{{asset('component/bootstrap/dist/js/bootstrap.min.js') }}"></script>
        <script type="text/javascript">
        $(function () {
        $('[data-toggle="tooltip"]').tooltip()
        });
        </script>
</body>
</html>