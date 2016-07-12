@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading center">Phrases</div>

                <div class="panel-body">
					<table class="table">
						<thead>
							<th>City</th>
							<th>Country</th>
							<th>Area Code</th>
							<th>Phone º</th>
							<th>Email</th>
							<th>Webpage</th>
							<th>Actions</th>
						</thead>

						<tbody>
							@foreach($contacts as $contact)
								<tr>
									<td>{{$contact->city}}</td>
									<td>{{$contact->country}}</td>
									<td>{{$contact->areaCode}}</td>
									<td>{{$contact->phone}}</td>
									<td>{{$contact->email}}</td>
									<td>{{$contact->webpage}}</td>
									<td>
										<a class="itemAction" href="{{ route('admin.contacts.edit', $contact->id) }}"><i class="fa fa-pencil" aria-hidden="true"></i></a>
										<a class="itemAction" href="" data-toggle="modal" data-target="#myModal{{$contact->id}}""><i class="fa fa-trash-o" aria-hidden="true"></i></a>

									</td>
								</tr>
								<div id="myModal{{$contact->id}}" class="modal fade" role="dialog">
								  <div class="modal-dialog">
								    <div class="modal-content">
								      <div class="modal-header">
								        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								        <h4 class="modal-title">Confirm Delete</h4>
								      </div>
								      <div class="modal-body">
								        <p>Are you sure you want to delete this contact?</p>
								      </div>
								      <div class="modal-footer">
								        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
								        <a href="{{route('admin.contacts.destroy', $contact->id)}}"><button type="button" class="btn btn-primary">Confirm</button></a>
								      </div>
								    </div><!-- /.modal-content -->
								  </div><!-- /.modal-dialog -->
								</div><!-- /.modal -->
							@endforeach
						</tbody>
					</table>
					<div class="center">{!! $contacts->render() !!}</div>

                </div>
                @if (! (count($contacts)>0))
                <div class="panel-footer"><a href="{{ route('admin.contacts.create') }}"><button class="btn btn-primary">Add Contact</button></a></div>
                @endif
            </div>
        </div>
    </div>
</div>



@endsection
