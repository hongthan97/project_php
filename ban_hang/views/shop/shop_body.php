<?php 
include_once('shop_menu.php')
?>

<div class="amado_product_area section-padding-100">
    <div class="container-fluid">

        <?php include_once('loc_gia.php') ?>

        <div class="row">
            <?php 
            foreach ($result as $value) {

               ?>
               <!-- Single Product Area -->
               <div class="col-12 col-sm-6 col-md-12 col-xl-6">
                <div class="single-product-wrapper">
                    <!-- Product Image -->
                    <div class="product-img">
                        <img src="public/img_sp/<?= $value['img'] ?>" alt="" style="height: 250px;">
                        <!-- Hover Thumb -->
                        <img class="hover-img" src="public/img_sp/<?= $value['img'] ?>" alt="">
                    </div>

                    <!-- Product Description -->
                    <div class="product-description d-flex align-items-center justify-content-between">
                        <!-- Product Meta Data -->
                        <div class="product-meta-data">
                            <div class="line"></div>
                            <p class="product-price"><?= number_format($value['don_gia']).' VNĐ' ?></p>
                            <a href="?mod=shop&act=detail&ma_sp=<?= $value['ma_sp'] ?>">
                                <h6 title="Xem chi tiết" data-toggle="tooltip" data-placement="left"><?= $value['ten_sp'] ?></h6>
                            </a>
                        </div>
                        <!-- Ratings & Cart -->
                        <div class="ratings-cart text-right">
                            <div class="ratings">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                            </div>
                            <div class="cart">
                                <a href="?mod=shop&act=add2cart&ma_sp=<?= $value['ma_sp'] ?>" data-toggle="tooltip" data-placement="left" title="Add to Cart"><img src="public/img/core-img/cart.png" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        <?php } ?>

        
    </div>
    <div class="row">
        <div class="col-12">
            <!-- Pagination -->
            <nav aria-label="navigation">
                <ul class="pagination justify-content-end mt-50">
                    <li class="page-item active"><a class="page-link" href="#">01.</a></li>
                    <li class="page-item"><a class="page-link" href="#">02.</a></li>
                    <li class="page-item"><a class="page-link" href="#">03.</a></li>
                    <li class="page-item"><a class="page-link" href="#">04.</a></li>
                </ul>
            </nav>
        </div>
    </div>
</div>
</div>
</div>
<!-- ##### Main Content Wrapper End ##### -->

<?php
if (isset($_COOKIE['het_hang'])) {
  ?>
  <script type="text/javascript">
    toastr["warning"]("Sản phẩm trong kho đã hết");
</script>
<?php
}
?>
