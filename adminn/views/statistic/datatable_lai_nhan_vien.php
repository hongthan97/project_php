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

      <table id="tklnv" class="table table-condensed table-hover" style="align-content: center;">  
        <thead>  
          <tr align="center">  
            <td>Mã nhân viên</td>
            <td>Số hóa đơn</td>    
            <td>Tiền lãi (VNĐ)</td>
          </tr>  
        </thead>  
        <?php 
        foreach($thong_ke_lai_nhan_vien as $row){  
          ?>    

          <tr id="nhan_vien" align="center">
            <td class="nhan_vien"><?= $row["ma_nv"] ?></td>
            <td class="nhan_vien"><?= $row["so_hoa_don"] ?></td>    
            <td class="nhan_vien"><?= number_format($row['lai']) ?></td>     
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
    $('#tklnv').DataTable();  
  });  
</script>

