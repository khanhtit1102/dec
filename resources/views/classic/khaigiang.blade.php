<section id="khaigiang">
    <div class="container">
        <div class="row">
            <div class="col-md-4 my-2">
                <div class="khaigiang khaigianghn text-center bg-primary text-white p-4 rounded">
                    <h3>Khai giảng tại Hà Nội</h3>
                    <h5>Ngày 30/05/2021</h5>
                    <div class="demnguoc demnguochn">
                        <button class="btn btn-lg btn-outline-warning ngay my-1">20 ngày</button>
                        <button class="btn btn-lg btn-outline-warning gio my-1">21 giờ</button>
                        <button class="btn btn-lg btn-outline-warning phut my-1">22 phút</button>
                        <button class="btn btn-lg btn-outline-warning giay my-1">23 giây</button>
                    </div>
                    <div class="dangkyngay mt-3">
                        <button class="btn btn-warning btn-lg" data-toggle="modal" data-target="#registerRequest">Đăng ký ngay</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 my-2">
                <div class="khaigiang khaigianghcm text-center bg-primary text-white p-4 rounded">
                    <h3>Khai giảng tại Hồ Chí Minh</h3>
                    <h5>Ngày 06/06/2021</h5>
                    <div class="demnguoc demnguochcm">
                        <button class="btn btn-lg btn-outline-warning ngay my-1">23 ngày</button>
                        <button class="btn btn-lg btn-outline-warning gio my-1">10 giờ</button>
                        <button class="btn btn-lg btn-outline-warning phut my-1">22 phút</button>
                        <button class="btn btn-lg btn-outline-warning giay my-1">22 phút</button>
                    </div>
                    <div class="dangkyngay mt-3">
                        <button class="btn btn-warning btn-lg" data-toggle="modal" data-target="#registerRequest">Đăng ký ngay</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 my-2">
                <div class="bg-primary text-white p-2 rounded text-center">
                    <h5>Hoặc</h5>
                    <h3 class="pb-1">Nếu bạn là một nhóm/cơ quan có nhu cầu học tập</h3>
                    <p class="d-none"><i>(Số lượng từ 40 người)</i></p>
                    <button class="btn btn-block btn-warning" data-toggle="modal" data-request="molop" data-target="#registerRequest">Yêu cầu mở lớp</button>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="modal fade" id="registerRequest" tabindex="-1" aria-labelledby="registerRequestLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="registerRequestLabel">Đăng ký học</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="form-group"><label for="nameInput">Họ tên</label><input name="register_name" type="text" class="form-control"></div>
            <div class="form-group"><label for="phoneInput">Số điện thoại</label><input name="register_phone" type="text" class="form-control"></div>
            <div class="form-group molop d-none">
                <label for="amountInput">Tôi đại diện cho nhóm</label>
                <select name="register_amount" id="amountInput" class="form-control">
                    <option value="Chưa rõ">-- Chọn số lượng --</option>
                    <option value="Dưới 30 người">Dưới 30 người</option>
                    <option value="Từ 30 đến 50 người">Từ 30 đến 50 người</option>
                    <option value="Từ 50 đến 100 người">Từ 50 đến 100 người</option>
                    <option value="Trên 100 người">Trên 100 người</option>
                </select>
                <span for="amountInput">muốn yêu cầu mở lớp</span>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng lại</button>
          <button type="button" class="btn btn-primary">Gửi yêu cầu</button>
        </div>
      </div>
    </div>
</div>

@push('scripts')
    <script type="text/javascript">
        var timediff = function(t1,t2) {
            var msec = (t1-t2);            
            var dd = Math.floor(msec/1000/60/60/24);
            msec -= dd * 1000 * 60 * 60 * 24;
            var hh = Math.floor(msec / 1000 / 60 / 60);
            if(hh<10) {
                hh = "0" + hh;
            }
            msec -= hh * 1000 * 60 * 60;
            var mm = Math.floor(msec / 1000 / 60);
            if(mm<10) {
                mm = "0" + mm;
            }
            msec -= mm * 1000 * 60;
            var ss = Math.floor(msec / 1000);
            if(ss<10) {
                ss = "0" + ss;
            }
            msec -= ss * 1000;
            return [dd,hh,mm,ss];
        };
        var checkTime = function() {
            var kghn  = new Date("5/30/2021 8:00:00");
            var kghcm = new Date("06/06/2021 8:00:00");
            var cTime = Date.now();
            var tmpHN = timediff(kghn.getTime(),cTime);
            jQuery('.demnguochn .ngay').text(tmpHN[0] + ' ngày');
            jQuery('.demnguochn .gio').text(tmpHN[1] + ' giờ');
            jQuery('.demnguochn .phut').text(tmpHN[2] + ' phút');
            jQuery('.demnguochn .giay').text(tmpHN[3] + ' giây');
            var tmpHCM = timediff(kghcm.getTime(),cTime);
            jQuery('.demnguochcm .ngay').text(tmpHCM[0] + ' ngày');
            jQuery('.demnguochcm .gio').text(tmpHCM[1] + ' giờ');
            jQuery('.demnguochcm .phut').text(tmpHCM[2] + ' phút');
            jQuery('.demnguochcm .giay').text(tmpHCM[3] + ' giây');
            setTimeout(checkTime,1000);
        };
        jQuery(document).ready(function() {
            checkTime();
        });
        jQuery('#registerRequest').on('show.bs.modal',function(e) {
            var type = jQuery(e.relatedTarget).data('request');
            if(type=='molop') {
                jQuery('#registerRequest .molop').removeClass('d-none');    
            }else{
                jQuery('#registerRequest .molop').addClass('d-none');
                jQuery('#amountInput').val("Chưa rõ");     
            }
        });    
    </script>
@endpush