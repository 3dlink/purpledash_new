@extends('layouts.app')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-heading center">Works</div>

				<div class="panel-body">
					<table class="table">
						<thead>
							<th>Title</th>
							<th>Subtitle</th>
							<th>Category</th>
							<th>Actions</th>
						</thead>

						<tbody>
							@foreach($works as $work)
							<tr>
								<td>{{$work->title}}</td>
								<td>{{$work->subtitle}}</td>
								<td>{{$work->category}}</td>
								<td style="min-width: 100px;">
									<a class="itemAction" href="{{ route('admin.works.edit', $work->id) }}"><i class="fa fa-pencil" aria-hidden="true"></i></a>
									@if(!$work->hasImages)
									<a class="itemAction" href="{{route('admin.image.create', $work->id)}}"><i class="fa fa-plus" aria-hidden="true"></i></a>
									@else
									<a class="itemAction" href="{{route('admin.image.index', $work->id)}}"><i class="fa fa-file-image-o" aria-hidden="true"></i></a>
									@endif
									<a class="itemAction" href="{{ route('admin.works.show', $work->id) }}"><i class="fa fa-eye" aria-hidden="true"></i></a>
									@if ($work->isActive)
									<a class="itemAction" onclick="cambiarEstado({{$work->id}})"><i class="fa fa-toggle-on" aria-hidden="true"></i></a>
									@else
									<a class="itemAction" onclick="cambiarEstado({{$work->id}})"><i class="fa fa-toggle-off" aria-hidden="true"></i></a>
									@endif
									<a class="itemAction" href="" data-toggle="modal" data-target="#myModal{{$work->id}}"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
									<a class="itemAction share-icon" data-target="{{$work->title}}"><i class="fa fa-link" aria-hidden="true"></i></a>

								</td>
							</tr>
							<div id="myModal{{$work->id}}" class="modal fade" role="dialog">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
											<h4 class="modal-title">Confirm Delete</h4>
										</div>
										<div class="modal-body">
											<p>Are you sure you want to delete this work?</p>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
											<a href="{{route('admin.works.destroy', $work->id)}}"><button type="button" class="btn btn-primary">Confirm</button></a>
										</div>
									</div><!-- /.modal-content -->
								</div><!-- /.modal-dialog -->
							</div><!-- /.modal -->
							@endforeach
						</tbody>
					</table>
					<div class="center">{!! $works->render() !!}</div>
					<div class="share row">
						<input type="text" name="" class="share-link col-md-10">
						<button class="col-md-2 share-btn" data-clipboard-target=".share-link"><i class="fa fa-clipboard" aria-hidden="true"></i></button>
					</div>
				</div>
				<div class="panel-footer"><a href="{{ route('admin.works.create') }}"><button class="btn btn-primary">Add work</button></a></div>
			</div>
		</div>
	</div>
</div>

@endsection

@section('script')

<script src="{{URL::asset('js/clipboard.min.js')}}"></script>

<script type="text/javascript">
var cb = new Clipboard(".share-btn");

	function cambiarEstado(id) {

		var uri = 'works/active/'+id;

		$.ajax({
			url: uri,
			type: 'GET',
			success: function (response){
				var attr = 'cambiarEstado('+id+')';

				me = $('.itemAction[onclick="'+attr+'"] i');

				if (me.hasClass('fa-toggle-on')) {
					me.removeClass('fa-toggle-on');
					me.addClass('fa-toggle-off');
				} else {
					me.removeClass('fa-toggle-off');
					me.addClass('fa-toggle-on');
				}

			}
		});
	}

	$(".share-icon").on('click', function(){
		var me = $(this);
		var id = me.data('target');
		var link = '{{URL::asset("work")}}'+"/"+id;
		var input = $('.share');
		$('.share-link').val(link);

		input.css('top',me.position().top + me.height());
		input.css('left',me.position().left - 150);

		input.show();

	});

	$(document).mouseup(function (e){
		var container = $(".share");

	if (!container.is(e.target) && container.has(e.target).length === 0){
		container.hide();
	};
});
</script>

@endsection

@section('css')

<style type="text/css">
	.share{
		background-color:#f5f5f5;
		color: #333;
		border: 1px solid #ddd;
		border-radius: 3px;
		width: 300px;
		padding: 5px 3px;

		position: absolute;
		display: none;
	}

	.share-link{
		border: 1px solid #ddd;
		border-radius: 3px;
		background-color: white;
	}
</style>

@endsection