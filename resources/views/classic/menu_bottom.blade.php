<section id="menubottom" class="d-none d-md-flex bg-primary hovernav mt-2">
    <div class="container">
        <ul class="nav">
            {{-- <li class="nav-item dropup">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">{{ __('menu.bacongkhai') }}</a>
                <ul class="dropdown-menu bg-md-primary">
                    <li><a href="{{ route('bck','co-so-vat-chat') }}" class="dropdown-item">{{ __('menu.cosovatchat') }}</a></li>
                    <li><a href="{{ route('staff') }}" class="dropdown-item">{{ __('menu.doingucanbo') }}</a></li>
                    <li class="dropright">
                        <a class="dropdown-item dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" href="#">{{ __('menu.doingugiaovien') }}</a>
                        <ul class="dropdown-menu bg-md-primary">
                            <li><a href="{{ route('bck','giao-vien-giang-day') }}" class="dropdown-item">{{ __('menu.gvgiangday') }}</a></li>    
                            <li><a href="{{ route('bck','chuyen-gia-huong-dan') }}" class="dropdown-item">{{ __('menu.chuyengiahd') }}</a></li>    
                        </ul>
                    </li>
                </ul>
            </li> --}}
            <li class="nav-item"><a href="{{ route('contact') }}" class="nav-link">{{ __('menu.lienhe') }}</a></li>
            <li class="nav-item"><a href="#" class="nav-link">{{ __('menu.tienich') }}</a></li>
            <li class="nav-item"><a target="_blank" href="http://qlvb.tnu.edu.vn/" class="nav-link">Quản lý văn bản</a></li>
        </ul>
    </div>
</section>