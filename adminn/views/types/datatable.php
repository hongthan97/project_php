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
    line-height: 80px;

  }
</style> 

</head>  
<body>  
  <div class="container">  

    <div class="table-responsive">

      <table id="qllsp" class="table table-condensed table-hover" style="align-content: center;">
        <thead>  
          <tr align="center">  
            <td>Mã loại sản phẩm</td>    
            <td>Loại sản phẩm</td>  
            <td>Ảnh</td>
            <td>Hành Động</td>
          </tr>  
        </thead>
        <?php  
        foreach($data as $row){  
          ?>    

          <tr id="san_pham" align="center">  
            <td class="san_pham"><?= $row["ma_loai"] ?></td>    
            <td class="san_pham"><?= $row["loai_sp"] ?></td>  
            <?php if (empty($row['img'])) {
              ?>
              <td class="san_pham"><img width="80px" height="80px" src="public/img_sp/empty.jpg"></td>
              <?php
            } else { ?>
              <td class="san_pham"><img width="80px" height="80px" src="public/img_sp/<?= $row["img"] ?>"></td>
            <?php } ?>

            <td class="san_pham">
              <a type="submit" title="Cập nhật" data-toggle="tooltip" class="btn waves-effect waves-light hidden-md-down btn-outline-success" href="index.php?mod=types&act=edit&ma_loai=<?= $row["ma_loai"] ?>"><i class="mdi mdi-briefcase-upload"></i></a>&nbsp&nbsp

              <a type="submit" title="Xóa" data-toggle="tooltip" class="btn waves-effect waves-light hidden-md-down btn-outline-danger" href="index.php?mod=types&act=delete&ma_loai=<?= $row["ma_loai"] ?>" id="delete"><i class="mdi mdi-close"></i></a>
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
    $('#qllsp').DataTable();  
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