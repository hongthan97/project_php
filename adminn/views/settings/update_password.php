
<button type="button" class="pull-right m-t-10 waves-effect waves-dark btn btn-danger btn-md btn-rounded" data-toggle="modal" href='#modal-ids'><i class="mdi mdi-key"></i>&nbsp Đổi mật khẩu</button>
<div class="modal fade" id="modal-ids">

	<div class="modal-dialog modal-lg">
		<div class="modal-content">

			<div class="modal-header">
				
				<h3 class="modal-title">Cập nhật mật khẩu</h3>
				
			</div>
			
			<div class="modal-body" style="padding-right: 40px; padding-left: 40px">
				<form action="index.php?mod=settings&act=password" method="POST" id="formMKS">
					<br><div class="form-group">
						<label style="color: grey;">Mã nhân viên</label>
						<input type="text" class="form-control form-control-line" id="" name="ma_nv" value="<?= $row['ma_nv'] ?>" readonly>
					</div>
					<div class="form-group">
						<label style="color: grey;">Mật khẩu hiện tại</label>
						<input type="password" class="form-control form-control-line" name="mat_khau" value="<?= $row['mat_khau'] ?>" readonly>
					</div>
					<div class="form-group">
						<label>Nhập mật khẩu cũ</label>
						<input type="password" placeholder="Nhập mật khẩu cũ" class="form-control form-control-line" name="nhap_lai_mat_khau" required>
					</div>
					<div class="form-group">
						<label>Nhập mật khẩu mới</label>
						<input type="password" placeholder="Nhập mật khẩu mới" class="form-control form-control-line" name="new_pass" id="new_pass" required>
					</div>
					<div class="form-group">
						<label>Xác nhận mật khẩu mới</label>
						<input type="password" placeholder="Xác nhận mật khẩu mới" class="form-control form-control-line" name="re_new_pass" required>
					</div>
				</div>
			
			<div class="modal-footer">
				<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
				<button type="submit" class="btn btn-primary" name="update_pass">Cập nhật mật khẩu</button>
			</div>
			</form>
			<script type="text/javascript">
				$(document).ready(function($) {
					
					$("#formMKS").validate({
						rules: {
							nhap_lai_mat_khau: {
								required: true,
								minlength:6,
								maxlength:16
							},
							new_pass: {
								required: true,
								minlength:6,
								maxlength:16
							},
							re_new_pass: {
								required: true,
								minlength:6,
								maxlength:16,
								equalTo: "#new_pass"
							},
						},
						messages: {
							nhap_lai_mat_khau: {
								required: "<br>Vui lòng nhập mật khẩu cũ",
								minlength: "<br>Mật khẩu phải dài hơn 6 kí tự",
								maxlength: "<br>Mật khẩu phải ngắn hơn 16 kí tự",
							},
							new_pass: {
								required: "<br>Vui lòng nhập mật khẩu mới",
								minlength: "<br>Mật khẩu phải dài hơn 6 kí tự",
								maxlength: "<br>Mật khẩu phải ngắn hơn 16 kí tự"
							},
							re_new_pass: {
								required: "<br>Vui lòng xác nhận mật khẩu",
								minlength: "<br>Mật khẩu phải dài hơn 6 kí tự",
								maxlength: "<br>Mật khẩu ngắn hơn 16 kí tự",
								equalTo: "<br>Mật khẩu xác nhận không đúng"
							},
						}
					});

				});

			</script>
			
		</div>
	</div>
</div>
