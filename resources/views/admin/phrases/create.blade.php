@extends('layouts.app')

@section('content')


<!-- @if (count($errors) > 0)
	<div class="">
		<ul>
			@foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		 </ul>
	</div>
@endif -->

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">

                <div class="panel-heading center">New Phrase</div>
                {!! Form::open(['route' => 'admin.phrases.store', 'method' => 'POST']) !!}

                <div class="panel-body">


						<div class="form-group">
							{!! Form::label('author', 'Author') !!}
							{!! Form::text('author', null, ['placeholder' => 'Author name', 'class' => 'form-control']) !!}
						</div>
						<div class="form-group">
							{!! Form::label('quote', 'Text') !!}
							{!! Form::text('quote', null, ['placeholder'=>'Quote', 'class' => 'form-control', 'required']) !!}
							<span class="msjError"> @if ($errors->first('quote')) *{{ $errors->first('quote') }} @endif</span>
						</div>
	            </div>

	            <div class="panel-footer">
	            	<a href="{{ route('admin.phrases.index') }}"><button class="btn btn-default" type="button">Back</button></a>
					{!! Form::submit('Add Phrase', array('class'=>'btn btn-primary')) !!}
	            </div>
	            {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection
