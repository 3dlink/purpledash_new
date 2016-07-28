@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">

                <div class="panel-heading center">New Philosophy</div>
                {!! Form::open(['route' => 'admin.philosophies.store', 'method' => 'POST']) !!}

                <div class="panel-body">


						<div class="form-group">
							{!! Form::label('text', 'Text') !!}
							{!! Form::textarea('text', null, ['class' => 'form-control', 'required']) !!}
							<span class="msjError"> @if ($errors->first('text')) *{{ $errors->first('text') }} @endif</span>
						</div>
	            </div>

	            <div class="panel-footer">
	            	<a href="{{ route('admin.philosophies.index') }}"><button class="btn btn-default" type="button">Back</button></a>
					{!! Form::submit('Add Philosophy', array('class'=>'btn btn-primary')) !!}
	            </div>
	            {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection
