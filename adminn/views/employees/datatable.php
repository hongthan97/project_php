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

      <table id="qlnv" class="table table-condensed table-hover" style="align-content: center;">  
        <thead>  
          <tr align="center">  
            <td>Mã nhân viên</td>    
            <td>Tên nhân viên</td>  
            <td>Số điện thoại</td>
            <td>Ảnh</td>
            <td>Hành Động</td>
          </tr>  
        </thead>  
        <?php  
        foreach($data as $row){  
          ?>    

          <tr id="nhan_vien" align="center">  
            <td class="nhan_vien"><?= $row["ma_nv"] ?></td>    
            <td class="nhan_vien"><?= $row["ten_nv"] ?></td>  
            <td class="nhan_vien"><?= $row['so_dt'] ?></td>
            <?php if (empty($row['img'])) {
              ?>
              <td class="nhan_vien"><img width="80px" height="80px" src="public/img_nv/empty.jpg"></td>
              <?php
            } else { ?>
              <td class="nhan_vien"><img width="80px" height="80px" src="public/img_nv/<?= $row["img"] ?>"></td>
            <?php } ?>
            <td class="nhan_vien">
              <a type="button" title="Chi tiết" data-toggle="tooltip" class="btn waves-effect waves-light hidden-md-down btn-outline-info" href="index.php?mod=employees&act=detail&ma_nv=<?= $row["ma_nv"] ?>"><i class="mdi mdi-eye-outline"></i></a>&nbsp&nbsp

              <a type="submit" title="Cập nhật" data-toggle="tooltip" class="btn waves-effect waves-light hidden-md-down btn-outline-success" href="index.php?mod=employees&act=edit&ma_nv=<?= $row["ma_nv"] ?>"><i class="mdi mdi-briefcase-upload"></i></a>&nbsp&nbsp

              <a type="submit" title="Xóa" data-toggle="tooltip" class="btn waves-effect waves-light hidden-md-down btn-outline-danger" href="index.php?mod=employees&act=delete&ma_nv=<?= $row["ma_nv"] ?>" id="delete"><i class="mdi mdi-close"></i></a>&nbsp&nbsp
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
    $('#qlnv').DataTable();  
  });  
</script>

<script>  
  $(document).ready(function(){  
    $('#qlsp').DataTable();  
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