@extends('layouts.app')

@section('css')
<style type="text/css">
	.w-box:hover{
		cursor: pointer;
	}
</style>

@endsection

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading center">Work</div>

				<div class="panel-body">

				 <!-- portfolio box -->
				 <div class="grid-33 mobile-100 tablet-50 w-box" style="margin: 0 33%;"> <a data-target="#portfolio-modal" data-mainimg="{{$work->id}}" data-desc="{{$work->description}}" data-title="{{$work->title}}" data-sub="{{$work->subtitle}}">
					<div class="portfolio-box" style="opacity:1;">

						<figure class="portfolio-image"><img src='{{URL::asset("public/img/$work->frontImg")}}'></figure>
						<!-- close portfolio image -->

						<div class="portfolio-caption">
							<h3 class="portfolio-title">{{$work->title}}<span class="portfolio-category">{{$work->category}}</span></h3>
						</div>
						<!-- close portfolio caption --> 
					</div>
				</a> </div>
				<!-- close portfolio -->

			</div>
			<div class="panel-footer"><a href="{{ route('admin.works.index') }}"><button class="btn btn-primary">Back</button></a></div>
		</div>
	</div>
</div>
</div>

<div class="modal" tabindex="-1" role="dialog" id="portfolio-modal">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<div class="grid-100 mobile-100 tablet-100">
					<header class="section-header">
						<div class="grid-40 rb"><h2 style="opacity:1" class="section-title"><span class="work-title"></span></h2><span class="work-sub" style="opacity:1"></span></div>
						<div class="grid-60 nrb"><p class="section-slogan work-description" style="text-align:left; padding-left:5%; opacity:1;"></p></div>            </header>
					</div>
				</div>
				<div class="modal-body grid-100 mobile-100 tablet-100">
					<div class="photos clear">
						<span class="modal-imgs"></span>
					</div>
				</div>
			</div>
		</div>
	</div>

	@endsection

	@section('script')

	<script type="text/javascript">
		$(document).ready(function(){
		// Dynamic Modal //
		// $('#portfolio-modal').on('show.bs.modal', function(event){
		//  var me = $(event.relatedTarget);
		//  var mainimg = me.data('mainimg');
		//  var title = me.data('title');
		//  var sub = me.data('sub');
		//  var desc = me.data('desc');
		//  var modal = $(this);

		//  modal.find('.work-title').text(title);
		//  modal.find('.work-sub').text(sub);
		//  modal.find('.work-description').html(desc)
		//  modal.find('.photos img').attr('src', '../../img/'+mainimg);

		// });

		$('.w-box a').click(function(event) {
			var modal = $('#portfolio-modal').modal({
				show: false,
			});

			modal.find('.work-title').text('');
			modal.find('.work-sub').text('');
			modal.find('.work-description').text('')
			modal.find('.modal-imgs').empty();

			var me = $(this);

			// <img src="" class="magicfields"> modal-imgs

			$.ajax({
				type: 'GET',
				dataType: 'json',
				url: "{{route('images.get',session()->get('work'))}}",
				success: function(data){
					var title = me.data('title');
					var sub = me.data('sub');
					var desc = me.data('desc');
					modal.find('.work-title').text(title);
					modal.find('.work-sub').text(sub);
					modal.find('.work-description').html(desc);

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
	});

</script>

@endsection