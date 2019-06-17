<link rel="stylesheet" type="text/css" href="public/css/passwordscheck.css">
<script type="text/javascript" src="public/js/passwordscheck.js"></script>
<div class="col-md-5 col-8 align-self-center">
    <h3 class="text-themecolor m-b-0 m-t-0">Quản lí nhân viên</h3>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
        <li class="breadcrumb-item active">Quản lí nhân viên</li>
        <li class="breadcrumb-item active">Thêm nhân viên</li>
    </ol>
</div>
<div class="col-md-7 col-4 align-self-center">
    <a href="index.php?mod=employees&act=list" class="btn waves-effect waves-light btn-danger pull-right hidden-sm-down"><i class="mdi mdi-chevron-left"></i><b> Quay lại</b></a>
</div>
</div>

<!-- Start Page Content -->
<!-- ============================================================== -->
<!-- Row -->
<form action="index.php?mod=employees&act=store" method="POST" class="form-horizontal form-material"  enctype="multipart/form-data" id="formKH">
<div class="row">
    <!-- Column -->

    <div class="col-lg-4 col-xlg-2 col-md-2">
        
            <div class="card">
                <div class="card-block">
                    <center class="m-t-20"><label class="form-horizontal form-material">Ảnh nhân viên</label></center>
                    <center class="m-t-30"><img src="public/img_nv/empty.jpg" id="anh" class="img-circle" width="220" /><br>
                        <br><h4 class="card-title m-t-10">Thêm ảnh nhân viên: </h4><br>
                        <input type="file" name="img_nv" id="imgg" style="width: 250px;">
                        <script type="text/javascript"> //hiển thị ảnh lập tức
                            $(document).ready(function() {
                                $('#imgg').change( function(event) {
                                    var tmppath = URL.createObjectURL(event.target.files[0]);
                                    $("#anh").fadeIn("fast").attr('src',tmppath);
                                });                                 
                            });                                 
                        </script>
                    </center>
                </div>
            </div>
    </div>
    <!-- Column -->

    <div class="col-lg-8 col-xlg-10 col-md-10">
        <div class="card">
            <div class="card-block">

                <div class="form-group">
                    <label class="col-md-12"><h2 class="page-header"><i class="mdi mdi-plus-circle-outline"></i> THÊM NHÂN VIÊN MỚI</h2></label>
                </div>
                <div class="form-group">
                    <label class="col-md-12">Tên nhân viên</label>
                    <br><div class="col-md-12">
                        <input type="text" placeholder="Nhập tên" class="form-control form-control-line" name="ten_nv" required>
                    </div>
                </div><br>
                <div class="form-group">
                    <label class="col-md-12">Số điện thoại</label>
                    <br><div class="col-md-12">
                        <input type="text" placeholder="Nhập số điện thoại" class="form-control form-control-line" name="so_dt" required>
                    </div>
                </div><br>
                <div class="form-group">
                    <label class="col-md-12">Email</label>
                    <br><div class="col-md-12">
                        <input type="email" placeholder="Nhập email" class="form-control form-control-line" name="email" required>
                    </div>
                </div><br>
                <div class="form-group">
                    <label class="col-md-12">Password</label>
                    <br><div class="col-md-12">
                        <input type="password" placeholder="Nhập mật khẩu" class="form-control form-control-line password" name="mat_khau" id="mat_khau" required><br>
                        <span id="result"></span>
                    </div>
                </div><br>
                <div class="form-group">
                    <label class="col-md-12">Xác nhận password</label>
                    <br><div class="col-md-12">
                        <input type="password" placeholder="Xác nhận mật khẩu" class="form-control form-control-line password" name="xac_nhan_mat_khau" required>
                    </div>
                </div><br>
                <div class="form-group">
                    <label class="col-sm-12">Loại tài khoản</label>
                    <br><div class="col-sm-12">
                        <select class="form-control form-control-line" name="loai_tk">
                            <option value="emp" selected>Nhân viên</option>
                            <option value="admin">Admin</option>
                        </select>
                    </div>
                </div><br>
                <div class="form-group">
                    <label class="col-sm-12">Trạng thái</label>
                    <br><div class="col-sm-12">
                        <select class="form-control form-control-line" name="trang_thai">
                            <option value="0">Chọn trạng thái</option>
                            <option value="1">Hoạt động</option>
                            <option value="2">Hủy kích hoạt</option>
                        </select>
                    </div>
                </div><br>
                <div class="form-group" align="center">
                    <div class="col-sm-12">
                        <button type="submit" class="m-t-10 waves-effect waves-dark btn btn-info btn-md btn-rounded">Thêm nhân viên mới</button>
                    </div><br>
                </div>
                <script type="text/javascript">
                    $(document).ready(function($) {
                        $("#formKH").validate({
                            rules: {
                                ten_nv: "required",
                                email: {
                                    required: true,
                                    email: true
                                },
                                so_dt: {
                                    required: true,
                                    number: true,
                                    minlength:10,
                                    maxlength:11
                                },
                                mat_khau: {
                                    required: true,
                                    minlength:6,
                                    maxlength:16
                                },
                                xac_nhan_mat_khau: {
                                    required: true,
                                    minlength:6,
                                    maxlength:16,
                                    equalTo: "#mat_khau"
                                },

                            },
                            messages: {
                                ten_nv: "<br>Vui lòng nhập họ và tên",
                                email: {
                                    required: "<br>Vui lòng nhập email",
                                    email: "<br>Vui lòng nhập đúng định dạng email"
                                },
                                so_dt: {
                                    required: "<br>Vui lòng nhập số điện thoại",
                                    number: "<br>Bắt buộc phải nhập chữ số",
                                    minlength: "<br>Số điện thoại phải dài hơn 10 số",
                                    maxlength: "<br>Số điện thoại phải ngắn hơn 11 số"
                                },
                                mat_khau: {
                                    required: "<br>Vui lòng nhập mật khẩu",
                                    minlength: "<br>Mật khẩu phải dài hơn 6 kí tự",
                                    maxlength: "<br>Mật khẩu phải ngắn hơn 16 kí tự"
                                },
                                xac_nhan_mat_khau: {
                                    required: "<br>Vui lòng xác nhận mật khẩu",
                                    minlength: "<br>Mật khẩu phải dài hơn 6 kí tự",
                                    maxlength: "<br>Mật khẩu ngắn hơn 16 kí tự",
                                    equalTo: "<br>Mật khẩu xác nhận không đúng"
                                },

                            }
                        });

                    });

                </script>

            </div>
        </div>
    </div>

<!-- Column -->
</div>
</form>
<!-- Row -->
<!-- ============================================================== -->
<!-- End PAge Content -->
</div>

<?php
if (isset($_COOKIE['email_da_ton_tai_store'])) {
  ?>
  <script type="text/javascript">
    toastr["warning"]("Địa chỉ email đã tồn tại!", "Thêm khách hàng mới");
</script>
<?php
}
?>