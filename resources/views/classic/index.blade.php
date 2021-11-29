@extends('classic.general')

@section('pagetitle', 'Trung tâm Đào tạo Từ xa - Đại học Thái Nguyên')

@section('slide')
  @if (session('message'))
  <div class="alert alert-success my-2 text-center">
      {{ session('message') }}
  </div>    
  @endif
  @include('classic.news')   
@endsection

@section('thongtinsuutam')
  @include('classic.thongtinsuutam')
@endsection

@section('khaigiang')
  @include('classic.khaigiang')     
@endsection

@section('nganhdaotao')
  @include('classic.nganhdaotao')
@endsection

@section('introvideo')
<div class="container">
  <div class="row">
    <div class="col-md-6">
      <div class="ytb-video">
        <div class="ratio ratio-16x9">
          <iframe title="Giới thiệu về Trung tâm Đào tạo Từ xa" srcdoc="<style>*{padding:0;margin:0;overflow:hidden}html,body{height:100%}img,span{position:absolute;width:100%;top:0;bottom:0;margin:auto}span{height:1.5em;text-align:center;font:48px/1.5 sans-serif;color:white;text-shadow:0 0 0.5em black}</style><a href=https://www.youtube.com/embed/A6LitFDXzUY?autoplay=1><img src=https://img.youtube.com/vi/A6LitFDXzUY/hqdefault.jpg alt='Giới thiệu về Trung tâm Đào tạo Từ xa'><span>▶</span></a>" src="https://www.youtube.com/embed/A6LitFDXzUY?controls=0" width="100%"  frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="tracuudiem bg-primary text-white py-5 d-flex justify-content-center align-items-center">
        {{-- <h3 class="d-block">Tra cứu điểm</h3> --}}
        <div class="row">
          <div class="col">
            <div class="form-group">
              <h3>Tra cứu điểm cho học viên</h3>
            </div>
            <div class="form-group">
              <label for="inputMSV">Nhập mã học viên</label>
              <input type="text" name="inputMSV" id="inputMSV" class="form-control">
            </div>
            <div class="form-group">
              <button class="btn btn-block btn-outline-warning" data-toggle="modal" data-target="#traCuuDiemModal">Tra cứu điểm</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="traCuuDiemModal" tabindex="-1" aria-labelledby="traCuuDiemModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-info text-white">
        <h5 class="modal-title" id="traCuuDiemModalLabel">Thông tin tra cứu điểm học viên</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h4>ĐANG XÂY DỰNG</h4>
        <h5>Vui lòng quay lại sau!</h5>
      </div>
      <div class="modal-footer bg-info">
        <button type="button" class="btn btn-warning" data-dismiss="modal">Đóng</button>
      </div>
    </div>
  </div>
</div>
@endsection

@section('maincontent')
  <div class="tab">
    <h3 class="tab-header">Thông tin sưu tầm</h3>
    <div class="tab-body">
      <!-- Đổ danh sách bài viết -->
      @foreach ($items as $item)
        <div class="row mb-3">
          <div class="col-4 col-md-3">
            <a href="{{ route('daotao',$item->alias) }}"><img src="{{ asset(empty($item->media->first()->link)?'images/noimage.jpg':$item->media->first()->link) }}" class="img-fluid" title="{{ $item->post_details->first()->name }}" alt="{{ $item->post_details->first()->name }}"></a>
          </div>
          <div class="col-8 col-md-9">
            <h5><a href="{{ route('daotao',$item->alias) }}">{{ $item->post_details->first()->name }}</a></h5>
            <p class="d-none d-md-block">{!! Str::words(strip_tags($item->post_details->first()->body) , 50, '...') !!}</p>
            {{-- <p class="d-none d-md-block">{{ $item->category->category_details->first()->name }}</p> --}}
          </div>
        </div>
      @endforeach      
      <!-- Kết thúc danh sach bài viết -->
    </div>
  </div>
@endsection