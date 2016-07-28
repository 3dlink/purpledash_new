@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">

                <div class="panel-heading center">Edit Team</div>
                {!! Form::open(['route' => ['admin.teams.update', $team], 'method' => 'PUT']) !!}

                <div class="panel-body">
						<div class="form-group">
							{!! Form::label('title', 'Title') !!}
							{!! Form::text('title', $team->title, ['class' => 'form-control', 'required']) !!}
							<span class="msjError"> @if ($errors->first('title')) *{{ $errors->first('title') }} @endif</span>
						</div>

						<div class="form-group">
							{!! Form::label('p1', 'Paragraph 1') !!}
							{!! Form::textarea('p1', $team->p1, ['class' => 'form-control', 'required']) !!}
							<span class="msjError"> @if ($errors->first('p1')) *{{ $errors->first('p1') }} @endif</span>
						</div>

						<div class="form-group">
							{!! Form::label('p2', 'Paragraph 2') !!}
							{!! Form::textarea('p2', $team->p2, ['class' => 'form-control', 'required']) !!}
							<span class="msjError"> @if ($errors->first('p2')) *{{ $errors->first('p2') }} @endif</span>
						</div>
	            </div>

	            <div class="panel-footer">
	            	<a href="{{ route('admin.teams.index') }}"><button class="btn btn-default" type="button">Back</button></a>
					{!! Form::submit('Edit Team', array('class'=>'btn btn-primary')) !!}
	            </div>
	            {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection
