@extends('layouts.app')

@section('content')
	

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Service</div>

                <div class="panel-body">
					{!! Form::open(['route' => ['admin.services.update', $service], 'method' => 'PUT']) !!}

					<div class="form-group">
						{!! Form::label('name', 'Nombre') !!}
						{!! Form::text('name', $service->name, ['placeholder' => 'Nombre del servicio', 'class' => 'form-control', 'required']) !!}
					</div>

					<div class="form-group">
						{!! Form::label('img', 'Imagen') !!}
						{!! Form::text('img', $service->img, ['placeholder' => 'fa-example', 'class' => 'form-control', 'required']) !!}
					</div>
                </div>
                <div class="panel-footer">
                		<a href="{{ route('admin.services.index') }}"><button class="btn btn-default">Back</button></a>
						{!! Form::submit('Update',array('class'=>'btn btn-primary')) !!}
				</div>

				{!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection