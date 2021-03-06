@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">

                <div class="panel-heading center">New Team</div>
                {!! Form::open(['route' => 'admin.teams.store', 'method' => 'POST']) !!}

                <div class="panel-body">
						<div class="form-group">
							{!! Form::label('title', 'Title') !!}
							{!! Form::text('title', null, ['class' => 'form-control', 'required']) !!}
							<span class="msjError"> @if ($errors->first('title')) *{{ $errors->first('title') }} @endif</span>
						</div>

						<div class="form-group">
							{!! Form::label('p1', 'Paragraph 1') !!}
							{!! Form::textarea('p1', null, ['class' => 'form-control', 'required']) !!}
							<span class="msjError"> @if ($errors->first('p1')) *{{ $errors->first('p1') }} @endif</span>
						</div>

						<div class="form-group">
							{!! Form::label('p2', 'Paragraph 2') !!}
							{!! Form::textarea('p2', null, ['class' => 'form-control', 'required']) !!}
							<span class="msjError"> @if ($errors->first('p2')) *{{ $errors->first('p2') }} @endif</span>
						</div>
	            </div>

	            <div class="panel-footer">
	            	<a href="{{ route('admin.teams.index') }}"><button class="btn btn-default" type="button">Back</button></a>
					{!! Form::submit('Add Team', array('class'=>'btn btn-primary')) !!}
	            </div>
	            {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection
