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
    line-height: 80px;
  }
</style> 

</head>  
<body>  
  <div class="container">  

    <div class="table-responsive">

      <table id="tkkh" class="table table-condensed table-hover" style="align-content: center;">  
        <thead>  
          <tr align="center">  
            <td>Mã khách hàng</td>    
            <td>Số hóa đơn đã đặt</td>  
            <td>Tổng tiền đã mua (VNĐ)</td>
          </tr>  
        </thead>  
        <?php 
        
        foreach($thong_ke_khach_hang as $row){  
         
          ?>    

          <tr id="nhan_vien" align="center">  
            <td class="nhan_vien"><?= $row["ma_kh"] ?></td>    
            <td class="nhan_vien"><?= $row["so_hoa_don"] ?></td>  
            <td class="nhan_vien"><?= number_format($row['tien_mua']) ?></td>     
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
    $('#tkkh').DataTable();  
  });  
</script>

