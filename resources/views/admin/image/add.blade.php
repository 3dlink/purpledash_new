@extends('layouts.app')

@section('css')

<link rel="stylesheet" type="text/css" href="{{URL::asset('/js/dropzone-4.3.0/dist/min/dropzone.min.css')}}">

@endsection

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">

				<div class="panel-heading center">Add Images</div>


				<div class="panel-body">
					{!! Form::open(['route' => 'admin.image.add', 'method' => 'POST', 'files' => 'true', 'class' => 'dropzone', 'id' => 'dropzoneForm']) !!}
				</div>

				<div class="panel-footer">
					<a href="{{ route('admin.image.index', session()->get('work')) }}"><button class="btn btn-default" type="button">Back</button></a>
					{!! Form::submit('Save', array('id' => 'submit', 'class'=>'btn btn-primary')) !!}
				</div>

				{!! Form::close() !!}
			</div>
		</div>
	</div>
</div>
@endsection


@section('script')

<script type="text/javascript">
	Dropzone.options.dropzoneForm = ({
		paramName:'originalImgName',
		autoProcessQueue: false,
		uploadMultiple: true,
		dictDefaultMessage: 'Click here...',
		addRemoveLinks: true,
		acceptedFiles: 'image/*',
		parallelUploads: 3,
		maxFiles: {{3-session()->get('qty')}},
		init: function() {
			var submitBtn = document.querySelector("#submit");
			myDropzone = this;

			submitBtn.addEventListener("click", function(e){
				e.preventDefault();
				myDropzone.processQueue();
			});
		}
	});
</script>

@endsection