@extends('classic.general')

@section('pagetitle', $post->post_details->first()->name . ' - Trung tâm Đào tạo từ xa - ĐHTN' )

@section('maincontent')
  <div class="tab">
    <h3 class="tab-header">{{ $post->post_details->first()->name }}</h3>
    <div class="tab-body">
      @if(!empty($post->media))
        <div id="slidePostImage" class="carousel slide" data-ride="carousel" data-interval="3000">
          <div class="carousel-inner">
            @foreach($post->media as $item)
              <div class="carousel-item @if($loop->index==0) active @endif">
                <img src="{{ asset($item->link) }}" class="img-fluid" title="{{ $post->post_details->first()->name }}" alt="{{ $post->post_details->first()->name }}">
              </div>
            @endforeach
          </div>
          @if(count($post->media)>1)
          <a class="carousel-control-prev" href="#slidePostImage" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#slidePostImage" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
          @endif
        </div>
      @endif
      <div class="content text-justify">
            {!! $post->post_details->first()->body !!}
        </div>
        @if ($post->attachments->count()>0)
        <h4>Đính kèm:</h4>
        <div class="content text-justify">
          @foreach ($post->attachments as $item)
            <div class="row item">
              <div class="col-12">
                <a href="{{ $item->link }}" alt="{{ $item->name}}" title="{{ $item->name }}">{{ $item->name }}</a>  
              </div>  
            </div>      
          @endforeach
        </div>
        @endif
    </div>
  </div>
@endsection
