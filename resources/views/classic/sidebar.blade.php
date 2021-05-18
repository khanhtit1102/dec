
    <div class="tab scrollitem">
      <h3 class="tab-header">Tin tức</h3>
      <div class="tab-body">
        <div class="overflow-hidden newswrap">                
          @foreach ($news as $item)
            <div class="newsitem news-item-{{ $loop->iteration }}">
              <div class="row">
                <div class="col-3">
                  <span class="badge badge-success py-2">
                    <span class="date d-block">{{ $item->created_at->format('d') }}</span>
                    <span class="monthyear">{{ $item->created_at->format('m') }}/{{ $item->created_at->format('Y') }}</span>
                  </span>
                </div>
                <div class="col-9 pl-0"><h6 class="m-0"><a href="{{ route('news',$item) }}">{{ Str::words($item->post_details->first()->name, 8, '...') }}</a></h6></div>
              </div>                  
            </div>    
          @endforeach
        </div>
      </div>
    </div>
    <div class="tab scrollitem">
      <h3 class="tab-header">Thông báo</h3>
      <div class="tab-body">
        <div class="overflow-hidden newswrap">
        @foreach ($noti as $item)
          <div class="newsitem news-item-{{ $loop->iteration }}">
            <div class="row">
              <div class="col-3">
                <span class="badge badge-success py-2">
                  <span class="date d-block">{{ $item->created_at->format('d') }}</span>
                  <span class="monthyear">{{ $item->created_at->format('m') }}/{{ $item->created_at->format('Y') }}</span>
                </span>
              </div>
              <div class="col-9 pl-0"><h6 class="m-0"><a href="{{ route('anouncement',$item) }}">{{ $item->post_details->first()->name }}</a></h6></div>
            </div>                  
          </div>    
        @endforeach
        </div>
      </div>
    </div>
@yield('sidebar')