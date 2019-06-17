<div class="col-md-5 col-8 align-self-center">
	<h3 class="text-themecolor m-b-0 m-t-0">Quản lí sản phẩm</h3>
	<ol class="breadcrumb">
		<li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
		<li class="breadcrumb-item active">Quản lí sản phẩm</li>
		<li class="breadcrumb-item active">Xem chi tiết</li>
	</ol>
</div>
<div class="col-md-7 col-4 align-self-center">
	<a href="index.php?mod=products&act=list" class="btn waves-effect waves-light btn-danger pull-right hidden-sm-down"><i class="mdi mdi-chevron-left"></i><b> Quay lại</b></a>
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
				<h2 class="page-header m-b-0">Chi tiết sản phẩm</h2><br>
				<br><div class="pro-img">
					<?php 
					if ($row['img']=='') {
						?>
						<img class="img-circle" src="public/img_sp/empty.jpg" width="250px" alt="user"/>
						<?php
					} else {
						?>
						<img class="img-circle" src="public/img_sp/<?= $row['img'] ?>" width="250px" alt="user"/>
						<?php
					}
					?>

				</div>
				<br><br>
				<h3 class="m-b-0">Tên: <?= $row['ten_sp'] ?></h3><br>
				<b><h4>Kiểu dáng: <?= $row['kieu_dang'] ?>
				&nbsp &amp; &nbsp
				Chủ đề: <?= $row['chu_de'] ?></h4>
				<div class="row text-center m-t-20">
					<div class="col-lg-3 col-md-3 m-t-20">
						<h3>Mã sản phẩm</h3><br>
						<h4 class="m-b-0 font-light"><?= $row['ma_sp'] ?></h4>
					</div>
					<div class="col-lg-3 col-md-3 m-t-20">
						<h3>Số lượng</h3><br>
						<h4 class="m-b-0 font-light"><?= $row['so_luong'] ?></h4>
					</div>
					<div class="col-lg-3 col-md-3 m-t-20">
						<h3>Giá nhập</h3><br>
						<h4 class="m-b-0 font-light"><?= number_format($row['gia_nhap']).' VNĐ' ?></h4>
					</div>
					<div class="col-lg-3 col-md-3 m-t-20">
						<h3>Giá bán</h3><br>
						<h4 class="m-b-0 font-light"><?= number_format($row['don_gia']).' VNĐ' ?></h4>
					</div>
				</div>
				<br>
			</div>
		</div>
	</div>
</div>
<!-- ============================================================== -->
<!-- End PAge Content -->
