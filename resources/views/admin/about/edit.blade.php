@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">

                <div class="panel-heading center">Edit About</div>
                {!! Form::open(['route' => ['admin.abouts.update', $about], 'method' => 'PUT']) !!}

                <div class="panel-body">

						<div class="form-group">
							{!! Form::label('p1', 'Paragraph 1') !!}
							{!! Form::textarea('p1', $about->p1, ['class' => 'form-control', 'required']) !!}
							<span class="msjError"> @if ($errors->first('p')) *{{ $errors->first('p') }} @endif</span>
						</div>

						<div class="form-group">
							{!! Form::label('p2', 'Paragraph 2') !!}
							{!! Form::textarea('p2', $about->p2, ['class' => 'form-control', 'required']) !!}
							<span class="msjError"> @if ($errors->first('p2')) *{{ $errors->first('p2') }} @endif</span>
						</div>

						<div class="form-group">
							{!! Form::label('p3', 'Paragraph 3') !!}
							{!! Form::textarea('p3', $about->p3, ['class' => 'form-control', 'required']) !!}
							<span class="msjError"> @if ($errors->first('p3')) *{{ $errors->first('p3') }} @endif</span>
						</div>
	            </div>

	            <div class="panel-footer">
	            	<a href="{{ route('admin.abouts.index') }}"><button class="btn btn-default" type="button">Back</button></a>
					{!! Form::submit('Edit About', array('class'=>'btn btn-primary')) !!}
	            </div>
	            {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection
