@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">

                <div class="panel-heading center">Edit Contact</div>
                {!! Form::open(['route' => ['admin.contacts.update', $contact], 'method' => 'PUT']) !!}

                <div class="panel-body">


						<div class="form-group">
							{!! Form::label('city', 'City') !!}
							{!! Form::text('city', $contact->city, ['placeholder'=>'City', 'class' => 'form-control', 'required']) !!}
							<span class="msjError"> @if ($errors->first('city')) *{{ $errors->first('city') }} @endif</span>
						</div>

						<div class="form-group">
							{!! Form::label('country', 'Country') !!}
							{!! Form::text('country', $contact->country, ['placeholder'=>'Country', 'class' => 'form-control', 'required']) !!}
							<span class="msjError"> @if ($errors->first('country')) *{{ $errors->first('country') }} @endif</span>
						</div>

						<div class="form-group">
							{!! Form::label('areaCode', 'Area code') !!}
							{!! Form::text('areaCode', $contact->areaCode, ['placeholder'=>'5555', 'class' => 'form-control', 'required']) !!}
							<span class="msjError"> @if ($errors->first('areaCode')) *{{ $errors->first('areaCode') }} @endif</span>
						</div>

						<div class="form-group">
							{!! Form::label('phone', 'Phone') !!}
							{!! Form::text('phone', $contact->phone, ['placeholder'=>'5555-5555', 'class' => 'form-control', 'required']) !!}
							<span class="msjError"> @if ($errors->first('phone')) *{{ $errors->first('phone') }} @endif</span>
						</div>

						<div class="form-group">
							{!! Form::label('email', 'Email') !!}
							{!! Form::text('email', $contact->email, ['placeholder'=>'example@purpledash.com', 'class' => 'form-control', 'required']) !!}
							<span class="msjError"> @if ($errors->first('email')) *{{ $errors->first('email') }} @endif</span>
						</div>

						<div class="form-group">
							{!! Form::label('webpage', 'Webpage') !!}
							{!! Form::text('webpage', $contact->webpage, ['placeholder'=>'www.example.com', 'class' => 'form-control', 'required']) !!}
							<span class="msjError"> @if ($errors->first('webpage')) *{{ $errors->first('webpage') }} @endif</span>
						</div>
	            </div>

	            <div class="panel-footer">
	            	<a href="{{ route('admin.contacts.index') }}"><button class="btn btn-default" type="button">Back</button></a>
					{!! Form::submit('Edit Contact', array('class'=>'btn btn-primary')) !!}
	            </div>
	            {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection
