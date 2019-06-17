<?php 
  error_reporting(0);
  session_start(); 
?>
<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  
</head>
<body class="fix-header fix-sidebar card-no-border">
  <div id="main-wrapper">

    <div class="row" style="width: 100%">

      <div class="col-lg-12 col-xlg-9 col-md-7" align="center">

        <br><div class="form-group">

          <center><label class="col-md-12"><h2 class="page-header">CHI TIẾT HÓA ĐƠN</h2></label></center>
        </div>
        <div class="col-md-12">
          <div style="float: left; margin-left: 20px; margin-right: 20px; margin-bottom: 40px; margin-top: 20px">
            <label class="col-md-12" style="font-size: 20px">Tên khách hàng:</label><br>
            <div><?= $_SESSION['chi_tiet_hoa_don']['ten_kh'] ?></div>
          </div>
          <div style="float: left; margin-left: 20px; margin-right: 20px; margin-bottom: 40px; margin-top:20px">
            <label class="col-md-12" style="font-size: 20px">Mã hóa đơn:</label><br>
            <div><?= $_SESSION['chi_tiet_hoa_don']['ma_hd'] ?></div>
          </div>
          <div style="float: left; margin-left: 20px; margin-right: 20px; margin-bottom: 40px; margin-top:20px">
            <label class="col-md-12" style="font-size: 20px">Ngày bán:</label><br>
            <div><?= $_SESSION['chi_tiet_hoa_don']['ngay_ban'] ?></div>
          </div>
          <div style="float: left; margin-left: 20px; margin-right: 20px; margin-bottom: 40px; margin-top:20px">
            <label class="col-md-12" style="font-size: 20px">Mã khách hàng:</label><br>
            <div><?= $_SESSION['chi_tiet_hoa_don']['ma_kh'] ?></div>
          </div>
          <div style="float: left; margin-left: 20px; margin-right: 20px; margin-bottom: 40px; margin-top:20px">
           <label class="col-md-12" style="font-size: 20px">Mã nhân viên:</label><br>
           <div><?= $_SESSION['chi_tiet_hoa_don']['ma_nv'] ?></div>
         </div>
       </div>

       <br><div class="cart-table clearfix" align="center">
        <table class="table table-condensed" align="center">
          <thead>
            <tr align="center" style="font-size: 18px">
              <td style="font-weight: bold;" width="150px">Tên sản phẩm</td>
              <td style="font-weight: bold;" width="150px">Giá</td>
              <td style="font-weight: bold;" width="150px">Số lượng</td>
              <td style="font-weight: bold;" width="150px">Thành tiền</td>
            </tr>
          </thead>
          <tbody align="center">
            <?php 
            foreach ($_SESSION['chi_tiet_san_pham'] as $value){

              ?>
              <tr style="font-size: 18px">
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
              <td colspan="2" align="center"><h2><i class="mdi mdi-coins"></i> Tổng tiền</h2></td>
              <td colspan="2" align="center"><h2 style="color: green"><?= number_format($_SESSION['chi_tiet_hoa_don']['tong_tien']) ?></h2></td>
            </tr>
          </tbody>
        </table>
      </div>


    </div>
  </div><br>
  <!-- Column -->
  <div align="center">
    <footer class="footer" style="align-content: center;">
    © 2018 ANH QUÂN PHP 15
  </footer>
  </div>
  
 
</body>

</html>