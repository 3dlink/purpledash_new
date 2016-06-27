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

                <div class="panel-heading center">New Service</div>
                {!! Form::open(['route' => 'admin.services.store', 'method' => 'POST']) !!}

                <div class="panel-body">


						<div class="form-group">
							{!! Form::label('name', 'Name') !!}
							{!! Form::text('name', null, ['placeholder' => 'Service name', 'class' => 'form-control', 'required']) !!}
							<span class="msjError"> @if ($errors->first('name')) *{{ $errors->first('name') }} @endif</span>
						</div>

						<div class="form-group">
							{!! Form::label('img', 'Image (fa-icon)') !!}
							{!! Form::text('img', null, ['placeholder' => 'fa-example', 'class' => 'form-control iconpicker', 'required']) !!}
							<span class="msjError"> @if ($errors->first('img')) *{{ $errors->first('img') }} @endif</span>
						</div>
	            </div>

	            <div class="panel-footer">
	            	<a href="{{ route('admin.services.index') }}"><button class="btn btn-default" type="button">Back</button></a>
					{!! Form::submit('Add Service', array('class'=>'btn btn-primary')) !!}
				</div>
				{!! Form::close() !!}

            </div>
        </div>
    </div>
</div>
@endsection
