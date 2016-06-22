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
                <div class="panel-heading">Edit Work</div>

                <div class="panel-body">
					{!! Form::open(['route' => ['admin.works.update', $work], 'method' => 'PUT']) !!}

					<div class="form-group">
						{!! Form::label('title', 'Título') !!}
						{!! Form::text('title', $work->title, ['placeholder' => 'Titulo del trabajo', 'class' => 'form-control', 'required']) !!}
					</div>

					<div class="form-group">
						{!! Form::label('category', 'Categoría') !!}
						{!! Form::text('category', $work->category, ['placeholder' => 'Categoria del trabajo', 'class' => 'form-control', 'required']) !!}
					</div>

					<div class="form-group">
						{!! Form::label('frontImg', 'Imagen Portada') !!}
						{!! Form::text('frontImg', $work->frontImg, ['placeholder' => 'exampleportada.jpg', 'class' => 'form-control', 'required']) !!}
					</div>

					<div class="form-group">
						{!! Form::label('mainImg', 'Imagen Principal') !!}
						{!! Form::text('mainImg', $work->mainImg, ['placeholder' => 'example.jpg', 'class' => 'form-control', 'required']) !!}
					</div>

					<div class="form-group">
						{!! Form::label('description', 'Descripción') !!}
						{!! Form::text('description', $work->description, ['placeholder' => 'Descripcion del trabajo', 'class' => 'form-control', 'required']) !!}
					</div>
                </div>
                <div class="panel-footer">
               		<a href="{{ route('admin.works.index') }}"><button class="btn btn-default" type="button">Back</button></a>
						{!! Form::submit('Update',array('class'=>'btn btn-primary')) !!}
				</div>

				{!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection