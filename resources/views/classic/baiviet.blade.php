@extends('classic.general')

@section('pagetitle', $post->post_details->first()->name . ' - Trung tâm Đào tạo từ xa - ĐHTN' )

@section('maincontent')
  <div class="tab">
    <h3 class="tab-header">{{ $post->post_details->first()->name }}</h3>
    <div class="tab-body">
      @if(!empty($post->media->first()->link))
      <img src="{{ asset(empty($post->media->first()->link)?'images/noimage.jpg':$post->media->first()->link) }}" class="img-fluid" title="{{ $post->post_details->first()->name }}" alt="{{ $post->post_details->first()->name }}">
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
