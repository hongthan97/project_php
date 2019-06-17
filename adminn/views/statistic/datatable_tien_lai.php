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
  div.dataTables_wrapper div.dataTables_filter input {
    margin-left: 0.5em;
    display: inline-block;
    width: 130px !important;
}
</style> 

</head>  
<body>  
  <div class="container">  

    <div class="table-responsive">

      <table id="tl" class="table table-condensed table-hover" style="align-content: center;">  
        <thead>  
          <tr align="center"> 
            <td>Tháng</td>      
            <td>Tiền lãi (VNĐ)</td>  
          </tr>  
        </thead>  
        <?php 
        foreach($tien_lai as $tl){
        ?>    
        <tr id="nhan_vien" align="center">
          <td class="nhan_vien"><?= $tl['thang'] ?></td>  
          <td class="nhan_vien"><?= number_format($tl['lai']) ?></td>
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
    $('#tl').DataTable();  
  });  
</script>

