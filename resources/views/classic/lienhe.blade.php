@extends('classic.general')

@section('pagetitle', 'Liên hệ với Trung tâm Đào tạo Từ xa - Đại học Thái Nguyên')

@section('khaigiang2')
  @include('classic.khaigiang')     
@endsection

@section('maincontent')
<div class="tab">
    <h3 class="tab-header">Gửi thông tin liên hệ đến Trung tâm Đào tạo từ xa</h3>
    <div class="tab-body">
        @if (session('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>    
        @endif
        <form action="{{ route('contactpost') }}" class="border-bottom mb-2" method="POST">
            @csrf
            <div class="form-group">
                <label for="frmName">Họ tên</label>
                <input type="text" id="frmName" name="name" class="form-control">
            </div>
            <div class="form-group">
                <label for="frmPhone">Điện thoại</label>
                <input type="text" id="frmPhone" name="phone" class="form-control">
            </div>
            <div class="form-group">
                <label for="frmMessage">Nội dung</label>
                <textarea name="message" class="form-control" row="6"></textarea>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-outline-success">Gửi tin nhắn</button>
                <button type="reset" class="btn btn-outline-danger">Xóa</button>
            </div>
        </form>
        <div class="directinfo">
            <div class="row">
                <div class="col-md-4">
                    <h5>Liên hệ trực tiếp</h5>
                    <h5 class="mb-4">Trung tâm Đào tạo Từ xa - ĐHTN</h5>
                    <p>Điện thoại: <a href="tel:02083648989">0208 364 89 89</a></p>
                    <p>Email: <a href="mailto:ttdttx@tnu.edu.vn">ttdttx@tnu.edu.vn</a></p>
                    <p>Địa chỉ: Phường Tân Thịnh - tp Thái Nguyên - Tỉnh Thái Nguyên.</p>
                </div>
                <div class="col-md-8">
                    <div id="ttdttxmap">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3709.9474544089635!2d105.80957561480697!3d21.58797407382838!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313527aacf5b4b9b%3A0x7787e7dac2d88b22!2zVHJ1bmcgdMOibSDEkMOgbyB04bqhbyBU4burIHhhIMSQ4bqhaSBI4buNYyBUaMOhaSBOZ3V5w6pu!5e0!3m2!1svi!2s!4v1596511385443!5m2!1svi!2s" width="100%" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection