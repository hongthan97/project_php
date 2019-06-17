<!DOCTYPE html>  
<html>  
<head>       
  <script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>  
  <script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>

  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css" /> 
  <style type="text/css">

  .san_pham{
    font-size: 15px;
    line-height: 50px;

  }
</style> 

</head>  
<body>  
  <div class="container">  

    <div class="table-responsive">

      <table id="qlsp" class="table table-condensed table-hover" style="align-content: center;">
        <thead>  
          <tr>  
            <td>Mã sản phẩm</td>    
            <td>Tên sản phẩm</td>  
            <td>Đơn giá (VNĐ)</td>
            <td>Số lượng</td>
            <td>Ảnh</td>
            <td>Hành Động</td>
          </tr>  
        </thead>
        <?php 
        $so_luong = 0;
        foreach($data as $row){  
          ?>    

          <tr id="san_pham">  
            <td class="san_pham"><?= $row["ma_sp"] ?></td>    
            <td class="san_pham"><?= $row["ten_sp"] ?></td>  
            <td class="san_pham"><?= number_format($row["don_gia"]) ?></td>
            <td class="san_pham"><?= $row["so_luong"] ?></td>
            <?php if (empty($row['img'])) {
              ?>
              <td class="san_pham"><img width="50px" height="50px" src="public/img_sp/empty.jpg"></td>
              <?php
            } else { ?>
              <td class="san_pham"><img width="50px" height="50px" src="public/img_sp/<?= $row["img"] ?>"></td>
            <?php } ?>

            <td class="san_pham" align="center">

              <?php 
              $so_luong = $row['so_luong'];
              if ($so_luong==0) {
                ?>
                <i class="mdi mdi-cart-off" title="Hết hàng rồi" data-toggle="tooltip" style="font-size: 20px"></i>

                <?php
              } else {
                ?>
                <a type="submit" title="Mua sản phẩm" data-toggle="tooltip" class="btn waves-effect waves-light hidden-md-down btn-outline-info" href="index.php?mod=sale&act=add2cart&ma_sp=<?= $row["ma_sp"] ?>"><i class="mdi mdi-cart-plus"></i></a>
                <?php
              }
              ?>
              

              
            </td>                
          </tr> 

          <?php
        }  
        ?>  
      </table>


    </div>  
  </div>  
</body>  
</html>  
<script>  
  $(document).ready(function(){  
    $('#qlsp').DataTable();  
  });  
</script>
