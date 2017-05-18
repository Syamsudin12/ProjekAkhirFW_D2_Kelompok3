@extends('master')
@section('container')
<div class="panel panel-default">
	<div class="panel-heading">
			<strong>Seluruh Data admin</strong>
			<a href="{{ url('admin/tambah') }}" class="btn btn-xs btn-primary pull-right">
		<i class="fa fa-plus"></i>Admin</a>
				<div class="clearfix"></div>
			</div>
			<table class="table">
						<thead>
							<tr>
									<th>No.</th>
									<th>Username</th>
									<th>Password</th>
									<th>Nama</th>
									<th>Level</th>
									<th>Aksi</th>
							</tr>
						</thead>
						<tbody>
								<?php $x=1?>
								@foreach ($data as $admin)
									<tr>
									<td>{{ $x++ }}</td>
									<td>{{ $admin->username or 'username kosong'}}</td>
									<td>{{ $admin->password or 'password kosong'}}</td>
									<td>{{ $admin->nama or 'nama kosong'}}</td>
									<td>{{ $admin->level or 'level kosong'}}</td>
									<td>
										<div class="btn-group" role-"group">
											<a href="{{url('admin/edit/'.$admin->id)}}" class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="Ubah">
											<i class="fa fa-pencil"></i></a>
											<a href="{{url('admin/'.$admin->id)}}" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="Lihat"><i class="fa fa-eye"></i></a>
											<a href="{{url('admin/hapus/'.$admin->id)}}" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-remove"></i></a>
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