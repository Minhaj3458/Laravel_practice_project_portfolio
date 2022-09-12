@if ($slider->count() != 0)
@foreach($slider as $show )
<div class="profile-page">
  <div class="wrapper">
    <div class="page-header page-header-small" filter-color="green">
      
      <div class="page-header-image" data-parallax="true" style="background-image: url('{{asset('assets/frontend/images/slider/'.$show->slider)}}')"></div>
      <div class="container">
        <div class="content-center">
          <div class="cc-profile-image"><a href="#"><img src="{{asset('assets/frontend/images/profile/'.$show->image)}}" alt="Image"/></a></div>
          <div class="h2 title">{{ Str::upper($show-> full_name) }}</div>
          <p class="category text-white">{{ $show-> experience }}</p><a class="btn btn-primary smooth-scroll mr-2" href="#contact" data-aos="zoom-in" data-aos-anchor="data-aos-anchor">Hire Me</a><a class="btn btn-primary" href="{{asset('assets/frontend/images/cv/'.$show->cv)}}" data-aos="zoom-in" data-aos-anchor="data-aos-anchor" download>Download CV</a>
        </div>
      </div>
      <div class="section">
        <div class="container">
          @if ($social_media->count() != 0)
            @foreach ($social_media as $show )
              <div class="button-container"><a class="btn btn-default btn-round btn-lg btn-icon" href="{{ $show->facebook }}" rel="tooltip" title="Follow me on Facebook"><i class="fa fa-facebook"></i></a><a class="btn btn-default btn-round btn-lg btn-icon" href="{{ $show->twitter }}" rel="tooltip" title="Follow me on Twitter"><i class="fa fa-twitter"></i></a><a class="btn btn-default btn-round btn-lg btn-icon" href="{{ $show->google }}" rel="tooltip" title="Follow me on Google+"><i class="fa fa-google-plus"></i></a><a class="btn btn-default btn-round btn-lg btn-icon" href="{{ $show->intagram }}" rel="tooltip" title="Follow me on Instagram"><i class="fa fa-instagram"></i></a></div>
            @endforeach
          @else
               <div class="button-container"><a class="btn btn-default btn-round btn-lg btn-icon" href="#" rel="tooltip" title="Follow me on Facebook"><i class="fa fa-facebook"></i></a><a class="btn btn-default btn-round btn-lg btn-icon" href="#" rel="tooltip" title="Follow me on Twitter"><i class="fa fa-twitter"></i></a><a class="btn btn-default btn-round btn-lg btn-icon" href="#" rel="tooltip" title="Follow me on Google+"><i class="fa fa-google-plus"></i></a><a class="btn btn-default btn-round btn-lg btn-icon" href="#" rel="tooltip" title="Follow me on Instagram"><i class="fa fa-instagram"></i></a></div>
          @endif
       
        </div>
      </div>
    </div>
  </div>
</div>
@endforeach
@else
<div class="profile-page">
  <div class="wrapper">
    <div class="page-header page-header-small" filter-color="green">
      
      <div class="page-header-image" data-parallax="true" style="background-image: url('{{ asset('assets/frontend/images/cc-bg-1.jpg') }}')"></div>
      <div class="container">
        <div class="content-center">
          <div class="cc-profile-image"><a href="#"><img src="{{ asset('assets/frontend/images/anthony.jpg') }}" alt="Image"/></a></div>
          <div class="h2 title">Anthony Barnett</div>
          <p class="category text-white">Web Developer, Graphic Designer,  Photographer</p><a class="btn btn-primary smooth-scroll mr-2" href="#contact" data-aos="zoom-in" data-aos-anchor="data-aos-anchor">Hire Me</a><a class="btn btn-primary" href="#" data-aos="zoom-in" data-aos-anchor="data-aos-anchor">Download CV</a>
        </div>
      </div>
      <div class="section">
        <div class="container">
          <div class="button-container"><a class="btn btn-default btn-round btn-lg btn-icon" href="#" rel="tooltip" title="Follow me on Facebook"><i class="fa fa-facebook"></i></a><a class="btn btn-default btn-round btn-lg btn-icon" href="#" rel="tooltip" title="Follow me on Twitter"><i class="fa fa-twitter"></i></a><a class="btn btn-default btn-round btn-lg btn-icon" href="#" rel="tooltip" title="Follow me on Google+"><i class="fa fa-google-plus"></i></a><a class="btn btn-default btn-round btn-lg btn-icon" href="#" rel="tooltip" title="Follow me on Instagram"><i class="fa fa-instagram"></i></a></div>
        </div>
      </div>
    </div>
  </div>
</div>
  
@endif



