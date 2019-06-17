<div class="col-md-5 col-8 align-self-center">
	<h3 class="text-themecolor">Quản lí khách hàng</h3>
	<ol class="breadcrumb">
		<li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
		<li class="breadcrumb-item active">Quản lí khách hàng</li>
		<li class="breadcrumb-item active">Xem chi tiết</li>
	</ol>                
</div>
<div class="col-md-7 col-4 align-self-center">
	<a href="index.php?mod=customer&act=list" class="btn waves-effect waves-light btn-danger pull-right hidden-sm-down"><i class="mdi mdi-chevron-left"></i><b> Quay lại</b></a>
</div>
</div>
<style type="text/css">
.header{
	font-weight: bold;
}
</style>
<div class="row">
	<!-- column -->
	<div class="col-lg-12">
		<div class="card">
			<div class="card-block text-center">
				<br>
				<h2 class="page-header m-b-0">Chi tiết khách hàng</h2><br>

				<br>
				<h3 class="m-b-0">Tên: <?= $row['ten_kh'] ?></h3><br>
				
				<div class="row text-center m-t-20">
					<div class="col-lg-3 col-md-3 m-t-20">
						<h3>Mã khách hàng</h3><br>
						<h4 class="m-b-0 font-light"><?= $row['ma_kh'] ?></h4>
					</div>
					<div class="col-lg-3 col-md-3 m-t-20">
						<h3>Phone</h3><br>
						<h4 class="m-b-0 font-light"><?= $row['so_dt'] ?></h4>
					</div>
					<div class="col-lg-3 col-md-3 m-t-20">
						<h3>Email</h3><br>
						<h4 class="m-b-0 font-light"><?= $row['email'] ?></h4>
					</div>
					<div class="col-lg-3 col-md-3 m-t-20">
						<h3>Địa chỉ</h3><br>
						<h4 class="m-b-0 font-light"><?= $row['dia_chi'] ?></h4>
					</div>
				</div>
				<br>
			</div>
		</div>
	</div>
</div>
