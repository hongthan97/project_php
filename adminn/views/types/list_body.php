<?php 
error_reporting(0);
session_start();

?>

<div class="col-md-5 col-8 align-self-center">
  <h3 class="text-themecolor">Quản lí loại sản phẩm</h3>
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
    <li class="breadcrumb-item active">Quản lí loại sản phẩm</li>
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
        <div class="col-md-12 col-5 align-self-center">
          <a href="index.php?mod=types&act=add" class="pull-right waves-effect waves-dark btn btn-primary btn-md btn-rounded"><i class="mdi mdi-cart-outline"></i> Thêm mới</a>
        </div>
        
        <h2 class="page-header"><i class="mdi mdi-bulletin-board"></i> Quản lí loại sản phẩm</h2><br>

        <?php include('datatable.php'); ?>
        
        <?php
        if (isset($_COOKIE['them_thanh_cong'])) {
          ?>
          <script type="text/javascript">
            toastr["success"]("Thêm thành công!", "Thêm Loại sản phẩm mới");
          </script>
          <?php
        }
        ?>
        <?php
        if (isset($_COOKIE['cap_nhat_thanh_cong'])) {
          ?>
          <script type="text/javascript">
            toastr["success"]("Cập nhật thành công!", "Sửa loại sản phẩm");
          </script>
          <?php
        }
        ?>
        <?php
        if (isset($_COOKIE['xoa_thanh_cong'])) {
          ?>
          <script type="text/javascript">
            toastr["success"]("Xóa thành công!", "Xóa loại sản phẩm");
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
