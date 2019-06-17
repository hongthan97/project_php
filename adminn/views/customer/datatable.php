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
            <td align="center">Hành Động</td>
          </tr>  
        </thead>  
        <?php  
        foreach($data as $row){  
          ?>    

          <tr id="san_pham" align="center">  
            <td class="san_pham"><?= $row["ma_kh"] ?></td>    
            <td class="san_pham"><?= $row["ten_kh"] ?></td>  
            <td class="san_pham"><?= $row["so_dt"] ?></td>
            <td class="san_pham" align="center">
              <a type="submit" title="Chi tiết" data-toggle="tooltip" class="btn waves-effect waves-light hidden-md-down btn-outline-info" href="index.php?mod=customer&act=detail&ma_kh=<?= $row["ma_kh"] ?>"><i class="mdi mdi-eye-outline"></i></a>&nbsp&nbsp

              <a type="submit" title="Cập nhật" data-toggle="tooltip" class="btn waves-effect waves-light hidden-md-down btn-outline-success" href="index.php?mod=customer&act=edit&ma_kh=<?= $row["ma_kh"] ?>"><i class="mdi mdi-briefcase-upload"></i></a>&nbsp&nbsp

              <a type="submit" id="delete" title="Xóa" data-toggle="tooltip" class="btn waves-effect waves-light hidden-md-down btn-outline-danger" href="index.php?mod=customer&act=delete&ma_kh=<?= $row["ma_kh"] ?>"><i class="mdi mdi-close"></i></a>&nbsp&nbsp
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
<script type="text/javascript">
  $(document).on("click","#delete", function(e){
    e.preventDefault();
    
    swal({
      title: "Bạn có chắc không?",
      text: "Nếu xóa sẽ không thể khôi phục dữ liệu!",
      icon: "warning",
      buttons: true,
      dangerMode: true,
    })
    .then((willDelete) => {
      if (willDelete) {
        window.location.href=$(this).attr('href');
        swal("Thành công!", {
          icon: "success",
        });
      } else {
        swal("Hủy =))");
      }
    })

  });
</script>