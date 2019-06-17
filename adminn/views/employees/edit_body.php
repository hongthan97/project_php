<?php
if (isset($_COOKIE['mat_khau_cu_sai'])) {
  ?>
  <script type="text/javascript">
    toastr["error"]("Mật khẩu cũ sai!", "Cập nhật mật khẩu nhân viên");
</script>
<?php
}
?>
<div class="col-md-5 col-8 align-self-center">
    <h3 class="text-themecolor m-b-0 m-t-0">Quản lí nhân viên</h3>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
        <li class="breadcrumb-item active">Quản lí nhân viên</li>
        <li class="breadcrumb-item active">Cập nhật thông tin</li>
    </ol>
</div>
<div class="col-md-7 col-4 align-self-center">
    <a href="index.php?mod=employees&act=list" class="btn waves-effect waves-light btn-danger pull-right hidden-sm-down"><i class="mdi mdi-chevron-left"></i><b> Quay lại</b></a>
</div>
</div>


<!-- Start Page Content -->
<!-- ============================================================== -->
<!-- Row -->
<form action="index.php?mod=employees&act=update" class="form-horizontal form-material" method="POST" enctype="multipart/form-data" id="formNV">
    <div class="row">
        <!-- Column -->
        <div class="col-lg-4 col-xlg-3 col-md-5">

            <div class="card">
                <div class="card-block">
                    <center class="m-t-20"><label class="form-horizontal form-material">Ảnh nhân viên</label></center>
                    <center class="m-t-30">
                        <?php if (empty($row['img'])) {
                            ?>
                            <img src="public/img_nv/empty.jpg" id="anh" class="img-circle" width="220" /><br>
                            <?php
                        } else { ?>
                            <img src="public/img_nv/<?= $row['img'] ?>" id="anh" class="img-circle" width="220" /><br>
                        <?php   } ?>
                        
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
    <!-- Column -->
    <div class="col-lg-8 col-xlg-9 col-md-7">
        <div class="card">
            <div class="card-block">

                <div class="form-group">
                    <label class="col-md-12"><h2 class="page-header"><i class="mdi mdi-package-up"></i> Cập nhật thông tin nhân viên</h2></label>
                </div>
                <div class="form-group">
                    <label class="col-md-12" style="color: grey;">Mã nhân viên</label>
                    <div class="col-md-12">
                        <input type="text" class="form-control form-control-line" value="<?= $row['ma_nv'] ?>" name="ma_nv" readonly>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-12">Tên nhân viên</label>
                    <div class="col-sm-12">
                        <input type="text" class="form-control form-control-line" value="<?= $row['ten_nv'] ?>" name="ten_nv" required>
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="col-md-12">Số điện thoại</label>
                    <div class="col-md-12">
                        <input type="number" placeholder="Nhập số điện thoại" class="form-control form-control-line" value="<?= $row['so_dt'] ?>" name="so_dt" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-12">Email</label>
                    <div class="col-md-12">
                        <input type="email" placeholder="Nhập email" class="form-control form-control-line" value="<?= $row['email'] ?>" name="email" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-12">Loại tài khoản</label>
                    <div class="col-md-12">
                        <?php if ($row['loai_tk'] == 'admin') {
                            ?>
                            <select class="form-control form-control-line" name="loai_tk">
                                <option value="emp">Nhân viên</option>
                                <option value="admin" selected>Admin</option>
                            </select>
                            <?php
                        } elseif ($row['loai_tk'] == 'emp') {
                            ?>
                            <select class="form-control form-control-line" name="loai_tk">
                                <option value="emp" selected>Nhân viên</option>
                                <option value="admin">Admin</option>
                            </select>
                            <?php  
                        } 
                        ?>

                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-12">Trạng thái</label>
                    <div class="col-md-12">
                        <?php if ($row['trang_thai'] == 0) {
                            ?>
                            <select class="form-control form-control-line" name="trang_thai">
                                <option value="0" selected>Chọn trạng thái</option>
                                <option value="1">Hoạt động</option>
                                <option value="2">Hủy kích hoạt</option>
                            </select>
                            <?php
                        } elseif ($row['trang_thai'] == 1) {
                            ?>
                            <select class="form-control form-control-line" name="trang_thai">
                               <option value="0">Chọn trạng thái</option>
                               <option value="1" selected>Hoạt động</option>
                               <option value="2">Hủy kích hoạt</option>
                           </select>
                           <?php
                       } elseif ($row['trang_thai'] == 2) {
                        ?>
                        <select class="form-control form-control-line" name="trang_thai">
                           <option value="0">Chọn trạng thái</option>
                           <option value="1">Hoạt động</option>
                           <option value="2" selected>Hủy kích hoạt</option>
                       </select>
                       <?php
                   } 
                   ?>

               </div>
           </div>
       </form>
       <div class="form-group">
        <div class="col-sm-12">
            <button type="submit" class="m-t-10 waves-effect waves-dark btn btn-info btn-md btn-rounded"><i class="mdi mdi-apple-keyboard-shift"></i> Cập nhật thông tin</button>

            <?php include('update_password.php') ?>
        </div><br>
    </div>
    <script type="text/javascript">
        $(document).ready(function($) {
            $("#formNV").validate({
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

                }
            });

        });

    </script>

</div>
</div>
<!-- Column -->
</div>

</div>
<!-- Row -->
<!-- ============================================================== -->
<!-- End PAge Content -->
</div>
<?php
if (isset($_COOKIE['email_da_ton_tai_update'])) {
  ?>
  <script type="text/javascript">
    toastr["warning"]("Địa chỉ email đã tồn tại!", "Cập nhật thông tin khách hàng");
</script>
<?php
}
?>