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

      <table id="tksp" class="table table-condensed table-hover" style="align-content: center;">  
        <thead>  
          <tr align="center">
            <td>Mã sản phẩm</td>
            <td>Tên sản phẩm</td> 
            <td>Số lượng đã bán</td>    
            <td>Giá nhập vào</td>  
            <td>Tổng tiền nhập(VNĐ)</td>
            <td>Giá bán</td>
            <td>Tổng giá bán (VNĐ)</td>
            <td>Lãi theo sản phẩm</td>
          </tr>  
        </thead>  
        <?php 
        foreach($thu_chi as $row){  
        ?>    

        <tr id="nhan_vien" align="center">  
          <td class="nhan_vien"><?= $row["ma_sp"] ?></td>
          <td class="nhan_vien"><?= $row["ten_sp"] ?></td>   
          <td class="nhan_vien"><?= $row["so_luong_da_ban"] ?></td>  
          <td class="nhan_vien"><?= number_format($row['gia_nhap']) ?></td>
          <td class="nhan_vien"><?= number_format($row['tong_gia_nhap']) ?></td>
          <td class="nhan_vien"><?= number_format($row['don_gia']) ?></td>
          <td class="nhan_vien"><?= number_format($row['tong_thanh_tien']) ?></td>
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
    $('#tksp').DataTable();  
  });  
</script>

