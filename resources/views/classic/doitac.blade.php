<section id="doitac">
    <div class="container">
        <div class="bg-white p-2 border border-gray rounded dt-wrap">
            <section class="jd-slider slider3-3">
                <div class="slide-inner">
                    <ul class="slide-area">
                        @foreach ($doitac as $item)
                        <li>
                            <a href="{{ $item->link }}"><img class="img-thumbnail" src="{{ asset($item->image) }}" alt="{{ $item->description }}" title="{{ $item->description }}"></a>
                        </li>
                        @endforeach
                    </ul>
                    <a class="prev" href="#">
                        <i class="fas fa-angle-left fa-2x"></i>
                    </a>
                    <a class="next" href="#">
                        <i class="fas fa-angle-right fa-2x"></i>
                    </a>
                </div>
                <div class="controller d-none">
                    <a class="auto" href="#">
                        <i class="fas fa-play fa-xs"></i>
                        <i class="fas fa-pause fa-xs"></i>
                    </a>
                    <div class="indicate-area"></div>
                </div>
            </section>
            {{-- <div class="row">
                @foreach ($doitac as $item)
                    <div class="col-2 dt-item dt-item-{{ $loop->iteration }} @if($loop->iteration>6) d-none @else d-block @endif">
                        <div class="doitac-item">
                            <a href="{{ $item->link }}"><img class="img-thumbnail" src="{{ asset($item->image) }}" alt="{{ $item->description }}" title="{{ $item->description }}"></a>
                        </div>
                    </div>
                @endforeach
            </div> --}}
        </div>        
    </div>
</section>
