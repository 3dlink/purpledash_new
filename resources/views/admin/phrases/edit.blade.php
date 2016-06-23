@extends('layouts.app')

@section('content')
<!--
@if (count($errors) > 0)
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
                <div class="panel-heading">Edit Phrase</div>
                {!! Form::open(['route' => ['admin.phrases.update', $phrase], 'method' => 'PUT']) !!}

                <div class="panel-body">
					<div class="form-group">
						{!! Form::label('author', 'Author') !!}
						{!! Form::text('author', $phrase->author, ['placeholder' => 'Nombre del autor', 'class' => 'form-control']) !!}
					</div>

					<div class="form-group">
						{!! Form::label('quote', 'Text') !!}
						{!! Form::text('quote', $phrase->quote, ['placeholder'=>'Quote', 'class' => 'form-control', 'required']) !!}
						<span class="msjError"> @if ($errors->first('quote')) *{{ $errors->first('quote') }} @endif</span>
					</div>

                </div>
                <div class="panel-footer">
                		<a href="{{ route('admin.phrases.index') }}"><button type="button" class="btn btn-default">Back</button></a>
						{!! Form::submit('Update',array('class'=>'btn btn-primary')) !!}
				</div>

				{!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection
