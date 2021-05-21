<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/jquery.jdSlider.css') }}" rel="stylesheet">
    {{-- <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet"> --}}
    @stack('styles')

    <title>@yield('pagetitle',"Trung tâm Đào tạo Từ xa - Đại học Thái Nguyên")</title>
    @yield('metatag')
  </head>
  <body>
    
    
      @include('classic.header')
    <div class="sticky-top">
      @include('classic.navigation')
    </div>

    @yield('slide')

    @yield('thongtinsuutam')

    @yield('khaigiang')

    @yield('nganhdaotao')

    @yield('introvideo')  

    <section id="maincontent" class="my-2">
      <div class="container">
        <div class="row">
            <div class="col-md-9">
                @yield('maincontent')
            </div>
            <div class="col-md-3">
                @include('classic.sidebar')
            </div>          
        </div>
      </div>
    </section>

    @yield('khaigiang2')
    
    @include('classic.doitac')

    @include('classic.menu_bottom')

    @include('classic.footer')
    @if (!Str::contains(request()->header("User-Agent"),'Lighthouse'))
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v10.0&appId=235569260823943&autoLogAppEvents=1" nonce="TViio8po"></script>
      <!-- Load Facebook SDK for JavaScript -->
      <div id="fb-root"></div>
      <script>
        window.fbAsyncInit = function() {
          FB.init({
            xfbml            : true,
            version          : 'v8.0'
          });
        };

        (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));</script>

      <!-- Your Chat Plugin code -->
      <div class="fb-customerchat"
        attribution=setup_tool
        page_id="113337770019959"
  logged_in_greeting="Xin chào! Trung tâm đào tạo từ xa - Đai học Thái Nguyên sẵn sàng trợ giúp!"
  logged_out_greeting="Xin chào! Trung tâm đào tạo từ xa - Đai học Thái Nguyên sẵn sàng trợ giúp!">
      </div>    
    @endif
    <script src="{{ asset('js/app.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/jquery.jdSlider-latest.min.js') }}" type="text/javascript"></script>
    <script>
      window.onload = function () {
          jQuery('.slider3-3').jdSlider({
              wrap: '.slide-inner',
              slideShow: 6,
              slideToScroll: 1,
              isAuto: true,
              isLoop: true,
              margin: 10,
              responsive: [{
                  viewSize: 768,
                  settings: {
                      slideShow: 3,
                      slideToScroll: 1
                  }
              }]
          });
      };
    </script>
    @stack('scripts')
  </body>
</html>