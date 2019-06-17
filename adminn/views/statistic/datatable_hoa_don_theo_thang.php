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
    line-height: 30px;
  }
</style> 

</head>  
<body>  
  <div class="container">  

    <div class="table-responsive">

      <table id="tkhd" class="table table-condensed table-hover" style="align-content: center;">  
        <thead>  
          <tr align="center"> 
            <td>Tháng</td>     
            <td>Số hóa đơn</td>  
            <td>Tổng tiền (VNĐ)</td>
            
          </tr>  
        </thead>  
        <?php 
        foreach($hoa_don_theo_thang as $row){

          ?>    

          <tr id="nhan_vien" align="center">
            <td class="nhan_vien"><?= $row["thang"] ?></td>
            <td class="nhan_vien"><?= $row["so_hoa_don"] ?></td>  
            <td class="nhan_vien"><?= number_format($row['tong_tien_ban_duoc']) ?></td>
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
    $('#tkhd').DataTable();  
  });  
</script>

