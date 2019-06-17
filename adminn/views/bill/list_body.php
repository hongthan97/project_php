<?php 
error_reporting(0);
session_start();

?>

<div class="col-md-5 col-8 align-self-center">
  <h3 class="text-themecolor">Quản lí hóa đơn</h3>
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
    <li class="breadcrumb-item active">Quản lí hóa đơn</li>
  </ol>                
</div>
</div>
<!-- ============================================================== -->
<!-- End Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<!-- ============================================================== -->

<!-- Start Page Content -->
<!-- ============================================================== -->
<div class="row">
  <!-- column -->
  <div class="col-lg-12">
    <div class="card">
      <div class="card-block">
        <h2 class="page-header"><i class="mdi mdi-bulletin-board"></i> Quản lí hóa đơn</h2><br>

        <?php include('datatable.php'); ?>
        
        <?php
        if (isset($_COOKIE['them_thanh_cong'])) {
          ?>
          <script type="text/javascript">
            toastr["success"]("Thêm thành công!", "Thêm sản phẩm mới");
          </script>
          <?php
        }
        ?>
        <?php
        if (isset($_COOKIE['cap_nhat_thanh_cong'])) {
          ?>
          <script type="text/javascript">
            toastr["success"]("Cập nhật thành công!", "Sửa sản phẩm");
          </script>
          <?php
        }
        ?>
        <?php
        if (isset($_COOKIE['xoa_thanh_cong'])) {
          ?>
          <script type="text/javascript">
            toastr["success"]("Xóa thành công!", "Xóa sản phẩm");
          </script>
          <?php
        }
        ?>
        <?php
        if (isset($_COOKIE['xu_li_thanh_cong'])) {
          ?>
          <script type="text/javascript">
            toastr["success"]("Thành công!", "Xử lí hóa đơn");
          </script>
          <?php
        }
        ?>
        <?php
        if (isset($_COOKIE['huy_hoa_don'])) {
          ?>
          <script type="text/javascript">
            toastr["warning"]("Hủy hóa đơn thành công!", "Xử lí hóa đơn");
          </script>
          <?php
        }
        ?>
      </div>
    </div>
  </div>
</div>
<!-- ============================================================== -->
<!-- End PAge Content -->
