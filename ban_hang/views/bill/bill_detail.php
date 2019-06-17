<div class="section-padding-100" style="margin-left: 100px">
    <div class="container-fluid">
        <div class="col-lg-12">

            <div style="width: 100%;">
                <div style="width: 50%;">
                    <h2 class="page-header" style="color: #AA0000;">CHI TIẾT HÓA ĐƠN</h2>

                </div>

            </div><br>

            <br><table class="table table-condensed" align="center">
                <tr>
                    <td class="header" colspan="2">Mã hóa đơn</td>
                    <td colspan="3"><?= 'HD_'.$row['ma_hd'] ?></td>
                </tr>
                <tr>
                    <td class="header" colspan="2">Mã khách hàng</td>
                    <td colspan="3"><?= $row['ma_kh'] ?></td>
                </tr>
                <tr>
                    <td class="header" colspan="2">Tên khách hàng</td>
                    <td colspan="3"><?= $row['ten_kh'] ?></td>
                </tr>
                <tr>
                    <td class="header" colspan="2">Số điện thoại</td>
                    <td colspan="3"><?= $row['so_dt'] ?></td>
                </tr>
                <tr>
                    <td class="header" colspan="2">Mã nhân viên</td>
                    <td colspan="3"><?= $row['ma_nv'] ?></td>
                </tr>
                <tr>
                    <td class="header" colspan="2">Ngày bán</td>
                    <td colspan="3"><?= $row['ngay_ban'] ?></td>
                </tr>
                <tr>
                    <td class="header" colspan="2">Tổng tiền</td>
                    <td colspan="3"><?= number_format($row['tong_tien']) ?></td>
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
                foreach ($showbill as $value) {
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
                    <td colspan="5">
                         <br><a href="?mod=shop&act=delete" class="btn amado-btn w-100">Hoàn thành</a><br><br>
                         <br><a type="button" href="?mod=shop&act=billprint" class="btn amado-btn w-100 active"><i class="fa fa-print"></i> In hóa đơn</a>
                         <br>
                    </td>
                   
                </tr>
            </table>  
            
        </div>
    </div>
</div>
</div>
<?php
if (isset($_COOKIE['thanh_cong'])) {
  ?>
  <script type="text/javascript">
    toastr["success"]("Đặt hàng thành công!", "Đặt hàng");
</script>
<?php
}
?>