@extends('master')
@section('container')
<div class="panel panel-warning">
	<div class="panel-heading">
		<strong><a href="{{ url('supplier') }}"><i style="color:#8a6d3b" class=" fa text-default fa-chevron-left"></i></a> Detail Data supplier</strong>
			</div>
			<table class="table">
				<tr>
						<td>Nama Supplier</td>
						<td>:</td>
						<td>{{ $supplier->nama_supplier }}</td>
				</tr>
				<tr>
						<td>No Hp</td>
						<td>:</td>
						<td>{{ $supplier->no_hp }}</td>
				</tr>
				<tr>
						<td>Alamat</td>
						<td>:</td>
						<td>{{ $supplier->alamat }}</td>
				</tr>
				<tr>
						<td>Email</td>
						<td>:</td>
						<td>{{ $supplier->email }}</td>
				</tr>
				<tr>
						<td class="col-xs-4">Dibuat tanggal</td>
						<td class="col-xs-1">:</td>
						<td>{{$supplier->created_at}}</td>
				</tr>
				<tr>
						<td class="col-xs-4">Diperbarui Tanggal</td>
						<td class="col-xs-1">:</td>
						<td>{{$supplier->updated_at}}</td>
				</tr>
		</table>
</div>
@stop