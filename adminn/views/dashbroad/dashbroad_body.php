<?php
if (isset($_COOKIE['dang_nhap_thanh_cong'])) {
  ?>
  <script type="text/javascript">
    toastr["success"]("Thành công!", "Đăng nhập tài khoản");
</script>
<?php
}
?>
<div class="col-md-5 col-8 align-self-center">
    <h3 class="text-themecolor">Bảng điều khiển</h3>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
        <li class="breadcrumb-item active">Bảng điều khiển</li>
    </ol>
</div>
</div>
<!-- ============================================================== -->
<!-- End Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Start Page Content -->
<!-- ============================================================== -->
<!-- Row -->
<div class="row">
  <!-- column -->
  
  <div class="col-lg-3">
    <div class="card card-success card-inverse" style="height: 170px;">
        <a href="index.php?mod=bill&act=list">
            <div class="card-block" align="center">
                <h3 class="card-title"> Số hóa đơn</h3><br>
                <h2 class="font-light text-white"><i class="ti ti-files "></i>&nbsp&nbsp <?= $tong_so_hd['tong_so_hd'] ?></h2>
            </div>
        </a>
    </div>
</div>
<div class="col-lg-3">
    <div class="card card-primary card-inverse" style="height: 170px;">
        <a href="index.php?mod=bill&act=list">
            <div class="card-block" align="center">
                <h3 class="card-title"> Hóa đơn chưa xử lí</h3>
                <h2 class="font-light text-white"><i class="ti ti-pencil-alt "></i>&nbsp&nbsp <?= $hoa_don_chua_xu_li['chua_xu_li'] ?></h2>
            </div>
        </a>
    </div>
</div>
<div class="col-lg-3">
    <div class="card card-info card-inverse" style="height: 170px;">
        <a href="index.php?mod=employees&act=list">
            <div class="card-block" align="center">
                <h3 class="card-title">Nhân viên</h3><br>
                <h2 class="font-light text-white"><i class="ti ti-user"></i>&nbsp&nbsp <?= $so_nhan_vien['so_nhan_vien'] ?></h2>
            </div>
        </a>
    </div> 
</div>
<div class="col-lg-3">
    <div class="card card-megna card-inverse" style="height: 170px;">
        <a href="index.php?mod=products&act=list">
            <div class="card-block" align="center">
                <h3 class="card-title"> Số sản phẩm</h3><br>
                <h2 class="font-light text-white"><i class="ti ti-shopping-cart-full"></i>&nbsp&nbsp <?= $so_san_pham['so_san_pham'] ?></h2>
            </div>
        </a>
    </div>    
</div>
<div class="col-lg-6 col-md-5">
    <div class="card">
        <div class="card-block">
            <h3 class="card-title">Our Visitors </h3>
            <h6 class="card-subtitle">Different Devices Used to Visit</h6>
            <div id="visitor" style="height:290px; width:100%;"></div>
        </div>
        <div>
            <hr class="m-t-0 m-b-0">
        </div>
        <div class="card-block text-center ">
            <ul class="list-inline m-b-0">
                <li>
                    <h6 class="text-muted text-info"><i class="fa fa-circle font-10 m-r-10 "></i>Mobile</h6> </li>
                    <li>
                        <h6 class="text-muted  text-primary"><i class="fa fa-circle font-10 m-r-10"></i>Desktop</h6> </li>
                        <li>
                            <h6 class="text-muted  text-success"><i class="fa fa-circle font-10 m-r-10"></i>Tablet</h6> </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="card col-lg-6">
                <div class="card-block bg-info">
                    <h4 class="text-white card-title">Hoạt động</h4>
                    <h6 class="card-subtitle text-white m-b-0 op-3">Nhân viên hoạt động gần đây</h6>
                </div>
                <div class="card-block">
                    <div class="message-box contact-box">
                        <div class="message-widget contact-widget">
                            <!-- Message -->
                            <?php foreach ($lien_he as $value): ?>


                                <a href="#">
                                    <div class="user-img">
                                        <?php 
                                        if ($value['img']=='') {
                                            ?>
                                            <img src="public/img_nv/empty.jpg" alt="user" class="img-circle"> <span class="profile-status online pull-right"></span>
                                            <?php
                                        } else {
                                            ?>
                                            <img src="public/img_nv/<?= $value['img'] ?>" alt="user" class="img-circle"> <span class="profile-status online pull-right"></span> 
                                            <?php
                                        }
                                        ?>
                                        
                                    </div>
                                    <div class="mail-contnet">
                                        <h5><?= $value['ten_nv'] ?></h5> <span class="mail-desc"><?= $value['email'] ?></span></div>
                                    </a>
                                    <!-- Message -->
                                <?php endforeach ?>
                            </div>
                        </div>
                    </div>
                </div>

            </div>