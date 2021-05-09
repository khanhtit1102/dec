<section id="news" class="bg-white py-3">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="row">
                    <div class="col-8"><h3 class="text-secondary d-flex justify-content-start border-bottom"><img class="mr-1" src="{{ asset('images/newspaper.svg') }}" width="28" height="28" alt="{{ __('home.news_events') }}">{{ __('home.news_events') }}</h3></div>
                    <div class="col-4 d-flex justify-content-end">
                        <button data-direction="1" class="btn newseventsbtn btn-outline-info h6 btn-sm mr-1">&lArr;</button>
                        <button data-direction="2" class="btn newseventsbtn btn-outline-info h6 btn-sm">&rArr;</button>
                    </div>
                </div>
                
                <div class="newsevents">
                    <div class="row">
                        @foreach ($news as $item)
                            <div class="col-md-4 mb-2 newsevents-item @if($loop->index<3) d-block @else d-none @endif">
                                <div class="newsevents-item-wrap">
                                    <div class="newsimage">
                                        <a href="{{ route('newsdetail',$item->alias) }}"><img src="{{ asset(empty($item->media->first()->link)?'images/noimage.jpg':$item->media->first()->link) }}" class="img-fluid" title="{{ $item->post_details->first()->name }}" alt="{{ $item->post_details->first()->name }}"></a>
                                    </div>
                                    <div class="newstitle1 bg-warning d-block p-1">
                                        <h6>
                                            <a href="{{ route('newsdetail',$item->alias) }}">
                                                <span class="d-none d-lg-block">{{ Str::words($item->post_details->first()->name,10) }}</span>
                                                <span class="d-block d-lg-none">{{ $item->post_details->first()->name }}</span>
                                            </a>
                                        </h6>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <h3 class="text-secondary d-flex justify-content-start border-bottom"><img class="mr-1" src="{{ asset('images/feature.svg') }}" width="28" height="28" alt="{{ __('home.featurednews') }}">{{ __('home.featurednews') }}</h3>
                <div class="featurednews">
                    <div class="row">
                        @foreach ($featurednews as $item)
                            <div class="col-12 @if($loop->index<6) d-block @else d-none @endif">
                                <div class="featurednews-item">
                                    <div class="newstitle h5">
                                        <img class="mr-1" src="{{ asset('images/feature.svg') }}" width="9" height="9" alt="{{ __('home.featurednews') }}"><a href="{{ route('newsdetail',$item->alias) }}">{{ Str::words($item->post_details->first()->name,20) }}</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>