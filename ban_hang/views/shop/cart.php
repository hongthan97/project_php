
<div class="cart-table-area section-padding-100">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-lg-8">
                <div class="cart-title mt-50">
                    <h2>Giỏ Hàng</h2>
                </div>

                <div class="cart-table clearfix">
                    <table class="table table-responsive">
                        <thead>
                            <tr>
                                <th>Ảnh</th>
                                <th>Tên</th>
                                <th>Giá tiền</th>
                                <th>Số lượng</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $tong_tien = 0;
                            foreach ($cart as $value) {
                                $tong_tien += $value['don_gia']*$value['so_luong_mua'];
                                ?>
                                <tr>
                                    <td class="cart_product_img" align="center">
                                        <div class="quantity">
                                            <a href="?mod=shop&act=remove&ma_sp=<?= $value['ma_sp'] ?>"><i class="fa fa-times fa-2x" title="Hủy sản phẩm" data-toggle="tooltip" style="color: #AA0000"></i></a>
                                        </div> 
                                        <img src="public/img_sp/<?= $value['img'] ?>">
                                    </td>
                                    <td class="cart_product_desc" style="font-size: 30px">
                                        <h5><?= $value['ten_sp'] ?></h5>
                                    </td>
                                    <td class="price">
                                        <span><?= number_format($value['don_gia']) ?></span>
                                    </td>
                                    <td class="qty" align="center">
                                        <div class="qty-btn d-flex">

                                            <p>Qty</p>

                                            <div class="quantity">
                                                <?php 
                                                if ($value['so_luong_mua']>=$value['so_luong']) {
                                                    ?>
                                                    <span class="qty-plus"><i class="fa fa-warning" title="Hết hàng" data-toggle="tooltip" aria-hidden="true"></i></a></span>
                                                    <?php
                                                } else {
                                                    ?>
                                                    <span class="qty-plus"><a href="?mod=shop&act=add2cart&ma_sp=<?= $value['ma_sp'] ?>"><i class="fa fa-plus" title="Mua thêm" data-toggle="tooltip" aria-hidden="true"></i></a></span>
                                                    <?php
                                                }
                                                ?>
                                                <input value="<?= $value['so_luong_mua'] ?>" readonly>
                                                <span class="qty-minus"><a href="?mod=shop&act=reduce&ma_sp=<?= $value['ma_sp'] ?>"><i class="fa fa-minus" title="Giảm đi" data-toggle="tooltip" aria-hidden="true"></i></a></span>
                                                
                                            </div>
                                        </div>

                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
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
                    <div class="cart-btn mt-100">
                        <a href="?mod=shop&act=bill" class="btn amado-btn w-100">Thanh toán</a><br>
                        <br><a href="?mod=shop&act=delete" class="btn amado-btn active w-100">Hủy</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<?php
if (isset($_COOKIE['huy_thanh_cong'])) {
  ?>
  <script type="text/javascript">
    toastr["success"]("Thành công!", "Xóa sản phẩm");
</script>
<?php
}
?>
<?php
if (isset($_COOKIE['mua_them_1'])) {
  ?>
  <script type="text/javascript">
    toastr["success"]("Thành công!", "Mua sản phẩm");
</script>
<?php
}
?>
<?php
if (isset($_COOKIE['giam_di_1'])) {
  ?>
  <script type="text/javascript">
    toastr["warning"]("Thành công!", "Giảm số lượng");
</script>
<?php
}
?>
<?php
if (isset($_COOKIE['add2cart'])) {
  ?>
  <script type="text/javascript">
    toastr["success"]("Thành công!", "Thêm vào giỏ hàng");
</script>
<?php
}
?>