<?php
//cấu hình thông tin do google cung cấp
$api_url     = 'https://www.google.com/recaptcha/api/siteverify';
$site_key    = '6Ldk-HIUAAAAAA4uiqU6sGxI1eKR8C8eDnj83KqW';
$secret_key  = '6Ldk-HIUAAAAAGoDFWbhrWjncUBWQfI6wrc1PcBp';

//kiem tra submit form
if (isset($_POST['submit'])) {
    # code...

    //lấy dữ liệu được post lên
    $site_key_post    = $_POST['g-recaptcha-response'];

    //lấy IP của khach
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $remoteip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $remoteip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else {
        $remoteip = $_SERVER['REMOTE_ADDR'];
    }

    //tạo link kết nối
    $api_url = $api_url.'?secret='.$secret_key.'&response='.$site_key_post.'&remoteip='.$remoteip;
    //lấy kết quả trả về từ google
    $response = file_get_contents($api_url);
    //dữ liệu trả về dạng json
    $response = json_decode($response);
    if(!isset($response->success))
    {
        setcookie('captcha_sai','msg',time()+4);
        header('Location: index.php?mod=login&act=form');
    }
    if($response->success == true)
    {
        $_SESSION['login_data'] = $_POST;
        header('Location: index.php?mod=login&act=checklogin');
    }else{
        setcookie('captcha_sai','msg',time()+4);
        header('Location: index.php?mod=login&act=form');
    }
}
?>