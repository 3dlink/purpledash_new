@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">

                <div class="panel-heading center">Edit Aim</div>
                {!! Form::open(['route' => ['admin.aims.update', $aim], 'method' => 'PUT']) !!}

                <div class="panel-body">


						<div class="form-group">
							{!! Form::label('text', 'Text') !!}
							{!! Form::textarea('text', $aim->text, ['class' => 'form-control', 'required']) !!}
							<span class="msjError"> @if ($errors->first('text')) *{{ $errors->first('text') }} @endif</span>
						</div>
	            </div>

	            <div class="panel-footer">
	            	<a href="{{ route('admin.aims.index') }}"><button class="btn btn-default" type="button">Back</button></a>
					{!! Form::submit('Edit Aim', array('class'=>'btn btn-primary')) !!}
	            </div>
	            {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection
