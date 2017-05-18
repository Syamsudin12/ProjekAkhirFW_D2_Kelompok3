@extends('master')
@section('container')
<div class="panel panel-warning">
	<div class="panel-heading">
		<strong><a href="{{ url('karyawan') }}"><i style="color:#8a6d3b" class=" fa text-default fa-chevron-left"></i></a> Detail Data karyawan</strong>
			</div>
			<table class="table">
				<tr>
						<td>Username</td>
						<td>:</td>
						<td>{{ $karyawan->username }}</td>
				</tr>
				<tr>
						<td>Password</td>
						<td>:</td>
						<td>{{ $karyawan->password }}</td>
				</tr>
				<tr>
						<td>Nama</td>
						<td>:</td>
						<td>{{ $karyawan->nama }}</td>
				</tr>
				<tr>
						<td>No Hp</td>
						<td>:</td>
						<td>{{ $karyawan->no_hp }}</td>
				</tr>
				<tr>
						<td>Admin</td>
						<td>:</td>
						<td>{{ $karyawan->id_admin }}</td>
				</tr>
				<tr>
						<td class="col-xs-4">Dibuat tanggal</td>
						<td class="col-xs-1">:</td>
						<td>{{$karyawan->created_at}}</td>
				</tr>
				<tr>
						<td class="col-xs-4">Diperbarui Tanggal</td>
						<td class="col-xs-1">:</td>
						<td>{{$karyawan->updated_at}}</td>
				</tr>
		</table>
</div>
@stop