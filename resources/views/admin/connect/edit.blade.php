@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">

                <div class="panel-heading center">Edit Get Connected</div>
                {!! Form::open(['route' => ['admin.connects.update', $connect], 'method' => 'PUT']) !!}

                <div class="panel-body">


						<div class="form-group">
							{!! Form::label('text', 'Text') !!}
							{!! Form::textarea('text', $connect->text, ['class' => 'form-control', 'required']) !!}
							<span class="msjError"> @if ($errors->first('text')) *{{ $errors->first('text') }} @endif</span>
						</div>
	            </div>

	            <div class="panel-footer">
	            	<a href="{{ route('admin.connects.index') }}"><button class="btn btn-default" type="button">Back</button></a>
					{!! Form::submit('Edit Get Connected', array('class'=>'btn btn-primary')) !!}
	            </div>
	            {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection
