@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading center">Service</div>

                <div class="panel-body">

                   <!-- portfolio box -->
                    <div class="grid-33 mobile-100 tablet-50" style="margin: 0 33%;"> <a data-toggle="modal" data-target="#portfolio-modal" data-mainimg="{{$work->mainImg}}" data-desc="{{$work->description}}" data-title="{{$work->title}}" href="">
                      <div class="portfolio-box" style="opacity:1;">

                        <figure class="portfolio-image"><img src="../../img/{{$work->frontImg}}"></figure>
                        <!-- close portfolio image -->

                        <div class="portfolio-caption">
                          <h3 class="portfolio-title">{{$work->title}}<span class="portfolio-category">{{$work->category}}</span></h3>
                        </div>
                      <!-- close portfolio caption --> 
                      </div>
                    </a> </div>
                    <!-- close portfolio -->

                </div>
                <div class="panel-footer"><a href="{{ route('admin.services.index') }}"><button class="btn btn-primary">Back</button></a></div>
            </div>
        </div>
    </div>
</div>

<div class="modal" tabindex="-1" role="dialog" id="portfolio-modal">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <div class="grid-70 prefix-15 mobile-100 tablet-100">
            <header class="section-header">
              <h2 class="section-title" style="opacity:1"><span class="work-title"></span></h2>
              <p class="section-slogan work-description" style="opacity:1"></p>
            </header>
          </div>
        </div>
        <div class="modal-body grid-100 mobile-100 tablet-100">
          <div class="photos clear">
            <span><img src="" class="magicfields"></span>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection