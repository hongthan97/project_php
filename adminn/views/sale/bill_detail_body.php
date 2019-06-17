<div class="col-md-5 col-8 align-self-center">
	<h3 class="text-themecolor m-b-0 m-t-0">Quản lí bán hàng</h3>
	<ol class="breadcrumb">
		<li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
		<li class="breadcrumb-item active">Quản lí bán hàng</li>
		<li class="breadcrumb-item active">Chi tiết hóa đơn</li>
	</ol>
</div>
<div class="col-md-7 col-4 align-self-center">
	<a href="index.php?mod=sale&act=sale" class="btn waves-effect waves-light btn-danger pull-right hidden-sm-down"><i class="mdi mdi-chevron-left"></i><b> Quay lại</b></a>
</div>
</div>

<div class="row">

	<div class="col-lg-12 col-xlg-9 col-md-7">
		<div class="card">
			<div class="card-block">

				<br><div class="form-group">
					
					<center><label class="col-md-12"><h2 class="page-header">CHI TIẾT HÓA ĐƠN</h2></label></center>
				</div>
				<div class="col-md-12">
					<div class="col-md-6 pull-left" align="center" style="margin-bottom: 50px">
						<label class="col-md-6" style="font-size: 20px">Mã hóa đơn:</label><br>
						<div><?= $code ?></div>
						<br><label class="col-md-6" style="font-size: 20px">Ngày bán:</label><br>
						<div><?= $ngay_ban ?></div>
					</div>
					<div class="col-md-6 pull-right" align="center" style="margin-bottom: 50px">
						<label class="col-md-6" style="font-size: 20px">Tên khách hàng:</label><br>
						<div><?= $ten_kh ?></div>
						<br><label class="col-md-6" style="font-size: 20px">Tên nhân viên:</label><br>
						<div><?= $ten_nv ?></div>
					</div>
				</div>
				
				<div class="cart-table clearfix" align="center">
					<table class="table table-condensed" align="center" style="font-size: 18px">
						<thead>
							<tr align="center">
								<td style="font-size: 20px">Tên sản phẩm</td>
								<td style="font-size: 20px">Giá</td>
								<td style="font-size: 20px">Số lượng</td>
								<td style="font-size: 20px">Thành tiền</td>
							</tr>
						</thead>
						<tbody align="center">
							<?php 
							foreach ($chi_tiet as $value){

								?>
								<tr>
									<td class="cart_product_desc">
										<h5><?= $value['ten_sp'] ?></h5>
									</td>
									<td class="price">
										<span><?= number_format($value['gia_ban']) ?></span>
									</td>
									<td class="qty">
										
										<span><?= $value['so_luong'] ?></span>
										
									</td>
									<td>
										<span><?= $value['thanh_tien'] ?></span>
									</td>
								</tr>
							<?php } ?>
							<tr>
								<td colspan="2" align="center"><h3><i class="mdi mdi-coins"></i> Tổng tiền</h3></td>
								<td colspan="2" align="center"><h3 style="color: green"><?= number_format($tong_tien) ?></h3></td>
							</tr>
							<tr style="height: 30px;">
								<td colspan="4"></td>

							</tr>
							<tr align="center">
								<td colspan="2">
									
									<a type="submit" class="btn-success btn-rounded" href="?mod=sale&act=sendmail&ma_kh=<?= $ma_kh ?>"><i class="mdi mdi-email-outline"></i> Gửi đơn hàng tới email</a>
								</td>
								<td colspan="2">
									<a type="button" class="btn btn-md btn-info btn-rounded" href="index.php?mod=sale&act=billprint"><i class="mdi mdi-printer"></i> In hóa đơn</a>
								</td>
							</tr>
						</tbody>
					</table>
				</div>

			</div>
		</div>
	</div>
	<!-- Column -->
</div>