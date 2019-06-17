 
<div class="col-md-5 col-8 align-self-center">
    <h3 class="text-themecolor m-b-0 m-t-0">Quản lí khách hàng</h3>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
        <li class="breadcrumb-item active">Quản lí khách hàng</li>
        <li class="breadcrumb-item active">Cập nhật thông tin</li>
    </ol>
</div>
<div class="col-md-7 col-4 align-self-center">
    <a href="index.php?mod=customer&act=list" class="btn waves-effect waves-light btn-danger pull-right hidden-sm-down"><i class="mdi mdi-chevron-left"></i><b> Quay lại</b></a>
</div>
</div>


<!-- Start Page Content -->
<!-- ============================================================== -->
<!-- Row -->
<form action="index.php?mod=customer&act=update" class="form-horizontal form-material" method="POST" id="formKH">
    <div class="row">
    <!-- Column -->
    <div class="col-lg-8 col-xlg-9 col-md-7" style="margin-left: 15vmax">
        <div class="card">
            <div class="card-block">

                <div class="form-group">
                    <label class="col-md-12"><h2 class="page-header"><i class="mdi mdi-package-up"></i> Cập nhật thông tin khách hàng</h2></label>
                </div>
                <div class="form-group">
                    <label class="col-md-12">Mã khách hàng</label>
                    <div class="col-md-12">
                        <input type="text" class="form-control form-control-line" value="<?= $row['ma_kh'] ?>" name="ma_kh" readonly>
                    </div>
                </div><br>
               
                <div class="form-group">
                    <label class="col-md-12">Tên khách hàng</label>
                    <div class="col-md-12">
                        <input type="text" placeholder="Nhập tên khách hàng" class="form-control form-control-line" value="<?= $row['ten_kh'] ?>" name="ten_kh" required>
                    </div>
                </div><br>
                <div class="form-group">
                    <label class="col-md-12">Số điện thoại</label>
                    <div class="col-md-12">
                        <input type="number" placeholder="Nhập số điện thoại" class="form-control form-control-line" value="<?= $row['so_dt'] ?>" name="so_dt" required>
                    </div>
                </div><br>
                <div class="form-group">
                    <label class="col-md-12">Email</label>
                    <div class="col-md-12">
                        <input type="email" placeholder="Nhập email" class="form-control form-control-line" value="<?= $row['email'] ?>" name="email">
                    </div>
                </div><br>
                <div class="form-group">
                    <label class="col-md-12">Địa chỉ</label>
                    <div class="col-md-12">
                        <input type="text" placeholder="Nhập email" class="form-control form-control-line" value="<?= $row['dia_chi'] ?>" name="dia_chi">
                    </div>
                </div><br>
                <div class="form-group" align="center">
                    <div class="col-sm-12">
                        <button type="submit" class="m-t-10 waves-effect waves-dark btn btn-success btn-md btn-rounded"><i class="mdi mdi-apple-keyboard-shift"></i> Cập nhật thông tin</button>
                    </div><br>
                </div>
                
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

<script type="text/javascript">
    $(document).ready(function($) {
        $("#formKH").validate({
            rules: {
                ten_kh: "required",
                email : true,
                so_dt: {
                    required: true,
                    number: true,
                    minlength:10,
                    maxlength:11
                },

            },
            messages: {
                ten_kh: "<br>Vui lòng nhập họ và tên",
                email: "<br>Vui lòng nhập đúng định dạng email",
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
<?php
if (isset($_COOKIE['email_da_ton_tai_update'])) {
  ?>
  <script type="text/javascript">
    toastr["warning"]("Địa chỉ email đã tồn tại!", "Cập nhật thông tin khách hàng");
</script>
<?php
}
?>