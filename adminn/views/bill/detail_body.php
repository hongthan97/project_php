<div class="col-md-5 col-8 align-self-center">
	<h3 class="text-themecolor">Quản lí hóa đơn</h3>
	<ol class="breadcrumb">
		<li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
		<li class="breadcrumb-item active">Quản lí hóa đơn</li>
		<li class="breadcrumb-item active">Xem chi tiết</li>
	</ol>                
</div>
<div class="col-md-7 col-4 align-self-center">
    <a href="index.php?mod=bill&act=list" class="btn waves-effect waves-light btn-danger pull-right hidden-sm-down"><i class="mdi mdi-chevron-left"></i><b> Quay lại</b></a>
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
			<div class="card-block" style="margin-left: 50px; margin-right: 50px">
				<div style="width: 100%;" align="center">
					<div style="width: 50%;">
						<h2 class="page-header">Chi tiết hóa đơn</h2>
					</div>

				</div>

				<br><table class="table table-condensed" align="center">
					<tr align="center">
						<td class="header" colspan="2">Mã hóa đơn</td>
						<td colspan="3"><?= $row['ma_hd'] ?></td>
					</tr>
					<tr align="center">
						<td class="header" colspan="2">Mã khách hàng</td>
						<td colspan="3"><?= $row['ma_kh'] ?></td>
					</tr>
					<tr align="center">
						<td class="header" colspan="2">Tên khách hàng</td>
						<td colspan="3"><?= $thong_tin_kh['ten_kh'] ?></td>
					</tr>
					<tr align="center">
						<td class="header" colspan="2">Số điện thoại</td>
						<td colspan="3"><?= $thong_tin_kh['so_dt'] ?></td>
					</tr>
					<?php 
					if ($row['ma_nv']==NULL) {
						?>
						<tr align="center">
							<td class="header" colspan="2">Mua hàng online</td>
							<td colspan="3"><?= $row['ma_nv'] ?></td>
						</tr>
						<?php
					} else {
						?>
						<tr align="center">
							<td class="header" colspan="2">Mã nhân viên</td>
							<td colspan="3"><?= $row['ma_nv'] ?></td>
						</tr>

						<?php
					}
					?>
					
					<tr align="center">
						<td class="header" colspan="2">Ngày bán</td>
						<td colspan="3"><?= $row['ngay_ban'] ?></td>
					</tr>
					<tr align="center">
						<td class="header" colspan="2">Tổng tiền</td>
						<td colspan="3"><?= number_format($row['tong_tien']) ?></td>
					</tr>
					<tr align="center">
						<td colspan="5" align="center"><h2>Chi tiết sản phẩm</h2></td>
					</tr>
					<tr align="center" style="font-weight: bold;">
						<td>Mã sản phẩm</td>
						<td>Tên sản phẩm</td>
						<td>Số lượng</td>
						<td>Giá bán</td>
						<td>Thành tiền</td>
					</tr>
					<?php 
					foreach ($detail as $value) {
						?>
						<tr align="center">
							<td><?= $value['ma_sp'] ?></td>
							<td><?= $value['ten_sp'] ?></td>
							<td><?= $value['so_luong'] ?></td>
							<td><?= number_format($value['gia_ban']) ?></td>
							<td><?= number_format($value['thanh_tien']) ?></td>
						</tr>
						<?php
					}
					?>
					
				</table>

			</div>
		</div>
	</div>
</div>
<!-- ============================================================== -->
<!-- End PAge Content -->