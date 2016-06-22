@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading center">Phrase</div>

                <div class="panel-body">
					<section id="phrases-section" style="padding-bottom:0;" class="parallax-section parallax-banner-7 phrases-section">
						<div class="grid parallax-content">
							<div class="grid-parent grid-100 mobile-100 tablet-100 clear"> 

								<!-- entry header -->
								<div class="grid-70 prefix-15 mobile-100 tablet-100">
									<div class="slide slide-phrases">
										<header class="parallax-header quotes" style="padding-top: 70px; margin-top: 0px;"> 
											<h2 class="ut-parallax-quote-title ">{{$phrase->quote}}. </h2>
											@if ($phrase->author != '')
											<span class="ut-parallax-quote-name">- {{$phrase->author}}</span>
											@endif
										</header>
									</div>
								</div>
								<!-- close entry header -->      
							</div>
						</div>
					      <!-- close grid container --> 
					</section>

				</div>
                <div class="panel-footer"><a href="{{ route('admin.phrases.index') }}"><button class="btn btn-primary" type="button">Back</button></a></div>
            </div>
        </div>
    </div>
</div>

@endsection