@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading center">Services</div>

                <div class="panel-body">
                	<div class="clear">
						<section id="service-section" class="service-section parallax-section parallax-banner-6">
							<div class="grid parallax-content">
								<div class="grid-parent grid-100 mobile-100 tablet-100"> 
				                	<div class="service-box grid-10 mobile-grid-10 tablet-grid-50">
										<div class="box-fade icon-box">
											<i class="fa {{$service->img}} icon-2x service-icon"></i> </div>
										<div class="box-fade info">
											<h3>{{$service->name}}</h3>
										</div>
									</div>
				                </div>
		       				</div>
		       			</section>
					</div>
				</div>
                <div class="panel-footer"><a href="{{ route('admin.services.index') }}"><button class="btn btn-primary">Back</button></a></div>
            </div>
        </div>
    </div>
</div>

@endsection