<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hóa đơn <?= $_SESSION['bill_print']['ma_hd'] ?></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
    <div class="section-padding-100" style="margin-left: 150px; margin-right: 150px">
        <div class="container-fluid">
            <div class="col-lg-12" align="center">

                <br><div style="width: 100%;">
                    <div style="width: 50%;">
                        <h2 class="page-header" style="color: #AA0000;">CHI TIẾT HÓA ĐƠN</h2>

                    </div>

                </div>

                <br><table class="table table-condensed" align="center">
                    <tr>
                        <td class="header" colspan="2">Mã hóa đơn</td>
                        <td colspan="3"><?= 'HD_'.$_SESSION['bill_print']['ma_hd'] ?></td>
                    </tr>
                    <tr>
                        <td class="header" colspan="2">Mã khách hàng</td>
                        <td colspan="3"><?= $_SESSION['bill_print']['ma_kh'] ?></td>
                    </tr>
                    <tr>
                        <td class="header" colspan="2">Tên khách hàng</td>
                        <td colspan="3"><?= $_SESSION['bill_print']['ten_kh'] ?></td>
                    </tr>
                    <tr>
                        <td class="header" colspan="2">Số điện thoại</td>
                        <td colspan="3"><?= $_SESSION['bill_print']['so_dt'] ?></td>
                    </tr>
                    <tr>
                        <td class="header" colspan="2">Mã nhân viên</td>
                        <td colspan="3"><?= $_SESSION['bill_print']['ma_nv'] ?></td>
                    </tr>
                    <tr>
                        <td class="header" colspan="2">Ngày bán</td>
                        <td colspan="3"><?= $_SESSION['bill_print']['ngay_ban'] ?></td>
                    </tr>
                    <tr>
                        <td class="header" colspan="2">Tổng tiền</td>
                        <td colspan="3"><?= number_format($_SESSION['bill_print']['tong_tien']) ?></td>
                    </tr>
                    <tr>
                        <td colspan="5" align="center"><h2 style="color: #AA0000;">Chi tiết sản phẩm</h2></td>
                    </tr>

                    <tr>
                        <th>Mã sản phẩm</th>
                        <th>Tên sản phẩm</th>
                        <th>Số lượng</th>
                        <th>Giá bán</th>
                        <th>Thành tiền</th>
                    </tr>
                    <?php
                    foreach ($_SESSION['show_bill'] as $value) {
                        ?>
                        <tr>
                            <td><?= $value['ma_sp'] ?></td>
                            <td><?= $value['ten_sp'] ?></td>
                            <td><?= $value['so_luong'] ?></td>
                            <td><?= number_format($value['gia_ban']) ?></td>
                            <td><?= number_format($value['thanh_tien']) ?></td>
                        </tr>
                        <?php
                    }
                    ?>
                    <tr>
                        <td colspan="5" align="center">
                            <br><button class="btn btn-success" onclick="window.print()"><i class="fa fa-print"></i> In hóa đơn</button>
                            &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                            <a href="?mod=shop&act=delete" class="btn btn-danger">Hoàn thành</a><br><br>

                        </td>

                    </tr>
                </table>  

            </div>
        </div>
    </div>
</div>
</body>
</html>