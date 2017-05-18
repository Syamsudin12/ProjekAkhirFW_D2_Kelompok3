@extends('master')
@section('container')
<div class="panel panel-info">
	<div class="panel-heading">
		<strong><a href="{{ url('konsumen') }}">
<i class="fa text-default fa-chevron-left"></i>
</a> Perbarui Data konsumen</strong>
	</div>
	{!! Form::model($konsumen,['url'=>'konsumen/edit/'.$konsumen->id,'class'=>'form-horizontal']) !!}
		@include('konsumen.form')
		<div style="width:100%;text-align:right;">
			<button class="btn btn-info"><i class="fa fa-save"></i>Perbarui</button>
			<button type="reset" class="btn btn danger"><i class="fa fa-undo"></i> Ulangi</button>
			</div>
			{!! Form::close() !!}
			</div>
			@stop