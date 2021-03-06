@extends('layouts.app')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading center">Services</div>

				<div class="panel-body">
					<table class="table">
						<thead>
							<th>Text</th>
							<th>Actions</th>
						</thead>

						<tbody>
							<tr>
								<td>{{$text->text}}</td>
								<td>
									<a class="itemAction" href="{{ route('admin.serviceText.edit', $text->id) }}"><i class="fa fa-pencil" aria-hidden="true"></i></a>
									<a class="itemAction" href="" data-toggle="modal" data-target="#textModal{{$text->id}}""><i class="fa fa-trash-o" aria-hidden="true"></i></a>

								</td>
							</tr>
							<div id="textModal{{$text->id}}" class="modal fade" role="dialog">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
											<h4 class="modal-title">Confirm Delete</h4>
										</div>
										<div class="modal-body">
											<p>Are you sure you want to delete this service text?</p>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
											<a href="{{route('admin.serviceText.destroy', $text->id)}}"><button type="button" class="btn btn-primary">Confirm</button></a>
										</div>
									</div><!-- /.modal-content -->
								</div><!-- /.modal-dialog -->
							</div><!-- /.modal -->
						</tbody>
					</table>

					<table class="table">
						<thead>
							<th>Name</th>
							<th>Image (fa-icon)</th>
							<th>Actions</th>
						</thead>

						<tbody>
							@foreach($services as $service)
							<tr>
								<td>{{$service->name}}</td>
								<td>{{$service->img}}</td>
								<td>
									<a class="itemAction" href="{{ route('admin.services.edit', $service->id) }}"><i class="fa fa-pencil" aria-hidden="true"></i></a>
									<a class="itemAction" href="{{ route('admin.services.show', $service->id) }}"><i class="fa fa-eye" aria-hidden="true"></i></a>
									<a class="itemAction" href="" data-toggle="modal" data-target="#myModal{{$service->id}}""><i class="fa fa-trash-o" aria-hidden="true"></i></a>

								</td>
							</tr>
							<div id="myModal{{$service->id}}" class="modal fade" role="dialog">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
											<h4 class="modal-title">Confirm Delete</h4>
										</div>
										<div class="modal-body">
											<p>Are you sure you want to delete this service?</p>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
											<a href="{{route('admin.services.destroy', $service->id)}}"><button type="button" class="btn btn-primary">Confirm</button></a>
										</div>
									</div><!-- /.modal-content -->
								</div><!-- /.modal-dialog -->
							</div><!-- /.modal -->
							@endforeach
						</tbody>
					</table>
					<div class="center">{!! $services->render() !!}</div>

				</div>
				<div class="panel-footer">
					@if(!count($text)>0)
					<a href="{{ route('admin.serviceText.create') }}"><button class="btn btn-primary">Add Service Text</button></a>
					@endif
					<a href="{{ route('admin.services.create') }}"><button class="btn btn-primary">Add Service</button></a></div>
				</div>
			</div>
		</div>
	</div>



	@endsection
