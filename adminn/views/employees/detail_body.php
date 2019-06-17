<div class="col-md-5 col-8 align-self-center">
	<h3 class="text-themecolor m-b-0 m-t-0">Quản lí nhân viên</h3>
	<ol class="breadcrumb">
		<li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
		<li class="breadcrumb-item active">Quản lí nhân viên</li>
		<li class="breadcrumb-item active">Xem chi tiết</li>
	</ol>
</div>
<div class="col-md-7 col-4 align-self-center">
	<a href="index.php?mod=employees&act=list" class="btn waves-effect waves-light btn-danger pull-right hidden-sm-down"><i class="mdi mdi-chevron-left"></i><b> Quay lại</b></a>
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
				<h2 class="page-header m-b-0">Chi tiết nhân viên</h2><br>
				<br>
				<div class="pro-img">
					<?php 
					if ($row['img']=='') {
						?>
						<img class="img-circle" src="public/img_nv/empty.jpg" width="250px" alt="user"/>
						<?php
					} else {
						?>
						<img class="img-circle" src="public/img_nv/<?= $row['img'] ?>" width="250px" alt="user"/>
						<?php
					}
					?>

				</div>
				<br><br>
				<h3 class="m-b-0">Tên: <?= $row['ten_nv'] ?></h3><br>
				<?php 
				if ($row['trang_thai']==1) {
					?>
					<p><b>Trạng thái:</b><b style="color: green"> Đang hoạt động</b>
						<?php
					} elseif ($row['trang_thai']==0) {
						?>
						<p><b>Trạng thái:</b> Chưa xác định
							<?php
						} else {
							?>
							<p><b>Trạng thái:</b><b style="color: red"> Vô hiệu hóa</b>
								<?php
							}
							?>
							&nbsp &amp; &nbsp
							<?php 
							if ($row['loai_tk']=='admin') {
								?>
								<b>Loại tài khoản:</b> <b style="color: green">Admin</b></p>
								<?php
							} else {
								?>
								<b>Loại tài khoản:</b> Nhân viên</p>
								<?php
							}
							?>
							<div class="row text-center m-t-20">
								<div class="col-lg-4 col-md-4 m-t-20">
									<h3>Mã nhân viên</h3><br>
									<h4 class="m-b-0 font-light"><?= $row['ma_nv'] ?></h4>
								</div>
								<div class="col-lg-4 col-md-4 m-t-20">
									<h3>Phone</h3><br>
									<h4 class="m-b-0 font-light"><?= $row['so_dt'] ?></h4>
								</div>
								<div class="col-lg-4 col-md-4 m-t-20">
									<h3>Email</h3><br>
									<h4 class="m-b-0 font-light"><?= $row['email'] ?></h4>
								</div>
							</div>
							<br>
						</div>
					</div>
				</div>
			</div>
			<!-- ============================================================== -->
<!-- End PAge Content -->