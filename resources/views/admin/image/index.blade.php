@extends('layouts.app')

@section('content')

{!! Form::open(['route' => 'admin.image.order', 'method' => 'POST']) !!}

<?php $id=1; ?>

<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading center">{{$work->title}} Images</div>

				<div class="panel-body">
					<table class="table">
						<thead>
							<th>Image</th>
							<th>Order</th>
							<th>Actions</th>
						</thead>

						<tbody>
							@foreach($images as $image)
							<tr>
								{!! Form::number('id'.$id, $image->id, ['class'=>"hidden"]); !!}
								<?php $id+=1 ?>
								<td>{{$image->originalName}}</td>
								<td class="order" binded="{{$image->origOrder}}">{{$image->order}}</td>
								<td class="hidden inputOrder" > 
									<select id="{{$image->origOrder}}" bind="{{$image->origOrder}}">
										<option value=1 @if($image->order == 1) {!!'selected'!!}@endif>1</option>
										<option value="2" @if($image->order == 2) {!!'selected'!!}@endif>2</option>
										<option value="3" @if($image->order == 3) {!!'selected'!!}@endif>3</option>
									</select>
								</td>
								<td>
									<a class="itemAction" href="{{ route('admin.image.edit', $image->id) }}"><i class="fa fa-pencil" aria-hidden="true"></i></a>
									<!-- <a class="itemAction" href="{{ route('admin.image.show', $image->id) }}"><i class="fa fa-eye" aria-hidden="true"></i></a> -->
									<a class="itemAction" href="" data-toggle="modal" data-target="#myModal{{$image->id}}""><i class="fa fa-trash-o" aria-hidden="true"></i></a>

								</td>
							</tr>
							<div id="myModal{{$image->id}}" class="modal fade" role="dialog">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
											<h4 class="modal-title">Confirm Delete</h4>
										</div>
										<div class="modal-body">
											<p>Are you sure you want to delete this image?</p>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
											<a href="{{route('admin.image.destroy', $image->id)}}"><button type="button" class="btn btn-primary">Confirm</button></a>
										</div>
									</div>
								</div>
							</div>
							@endforeach
						</tbody>
					</table>

				</div>

				<div class="panel-footer">
					<a href="{{ route('admin.works.index') }}"><button class="btn btn-default" type="button">Back</button></a>
					<button class="btn btn-danger cancelBtn hidden" type="button">Cancel</button>
					<button class="btn btn-success saveBtn hidden" type="button">Save</button>
					<button class="btn btn-warning orderBtn" type="button">Edit Order</button>
					<button class="btn btn-info viewBtn" type="button">Preview</button>
					@if(session()->get('qty')<3)
					<a href="{{ route('admin.image.complete') }}"><button class="btn btn-primary" type="button">Add Images</button></a>
					@endif
					<!-- <a href="" data-toggle="modal" data-target="#workModal"><button class="btn btn-danger">Delete Work</button></a>
					<a href="{{ route('admin.works.edit', $work->id) }}"><button class="btn btn-primary">Edit Work</button></a>-->
				</div>
			</div>
		</div>
	</div>

	<div class="modal" tabindex="-1" role="dialog" id="portfolio-modal">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-body grid-100 mobile-100 tablet-100">
					<div class="photos clear">
						<span class="modal-imgs"></span>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


{!! Form::number('order1', '', ['class'=>"hidden"]); !!}
{!! Form::number('order2', '', ['class'=>"hidden"]); !!}
{!! Form::number('order3', '', ['class'=>"hidden"]); !!}

{!! Form::submit('', array('class'=>'formSendBtn')) !!}

{!! Form::close() !!}
@endsection

@section('script')

<script type="text/javascript">
	$(document).ready(function(){

		var init =[];

		$('select').each(function(){
			var elem = {};
			elem.order = $(this).val();

			init.push(elem);
		});

		console.log(init);

		$('.orderBtn').click(function(){
			$('.inputOrder, .saveBtn, .cancelBtn').removeClass('hidden');
			$('.order, .orderBtn').addClass('hidden');
		});

		$('.cancelBtn').click(function(){

			var i = 0;

			$('select').each(function(){
				var binded = $('td[binded="'+(i+1)+'"]');
				binded.text(init[i].order);
				$(this).val(init[i].order);
				i++;
			});

			$('.order, .orderBtn').removeClass('hidden');
			$('.inputOrder, .saveBtn, .cancelBtn').addClass('hidden');
		});

		$('.saveBtn').click(function(){

			var selections= [];

			$('select').each(function(){
				selections.push($(this).val());
			});

			if (hasDuplicates(selections)) {
				alert('There can´t be two images with the same order');
			} else{

				var formData = [];

				$('select').each(function(){
					var elem = {};
					var bind = $(this).attr('bind');

					elem.original = bind;
					elem.order = $(this).val();

					formData.push(elem);
				});

				for (var i = 0; i < formData.length; i++) {
					if (i == 0) {
						var d1 = formData[0].order;
						$('input[name="order1"]').val(parseInt(d1));
					}else if(i == 1){
						var d2 = formData[1].order;
						$('input[name="order2"]').val(parseInt(d2));
					} else if (i == 2){
						var d3 = formData[2].order;
						$('input[name="order3"]').val(parseInt(d3));
					}
				}

				$('.order, .orderBtn').removeClass('hidden');
				$('.inputOrder, .saveBtn, .cancelBtn').addClass('hidden');

				$('.formSendBtn').click();
			}
		});

		$('select').on('change', function(){
			var bind = $(this).attr('bind');
			var binded = $('td[binded="'+bind+'"]');

			binded.text($(this).val());
		});

	});

	function hasDuplicates(array) {
		return (new Set(array)).size !== array.length;
	}

	$('.viewBtn').click(function(event) {
		var modal = $('#portfolio-modal').modal({
			show: false,
		});

		modal.find('.modal-imgs').empty();

		var me = $(this);

			// <img src="" class="magicfields"> modal-imgs

			$.ajax({
				type: 'GET',
				dataType: 'json',
				url: "{{route('images.get',session()->get('work'))}}",
				success: function(data){

					var imgHolder = modal.find('.modal-imgs');

					for (var i = 0; i < data.length; i++) {
						var html = '<img src="{{URL::asset("public/img")}}/'+data[i].image+'" class="magicfields">';
						imgHolder.append(html);
					}

					modal.modal('show');
				},
				error: function(data){
					console.log(data);
				}
			});


			// var mainimg = me.data('mainimg');
			// var title = me.data('title');
			// var sub = me.data('sub');
			// var desc = me.data('desc');

			// modal.find('.work-title').text(title);
			// modal.find('.work-sub').text(sub);
			// modal.find('.work-description').html(desc);
			// modal.find('.photos img').attr('src', '../../img/'+mainimg);
		});
	</script>
	@endsection