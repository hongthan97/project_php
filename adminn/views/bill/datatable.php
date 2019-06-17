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
    line-height: 30px;

  }
</style> 

</head>  
<body>  
  <div class="container">  

    <div class="table-responsive">

      <table id="qlhd" class="table table-condensed table-hover" style="align-content: center;">
        <thead>  
          <tr align="center">  
            <td>Mã hóa đơn</td>    
            <td>Mã khách hàng</td>  
            <td>Mã nhân viên</td>
            <td>Trạng thái</td>
            <td>Hành Động</td>
          </tr>  
        </thead>
        <?php
        $trang_thai = 0;  
        foreach($data as $row){  
          ?>    

          <tr id="san_pham" align="center">  
            <td class="san_pham"><?= $row["ma_hd"] ?></td>    
            <td class="san_pham"><?= $row["ma_kh"] ?></td>
            <?php 
            if ($row["ma_nv"]==NULL) {
              ?>
              <td class="san_pham">Online</td>
              <?php
            } else {
              ?>
              <td class="san_pham"><?= $row["ma_nv"] ?></td>
              <?php
            }
            ?>
            
            <td class="san_pham">
              <?php
              $trang_thai = $row['trang_thai'];
              if ($trang_thai==0) {
                ?>
                <i class="mdi mdi-checkbox-marked-circle-outline" title="Đã xử lí" data-toggle="tooltip" style="color: green; font-size: 20px"></i>

                <?php
              } else {
                ?>
                <a type="submit" title="Thanh toán" data-toggle="tooltip" class="btn waves-effect waves-light hidden-md-down btn-outline-success" href="index.php?mod=bill&act=reducequant&ma_hd=<?= $row["ma_hd"] ?>"><i class="mdi mdi-check"></i></a>&nbsp&nbsp

                <a type="submit" title="Hủy đơn hàng" id="delete" data-toggle="tooltip" class="btn waves-effect waves-light hidden-md-down btn-outline-danger" href="index.php?mod=bill&act=unsetbill&ma_hd=<?= $row["ma_hd"] ?>"><i class="mdi mdi-close"></i></a>

                <?php
              }?>  
            </td>
            <td class="san_pham" align="center">
              <a type="submit" title="Chi tiết hóa đơn" data-toggle="tooltip" class="btn waves-effect waves-light hidden-md-down btn-outline-info" href="index.php?mod=bill&act=detail&ma_hd=<?= $row["ma_hd"] ?>"><i class="mdi mdi-eye-outline"></i></a>&nbsp&nbsp
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
    $('#qlhd').DataTable();  
  });  
</script>
<script type="text/javascript">
  $(document).on("click","#delete", function(e){
    e.preventDefault();
    
    swal({
      title: "Bạn có chắc không?",
      text: "Nếu xóa hóa đơn sẽ không thể khôi phục dữ liệu!",
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