@extends('master')
@section('container')
<div class="panel panel-default">
	<div class="panel-heading">
			<strong>Seluruh Data karyawan</strong>
			<a href="{{ url('karyawan/tambah') }}" class="btn btn-xs btn-primary pull-right">
		<i class="fa fa-plus"></i>karyawan</a>
				<div class="clearfix"></div>
			</div>
			<table class="table">
						<thead>
							<tr>
									<th>No.</th>
									<th>Username</th>
									<th>Password</th>
									<th>Nama</th>
									<th>No Hp</th>
									<th>Id Admin</th>
									<th>Aksi</th>
							</tr>
						</thead>
						<tbody>
								<?php $x=1?>
								@foreach ($data as $karyawan)
									<tr>
									<td>{{ $x++ }}</td>
									<td>{{ $karyawan->username or 'username kosong'}}</td>
									<td>{{ $karyawan->password or 'password kosong'}}</td>
									<td>{{ $karyawan->nama or 'nama kosong'}}</td>
									<td>{{ $karyawan->no_hp or 'no hp kosong'}}</td>
									<td>{{ $karyawan->id_admin or 'id admin kosong'}}</td>
									<td>
										<div class="btn-group" role-"group">
											<a href="{{url('karyawan/edit/'.$karyawan->id)}}" class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="Ubah">
											<i class="fa fa-pencil"></i></a>
											<a href="{{url('karyawan/'.$karyawan->id)}}" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="Lihat"><i class="fa fa-eye"></i></a>
											<a href="{{url('karyawan/hapus/'.$karyawan->id)}}" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-remove"></i></a>
											</div>
										</td>
									</tr>
									@endforeach
								</tbody>
							</table>
					</div>
					<div align="center">
						{{ $data->render()}}
					</div>
					@stop