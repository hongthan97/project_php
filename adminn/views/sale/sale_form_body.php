<div class="col-md-5 col-8 align-self-center">
    <h3 class="text-themecolor m-b-0 m-t-0">Quản lí bán hàng</h3>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
        <li class="breadcrumb-item active">Quản lí bán hàng</li>
        <li class="breadcrumb-item active">Bán hàng</li>
    </ol>
</div>
<div class="col-md-7 col-4 align-self-center">
    <a href="index.php?mod=sale&act=createbill" class="btn waves-effect waves-light btn-danger pull-right hidden-sm-down"><i class="mdi mdi-chevron-left"></i><b> Quay lại</b></a>
</div>
</div>

<!-- Start Page Content -->
<!-- ============================================================== -->
<!-- Row -->
<form action="" method="POST" class="form-horizontal form-material"  enctype="multipart/form-data" id="formKH">
    <div class="row">
        <!-- Column -->
        <div class="col-lg-5 col-xlg-2 col-md-2">

            <div class="card">
                <div class="card-block">
                    <center class="m-t-20"><label class="form-horizontal form-material" style=" font-size: 20px;"><i class="mdi mdi-cart-outline"></i> Giỏ hàng</label></center><br>
                    <center>
                        <div class="cart-table clearfix">
                            <table class="table table-responsive table-condensed">
                                <thead>

                                    
                                    <tr align="center">
                                        <th>Tên sản phẩm</th>
                                        <th>Giá (VNĐ)</th>
                                        <th>Số lượng</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $tong_tien = 0; 
                                    foreach ($cart as $value){
                                        $tong_tien += $value['so_luong_mua']*$value['don_gia'];
                                        ?>
                                        <tr>
                                            <td class="cart_product_desc" align="left">
                                                <h5><a href="?mod=sale&act=remove&ma_sp=<?= $value["ma_sp"] ?>"><i class="mdi mdi-close" title="Xóa khỏi giỏ hàng" data-toggle="tooltip" style="color: red;"></i></a> <?= $value['ten_sp'] ?></h5>
                                            </td>
                                            <td class="price" align="right">
                                                <span><?= number_format($value['don_gia']) ?></span>
                                            </td>
                                            <td class="qty">
                                                <div class="qty-btn d-flex" align="center">
                                                   <?php
                                                   if ($value['so_luong_mua']>=$value['so_luong']) {
                                                    ?>
                                                    <div class="qty-plus" style="float: left; margin-left: 10px; margin-right: 15px"><i class="fa fa-warning" title="Hết hàng" data-toggle="tooltip" style="color: orange;"></i></div>
                                                    <?php
                                                } else {
                                                    ?>
                                                    <div class="qty-plus" style="float: left; margin-left: 10px; margin-right: 15px"><a href="?mod=sale&act=add2cart&ma_sp=<?= $value["ma_sp"] ?>"><i class="fa fa-plus" title="Mua thêm 1" data-toggle="tooltip" aria-hidden="true"></i></a></div>
                                                    <?php
                                                }
                                                ?>
                                                
                                                <div style="margin-right: 15px;"><p><?= $value['so_luong_mua'] ?></p></div>

                                                <?php
                                                if ($value['so_luong_mua']<=1) {
                                                    ?>
                                                    <p> </p>
                                                    <?php
                                                } else{
                                                    ?>
                                                    <div class="qty-minus" style="margin-right:15px;"><a href="?mod=sale&act=reduce&ma_sp=<?= $value["ma_sp"] ?>"><i class="fa fa-minus" title="Giảm đi 1" data-toggle="tooltip" style="color: orange;" aria-hidden="true"></i></a></div>
                                                    <?php
                                                }
                                                ?>
                                                

                                            </div>
                                        </td>
                                    </tr>
                                <?php } ?>
                                <tr>
                                    <td><h3><i class="mdi mdi-coins"></i> Tổng tiền</h3></td>
                                    <td colspan="2" align="center"><h3 style="color: green"><?= number_format($tong_tien) ?></h3></td>
                                </tr>
                                <tr align="center" height="100px" style="line-height: 100px">
                                    <td colspan="3">
                                        <a class="btn-success btn-rounded" href="?mod=sale&act=payment"><i class="mdi mdi-cash-multiple"></i> Thanh toán</a>&nbsp;&nbsp;&nbsp;

                                        <a class="btn-danger btn-rounded" href="?mod=sale&act=deletepayment"><i class="fa fa-trash"></i> Hủy đơn hàng</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </center>
            </div>
        </div>
    </div>
    <!-- Column -->

    <div class="col-lg-7 col-xlg-10 col-md-10">
        <div class="card">
            <div class="card-block">
                <center class="m-t-20"><label class="form-horizontal form-material" style="font-weight: bold; font-size: 20px;"><i class="mdi mdi-note-text"></i> Danh sách sản phẩm</label></center><br>
                <?php include_once('datatable_prod.php') ?>
            </div>
        </div>
    </div>

    <!-- Column -->
</div>
</form>
<!-- Row -->
<!-- ============================================================== -->
<!-- End PAge Content -->
</div>

<?php
if (isset($_COOKIE['mua_moi'])) {
  ?>
  <script type="text/javascript">
    toastr["success"]("Thành công!", "Thêm mới vào giỏ hàng");
</script>
<?php
}
?>
<?php
if (isset($_COOKIE['mua_them_1'])) {
  ?>
  <script type="text/javascript">
    toastr["success"]("Thành công!", "Mua thêm sản phẩm");
</script>
<?php
}
?>
<?php
if (isset($_COOKIE['giam_di_1'])) {
  ?>
  <script type="text/javascript">
    toastr["warning"]("Thành công!", "Giảm số lượng sản phẩm");
</script>
<?php
}
?>
<?php
if (isset($_COOKIE['loai_bo'])) {
  ?>
  <script type="text/javascript">
    toastr["warning"]("Thành công!", "Xóa khỏi giỏ hàng");
</script>
<?php
}
?>
<?php
if (isset($_COOKIE['het_hang'])) {
  ?>
  <script type="text/javascript">
    toastr["warning"]("Thành công!", "Sản phẩm này trong kho đã hết hàng");
</script>
<?php
}
?>
<?php
if (isset($_COOKIE['huy_don_hang'])) {
  ?>
  <script type="text/javascript">
    toastr["success"]("Thành công!", "Hủy đơn hàng thành công");
</script>
<?php
}
?>
