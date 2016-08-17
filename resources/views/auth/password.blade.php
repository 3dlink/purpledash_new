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
                    <div class="panel-heading center">Change Password</div>
                    {!! Form::open(['route' => 'admin.setpwd', 'method' => 'POST']) !!}

                    <div class="panel-body">
                        <div class="form-group">
                            {!! Form::label('Old password', 'Old password') !!}
                            {!! Form::password('old_password', ['class'=>'form-control']) !!}
                            @if($wrongPwd == 'true')
                                <span class="wrongPwd">The old password doesn't match</span>
                            @endif
                        </div>

                        <div class="form-group">
                            {!! Form::label('New password', 'New password') !!}
                            {!! Form::password('password', ['class'=>'form-control']) !!}
                        </div>
                        
                        <div class="form-group">
                            {!! Form::label('New password confirmation', 'New password confirmation') !!}
                            {!! Form::password('password_confirmation', ['class'=>'form-control']) !!}
                        </div>
                    </div>

                    <div class="panel-footer">
                        {!! Form::submit('Change', array('class'=>'btn btn-primary')) !!}
                    </div>

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
