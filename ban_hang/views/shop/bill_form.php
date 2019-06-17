<div class="cart-table-area section-padding-100">
    <div class="container-fluid">
        <div class="row">

            <div class="col-12 col-lg-8">

                <div class="checkout_details_area mt-50 clearfix">

                    <div class="cart-title">
                        <h2>Thông tin khách hàng</h2>
                    </div>
                    <form action="?mod=shop&act=checkemaildangki" method="post">

                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <input type="text" class="form-control" name="ten_kh" value="" placeholder="Họ Và Tên" required>
                            </div>
                            <div class="col-12 mb-3">
                                <input type="email" class="form-control" name="email" placeholder="Email" value="">
                            </div>
                            <div class="col-12 mb-3">
                                <input type="text" class="form-control" name="dia_chi" placeholder="Địa Chỉ" value="">
                            </div>
                            <div class="col-md-12 mb-3">
                                <input type="text" class="form-control" name="so_dt" placeholder="Số Điện Thoại" value="">
                            </div>
                            <div  class="col-md-4 mb-3"></div>
                            <div class="col-md-8 mb-3 pull-right" style="margin-top: 20px">
                                <button type="submit" class="btn amado-btn w-100">Tạo tài khoản và thanh toán</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-12 col-lg-4">
                <div class="cart-summary">
                    <h5>Cart Total</h5>
                    <ul class="summary-table">
                        <li><span>subtotal:</span> <span><?= number_format($tong_tien).' VNĐ' ?></span></li>
                        <li><span>delivery:</span> <span>Free</span></li>
                        <li><span>total:</span> <span><?= number_format($tong_tien).' VNĐ' ?></span></li>
                    </ul>

                    <div class="payment-method">
                        <!-- Cash on delivery -->
                        <div class="custom-control custom-checkbox mr-sm-2">
                            <input type="checkbox" class="custom-control-input" id="cod" checked>
                            <label class="custom-control-label" for="cod">Cash on Delivery</label>
                        </div>
                        <!-- Paypal -->
                        <div class="custom-control custom-checkbox mr-sm-2">
                            <input type="checkbox" class="custom-control-input" id="paypal">
                            <label class="custom-control-label" for="paypal">Paypal <img class="ml-15" src="public/img/core-img/paypal.png" alt=""></label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-8">
                <div class="checkout_details_area mt-50 clearfix">
                    <div class="cart-title">
                        <h2>Nếu đã có tài khoản</h2>
                    </div>
                    <form action="?mod=shop&act=checkemailtontai" method="POST">
                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <input type="email" class="form-control" name="email" value="" placeholder="Email" required>
                            </div>
                            <div  class="col-md-4 mb-3"></div>
                            <div class="col-md-8 mb-3 pull-right" style="margin-top: 20px">
                                <button type="submit" class="btn amado-btn w-100">Thanh toán</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            
        </div>
    </div>
</div>
</div>
<?php
if (isset($_COOKIE['email_da_ton_tai'])) {
  ?>
  <script type="text/javascript">
    toastr["error"]("Địa chỉ email đã tồn tại!", "Kiểm tra email");
</script>
<?php
}
?>
<?php
if (isset($_COOKIE['email_khong_ton_tai'])) {
  ?>
  <script type="text/javascript">
    toastr["error"]("Không có tài khoản!", "Kiểm tra email");
</script>
<?php
}
?>