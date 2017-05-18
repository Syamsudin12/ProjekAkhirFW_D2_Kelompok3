<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield('page_title','Halaman Awal') | Apotek Kimia Farma</title>
	<link rel="stylesheet" type="text/css" href="{{asset('component/bootstrap/dist/css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('component/font-awesome/css/font-awesome.min.css')}}">
	<style type="text/css">
			body {
					padding-top: 70px;
					padding-bottom: 70px;
			}
			.starter-template {
					padding: 40px 15px;
					text-align: center;
			}
			.form-horizontal{
					padding: 15px 10px;
			}
			footer{
					padding-top: 15px;
					text-align: right;
			}
	</style>
</head>
<body>
		<nav class="navbar navbar-default navbar-fixed-top">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false"aria-controls="navbar">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a href="{{url('/')}}" class="navbar-brand">Apotek</a>
					</div>
					<div id="navbar" class="collapse navbar-collapse">
						<ul class="nav navbar-nav">
							
							<li class="dropdown active">
								<a href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Supplier <span class="caret"></span> </a>
								<ul class="dropdown-menu" aria-labelledby="dlabel">
									<li><a href="{{url('supplier')}}">Supplier</a></ul></li>
							<li class="dropdown active">
								<a href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Pembelian <span class="caret"></span> </a>
								<ul class="dropdown-menu" aria-labelledby="dlabel">
									<li><a href="{{url('pembelian')}}">Pembelian</a></ul></li>

							<li class="dropdown active">
								<a href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Barang <span class="caret"></span> </a>
								<ul class="dropdown-menu" aria-labelledby="dlabel">
									<li><a href="{{url('barang')}}">Barang</a></ul></li>

							<li class="dropdown active">
								<a href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Kategori <span class="caret"></span> </a>
								<ul class="dropdown-menu" aria-labelledby="dlabel">
									<li><a href="{{url('kategori')}}">Kategori</a></ul></li>

							<li class="dropdown active">
								<a href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Konsumen <span class="caret"></span> </a>
								<ul class="dropdown-menu" aria-labelledby="dlabel">
									<li><a href="{{url('konsumen')}}">Konsumen</a></ul></li>

							<li class="dropdown active">
								<a href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Transaksi <span class="caret"></span> </a>
								<ul class="dropdown-menu" aria-labelledby="dlabel">
								<li><a href="{{url('transaksi')}}">Transaksi</a></li>
								<li class="divider"></li>
								<li><a href="{{url('detail_pembelian')}}">Detail Pmebelian</a></li>
								<li class="divider"></li>
								<li><a href="{{url('detail_transaksi')}}">Detail Transaksi</a></li>	
								</ul>
							<li class="dropdown active">
							 	<a href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Pengaturan <span class="caret"></span> </a>
								<ul class="dropdown-menu" aria-labelledby="dlabel">
								<li><a href="{{url('admin')}}">Bos</a></li>
								<li class="divider"></li>
								<li><a href="{{url('karyawan')}}">Karyawan</a></li>
								</ul>
							</li>
							</ul>
									</div><!--/.nav-collapse-->
								</div>
							</nav>
							<div class="clearfix"></div>
							<div class="container">
									@if (Session::has('informasi'))
											<div class="alert alert-info">
													<strong>Informasi :</strong>
				{{Session::get('informasi')}}
									</div>
							@endif
							@if (count($errors) > 0)
							<div class="alert alert-danger">
								<ul>
									@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
									@endforeach
								</ul>
							</div>
							@endif
							@yield('container')
					</div>
					<nav class="navbar navbar-default navbar-fixed-bottom">
					<footer class="container">
									<!-- please dont delete this -->
									created by <a href="https://www.facebook.com/syamsudin.hadi.1">
									<span>
									<i class="fa fa-facebook" style="color:#1da1f2"></i>
									@Kelompok3</span></a>
									<!--please dont delete this-->
									
                                    </nav>
                                    <script type="text/javascript" src="{{asset('component/jquery/dist/jquery.min.js') }}"></script>
                                    <script type="text/javascript" src="{{asset('component/bootstrap/dist/js/bootstrap.min.js') }}"></script>
                                    <script type="text/javascript">
                                    $(function () {
                                    $('[data-toggle="tooltip"]').tooltip()
                                         });
                                        </script>
                                    </body>