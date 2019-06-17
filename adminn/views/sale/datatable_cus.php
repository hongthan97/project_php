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
  .san_pham{
    font-size: 16px;
    line-height: 50px;

  }
</style> 

</head>  
<body>  
  <div class="container">  

    <div class="table-responsive">

      <table id="qlkh" class="table table-condensed table-hover" style="align-content: center;">  
        <thead>  
          <tr align="center">  
            <td>Mã khách hàng</td>    
            <td>Tên khách hàng</td>  
            <td>Số điện thoại</td>
            <td>Email</td>
            <td>Hành Động</td>
          </tr>  
        </thead>  
        <?php  
        foreach($data as $row){  
          ?>    

          <tr id="san_pham"  align="center">  
            <td class="san_pham"><?= $row["ma_kh"] ?></td>    
            <td class="san_pham"><?= $row["ten_kh"] ?></td>  
            <td class="san_pham"><?= $row["so_dt"] ?></td>
            <td class="san_pham"><?= $row["email"] ?></td>
            <td class="san_pham">
              <a type="submit" title="Tạo hóa đơn" data-toggle="tooltip" class="btn waves-effect waves-light hidden-md-down btn-outline-success" href="index.php?mod=sale&act=purchase&ma_kh=<?= $row["ma_kh"] ?>"><i class="mdi mdi-feather"></i><b></b></a>
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
    $('#qlkh').DataTable();  
  });  
</script>