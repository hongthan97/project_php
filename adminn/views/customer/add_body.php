 <div class="col-md-5 col-8 align-self-center">
  <h3 class="text-themecolor">Quản lí sản phẩm</h3>
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
    <li class="breadcrumb-item active">Quản lí sản phẩm</li>
    <li class="breadcrumb-item active">Thêm khách hàng</li>
</ol>                
</div>
<div class="col-md-7 col-4 align-self-center">
    <a href="index.php?mod=customer&act=list" class="btn waves-effect waves-light btn-danger pull-right hidden-sm-down"><i class="mdi mdi-chevron-left"></i><b> Quay lại</b></a>
</div>
</div>

<!-- Start Page Content -->
<!-- ============================================================== -->
<!-- Row -->
<form action="index.php?mod=customer&act=store" class="form-horizontal form-material" method="POST" id="formKH">
 <div class="row">

    <!-- Column -->
    <div class="col-lg-7 col-xlg-10 col-md-10" style="margin-left: 18vmax">
        <div class="card">
            <div class="card-block">
                <form class="form-horizontal form-material">
                    <div class="form-group">
                        <label class="col-md-12"><h2 class="page-header"><i class="mdi mdi-plus-circle-outline"></i> THÊM KHÁCH HÀNG MỚI</h2></label>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12">Tên khách hàng</label>
                        <div class="col-md-12">
                            <input type="text" placeholder="Nhập tên khách hàng" class="form-control form-control-line" name="ten_kh" required>
                        </div>
                    </div><br>
                    <div class="form-group">
                        <label class="col-md-12">Số điện thoại</label>
                        <div class="col-md-12">
                            <input type="number" placeholder="Nhập số điện thoại" class="form-control form-control-line" name="so_dt" required>
                        </div>
                    </div><br>
                    <div class="form-group">
                        <label class="col-md-12">Email</label>
                        <div class="col-md-12">
                            <input type="email" placeholder="Nhập email" class="form-control form-control-line" name="email">
                        </div>
                    </div><br>
                    <div class="form-group">
                        <label class="col-md-12">Địa chỉ</label>
                        <div class="col-md-12">
                            <input type="text" placeholder="Nhập địa chỉ" class="form-control form-control-line" name="dia_chi">
                        </div>
                    </div><br>
                    <br><div class="form-group" align="center">
                        <div class="col-sm-12">
                            <button type="submit" class="m-t-10 waves-effect waves-dark btn btn-info btn-md btn-rounded">Thêm khách hàng mới</button>
                        </div><br>
                    </div>
                </form>
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
if (isset($_COOKIE['email_da_ton_tai_store'])) {
  ?>
  <script type="text/javascript">
    toastr["warning"]("Địa chỉ email đã tồn tại!", "Thêm khách hàng mới");
</script>
<?php
}
?>