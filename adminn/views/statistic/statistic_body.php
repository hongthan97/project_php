
<div class="col-md-5 col-8 align-self-center">
    <h3 class="text-themecolor">Thống kê</h3>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
        <li class="breadcrumb-item active">Thống kê</li>
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
  <div class="col-lg-12">
    <div class="card card-info card-inverse">
        <div class="card-block" align="center">
            <h3 class="text-white"><i class="ti ti-stats-up"></i>&nbsp&nbsp Lãi tháng này <?= number_format($lai_thang['lai']).' VNĐ' ?></h3>
        </div>
    </div>
</div>  
<div class="col-lg-4">
    <div class="card card-success card-inverse" style="height: 400px;">
        <div class="card-block pull-left" align="center">
            <h4 class="card-title"><i class="ti ti-cup "></i>&nbsp&nbsp Sản phẩm bán chạy nhất</h4>
            <h3 class="card-title">Mã sản phẩm: <?= $san_pham_ban_chay['ma_sp'] ?></h3>
            <br>
            <img src="public/img_sp/<?= $san_pham_ban_chay['img'] ?>" class="img-circle" width="150px"><br>
            <br><h3 class="card-title">Tên sản phẩm: <?= $san_pham_ban_chay['ten_sp'] ?></h3>
        </div>
    </div>
</div>
<div class="col-lg-4">
    <div class="card card-dark card-inverse" style="height: 400px;">
        <div class="card-block pull-left" align="center">
            <h4 class="card-title"><i class="ti ti-crown"></i>&nbsp&nbsp Nhân viên xuất sắc</h4>
            <h3 class="card-title">Mã nhân viên: <?= $best_seller['ma_nv'] ?></h3>
            <br><img src="public/img_nv/<?= $best_seller['img'] ?>" class="img-circle" width="150px"><br>
            <br><h3 class="card-title">Tên nhân viên: <?= $best_seller['ten_nv'] ?></h3>
        </div>
    </div>
</div>
<div class="col-lg-4">
    <div class="card card-primary card-inverse" style="height: 400px;">
        <div class="card-block pull-left" align="center">
            <h4 class="card-title"><i class="ti ti-heart"></i>&nbsp Khách hàng mua nhiều nhất</h4>
            <h3 class="card-title">Mã khách hàng: <?= $best_customer['ma_kh'] ?></h3><br><br>
            <i class="fa fa-user-o fa-4x"></i><br>
            <br><br><h3 class="card-title">Tên khách hàng:<br> <?= $best_customer['ten_kh'] ?></h3>
        </div>
    </div>
</div>

<div class="col-lg-12">
    <div class="card">
      <div class="card-block">

        <h2 class="page-header"><i class="ti ti-pie-chart"></i>&nbsp Thống kê thu chi</h2><br>

        <?php include('datatable_thu_chi.php'); ?>
    </div>
</div>
</div>
<div class="col-lg-12">
    <div class="card">
      <div class="card-block">

        <h2 class="page-header"><i class="mdi mdi-chart-timeline"></i> Thống kê nhân viên</h2><br>

        <?php include('datatable_nhan_vien.php'); ?>

    </div>
</div>
</div>
<div class="col-lg-6">
    <div class="card">
      <div class="card-block">

        <h2 class="page-header"><i class="mdi mdi-chart-areaspline"></i> Thống kê tiền lãi theo tháng</h2><br>

        <?php include('datatable_tien_lai.php'); ?>
    </div>
</div>
</div>
<div class="col-lg-6">
    <div class="card">
      <div class="card-block">

        <h2 class="page-header"><i class="mdi mdi-chart-histogram"></i> Thống kê hóa đơn theo tháng</h2><br>

        <?php include('datatable_hoa_don_theo_thang.php'); ?>
    </div>
</div>
</div>
<div class="col-lg-6">
    <div class="card">
      <div class="card-block">

        <h2 class="page-header"><i class="mdi mdi-chart-bubble"></i> Thống kê khách hàng</h2><br>

        <?php include('datatable_khach_hang.php'); ?>
        
    </div>
</div>
</div>

<div class="col-lg-6">
    <div class="card">
      <div class="card-block">

        <h2 class="page-header"><i class="mdi mdi-chart-arc"></i>&nbsp Thống kê lãi của nhân viên</h2><br>

        <?php include('datatable_lai_nhan_vien.php'); ?>

    </div>
</div>
</div>
<div class="col-lg-12">
    <div class="card">
      <div class="card-block">

        <h2 class="page-header"><i class="mdi mdi-chart-line"></i> Thống kê sản phẩm</h2><br>

        <?php include('datatable_san_pham.php'); ?>

    </div>
</div>
</div>
</div>