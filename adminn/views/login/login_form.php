<!DOCTYPE html>
<html lang="en">
<head>
  <title>FLOWER PROJECT</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--===============================================================================================--> 
  <script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script> 
  <link rel="icon" type="public/image/png" href="public/images/icons/favicon.ico"/>
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="public/vendor/bootstrap/css/bootstrap.min.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="public/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="public/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="public/vendor/animate/animate.css">
  <!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="public/vendor/css-hamburgers/hamburgers.min.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="public/vendor/animsition/css/animsition.min.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="public/vendor/select2/select2.min.css">
  <!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="public/vendor/daterangepicker/daterangepicker.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="public/css/util.css">
  <link rel="stylesheet" type="text/css" href="public/css/main.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" rel="stylesheet"/>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
  <script src='https://www.google.com/recaptcha/api.js'></script>
  <!--===============================================================================================-->
</head>
<body>
  <div class="limiter">
    <div class="container-login100" style="background-image: url('public/images/bg-02.jpg');">
      <div class="wrap-login100 p-t-30 p-b-50">
        <span class="login100-form-title p-b-41">
         <img src="public/img_sp/a3ef8f4d9808108d598dea46385ed48c-rose-flower-icon-by-vexels.png" width="40px" height="25px">FlowerProject
       </span>
       <form action="index.php?mod=login&act=checkcaptcha" method="post" class="login100-form validate-form p-b-33 p-t-5">

        <div class="wrap-input100 validate-input" data-validate = "Nhập địa chỉ email">
          <input class="input100" type="text" name="email" placeholder="Địa chỉ email">
          <span class="focus-input100" data-placeholder="&#xe82a;"></span>
        </div>

        <div class="wrap-input100 validate-input" data-validate="Nhập mật khẩu">
          <input class="input100" type="password" name="mat_khau" placeholder="Mật khẩu">
          <span class="focus-input100" data-placeholder="&#xe80f;"></span>
        </div>

        <div class="container-login100-form-btn m-t-32">
          <div class="g-recaptcha" data-sitekey="6Ldk-HIUAAAAAA4uiqU6sGxI1eKR8C8eDnj83KqW" style="margin-bottom: 25px;"></div>
          <button type="submit" class="login100-form-btn" name="submit">
            Login
          </button>
        </div>

      </form>
    </div>
  </div>
</div>

<div id="dropDownSelect1"></div>
<!--===============================================================================================-->
<script src="public/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="public/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
<script src="public/vendor/bootstrap/js/popper.js"></script>
<script src="public/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="public/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
<script src="public/vendor/daterangepicker/moment.min.js"></script>
<script src="public/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
<script src="public/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
<script src="public/js/main.js"></script>

</body>
</html>

<?php
if (isset($_COOKIE['dang_nhap_that_bai'])) {
  ?>
  <script type="text/javascript">
    toastr["error"]("Thất bại!", "Đăng nhập tài khoản");
  </script>
  <?php
}
?>
<?php
if (isset($_COOKIE['captcha_sai'])) {
  ?>
  <script type="text/javascript">
    toastr["error"]("Mã captcha sai", "Đăng nhập tài khoản");
  </script>
  <?php
}
?>