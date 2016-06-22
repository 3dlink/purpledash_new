@extends('layouts.app')

@section('content')

@if (count($errors) > 0)
	<div class="">
		<ul>
			@foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		 </ul>
	</div>
@endif

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">

                <div class="panel-heading center">New Work</div>
                {!! Form::open(['route' => 'admin.works.store', 'method' => 'POST']) !!}

                <div class="panel-body">

						<div class="form-group">
							{!! Form::label('title', 'Título') !!}
							{!! Form::text('title', null, ['placeholder' => 'Titulo del trabajo', 'class' => 'form-control', 'required']) !!}
						</div>

						<div class="form-group">
							{!! Form::label('category', 'Categoría') !!}
							{!! Form::text('category', null, ['placeholder' => 'Categoria del trabajo', 'class' => 'form-control', 'required']) !!}
						</div>

						<div class="form-group">
							{!! Form::label('frontImg', 'Imagen Portada') !!}
							{!! Form::text('frontImg', null, ['placeholder' => 'exampleportada.jpg', 'class' => 'form-control', 'required']) !!}
						</div>

						<div class="form-group">
							{!! Form::label('mainImg', 'Imagen Principal') !!}
							{!! Form::text('mainImg', null, ['placeholder' => 'example.jpg', 'class' => 'form-control', 'required']) !!}
						</div>

						<div class="form-group">
							{!! Form::label('description', 'Descripción') !!}
							{!! Form::text('description', null, ['placeholder' => 'Descripcion del trabajo', 'class' => 'form-control', 'required']) !!}
						</div>
	            </div>

	            <div class="panel-footer">
	            	<a href="{{ route('admin.works.index') }}"><button class="btn btn-default" type="button">Back</button></a>
					{!! Form::submit('Add Work', array('class'=>'btn btn-primary')) !!}
				</div>
				{!! Form::close() !!}

            </div>
        </div>
    </div>
</div>
@endsection
