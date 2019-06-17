<div class="col-md-5 col-8 align-self-center">
	<h3 class="text-themecolor">Quản lí bán hàng</h3>
	<ol class="breadcrumb">
		<li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
		<li class="breadcrumb-item active">Quản lí bán hàng</li>
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

				<h2 class="page-header"><i class="mdi mdi-feather"></i> Tạo hóa đơn</h2><br>
				<a href="index.php?mod=customer&act=add" class="pull-left waves-effect waves-dark btn btn-primary btn-md btn-rounded"><i class="mdi mdi-account-plus"></i> Thêm mới</a><br><br><br>
				<div>
					<?php include('datatable_cus.php'); ?>
				</div>
				

				
			</div>
		</div>
	</div>
</div>
<!-- ============================================================== -->
<!-- End PAge Content -->
<?php
if (isset($_COOKIE['gui_thanh_cong'])) {
  ?>
  <script type="text/javascript">
    toastr["success"]("Thành công!", "Gửi đơn hàng tới email");
</script>
<?php
}
?>

<?php
if (isset($_COOKIE['gui_that_bai'])) {
  ?>
  <script type="text/javascript">
    toastr["error"]("Thất bại!", "Gửi đơn hàng tới email");
</script>
<?php
}
?>