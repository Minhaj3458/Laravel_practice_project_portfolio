<footer class="footer">
   @if ($social_media->count() != 0)
            @foreach ($social_media as $show )
                 <div class="container text-center"><a class="cc-facebook btn btn-link" href="{{ $show->facebook }}"><i class="fa fa-facebook fa-2x " aria-hidden="true"></i></a><a class="cc-twitter btn btn-link " href="{{ $show->twitter }}"><i class="fa fa-twitter fa-2x " aria-hidden="true"></i></a><a class="cc-google-plus btn btn-link" href="{{ $show->google }}"><i class="fa fa-google-plus fa-2x" aria-hidden="true"></i></a><a class="cc-instagram btn btn-link" href="{{ $show->intagram }}"><i class="fa fa-instagram fa-2x " aria-hidden="true"></i></a></div>
            @endforeach
          @else
                   <div class="container text-center"><a class="cc-facebook btn btn-link" href="#"><i class="fa fa-facebook fa-2x " aria-hidden="true"></i></a><a class="cc-twitter btn btn-link " href="#"><i class="fa fa-twitter fa-2x " aria-hidden="true"></i></a><a class="cc-google-plus btn btn-link" href="#"><i class="fa fa-google-plus fa-2x" aria-hidden="true"></i></a><a class="cc-instagram btn btn-link" href="#"><i class="fa fa-instagram fa-2x " aria-hidden="true"></i></a></div>
          @endif
      @if ($slider->count() != 0)
       @foreach ($slider as $show)
          <div class="h4 title text-center">{{ Str::upper($show-> full_name) }}</div>
       @endforeach
      @else
        <div class="h4 title text-center">Anthony Barnett</div>
      @endif
    
      <div class="text-center text-muted">
        <p> <br> <a class="credit" href="" target="_blank"></a></p>
      </div>
    </footer>