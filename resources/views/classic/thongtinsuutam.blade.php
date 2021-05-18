<section id="thongtinsuutam" class="py-3 bg-success text-white">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                &nbsp;
            </div>
            <div class="col-md-4">
                <button type="button" data-toggle="modal" data-target="#tvtsModal" class="btn btn-lg btn-block btn-outline-warning">{{ __('home.tuvantuyensinh') }}</button>
            </div>
        </div>
    </div>
</section>

<div class="modal fade" id="tvtsModal" tabindex="-1" aria-labelledby="tvtsModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-body">
            <form action="{{ route('tvts') }}" method="POST">
                @csrf
                <div class="formtuyensinh bg-success text-white mt-1 p-2 rounded">
                    <h5 class="header text-center">Tư vấn tuyển sinh</h5>
                    <div class="form-group">
                    <label for="tvtsten">Họ tên <span class="text-danger">*</span></label>
                    <input class="form-control" type="text" name="tvtsten" placeholder="Họ tên" id="tvtsten">
                    </div>
                    <div class="form-group">
                    <label for="tvtssdt">Số điện thoại <span class="text-danger">*</span></label>
                    <input class="form-control" type="text" name="tvtssdt" placeholder="Số điện thoại" id="tvtssdt">
                    </div>
                    <div class="form-group">
                    <label for="tvtsnganh">Ngành học</label>
                    <select class="form-control" name="tvtsnganh" id="tvtsnganh">
                        <option value="0">-- Chọn ngành học --</option>
                        <option value="Luật">Luật</option>
                        <option value="Luật kinh tế">Luật kinh tế</option>
                        <option value="Kế toán">Kế toán</option>
                        <option value="Quản trị kinh doanh">Quản trị kinh doanh</option>
                        <option value="Công nghệ thông tin">Công nghệ thông tin</option>
                        <option value="Quản lý đất đai">Quản lý đất đai</option>
                        <option value="Khoa học thư viện">Khoa học thư viện</option>
                        <option value="Ngôn ngữ Anh">Ngôn ngữ Anh</option>
                    </select>                
                    </div>
                    <div class="form-group">
                    <label for="tvtsdiachi">Địa chỉ</label>
                    <input class="form-control" type="text" name="tvtsdiachi" placeholder="Địa chỉ" id="tvtsdiachi">
                    </div>
                    <div class="form-group">
                    <button type="submit" class="btn btn-outline-warning btn-block">Gửi yêu cầu</button>
                    </div>
                </div>
            </form>
        </div>

      </div>
    </div>
</div>