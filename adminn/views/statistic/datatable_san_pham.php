<!DOCTYPE html>  
<html>  
<head>       
  <script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>  
  <script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>

  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css" /> 
  <style type="text/css">
  thead{
    font-weight: bold;

  }
  .nhan_vien{
    font-size: 16px;
  }
</style> 

</head>  
<body>  
  <div class="container">  

    <div class="table-responsive">

      <table id="tkspp" class="table table-condensed table-hover" style="align-content: center;">  
        <thead>  
          <tr align="center">  
            <td>Mã sản phẩm</td>
            <td>Tên sản phẩm</td>    
            <td>Số lần chọn mua</td>  
            <td>Tổng tiền (VNĐ)</td>
          </tr>  
        </thead>  
        <?php 
        foreach($thong_ke_san_pham as $row){  
          ?>    

          <tr id="nhan_vien" align="center">  
            <td class="nhan_vien"><?= $row["ma_sp"] ?></td>
            <td class="nhan_vien"><?= $row["ten_sp"] ?></td>    
            <td class="nhan_vien"><?= $row["so_lan_duoc_chon"] ?></td>  
            <td class="nhan_vien"><?= number_format($row['tong_tien']) ?></td>     
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
    $('#tkspp').DataTable();  
  });  
</script>

