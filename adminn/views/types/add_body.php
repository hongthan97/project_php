 
<div class="col-md-5 col-8 align-self-center">
    <h3 class="text-themecolor">Quản lí loại sản phẩm</h3>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
        <li class="breadcrumb-item active">Quản lí loại sản phẩm</li>
        <li class="breadcrumb-item active">Thêm loại sản phẩm</li>
    </ol>
</div>
<div class="col-md-7 col-4 align-self-center">
    <a href="index.php?mod=types&act=list" class="btn waves-effect waves-light btn-danger pull-right hidden-sm-down"><i class="mdi mdi-chevron-left"></i><b> Quay lại</b></a>
</div>
</div>


<!-- Start Page Content -->
<!-- ============================================================== -->
<!-- Row -->
<form action="index.php?mod=types&act=store" class="form-horizontal form-material" method="POST" enctype="multipart/form-data">
    <div class="row">
        <!-- Column -->
        <div class="col-lg-4 col-xlg-3 col-md-5">

            <div class="card">
                <div class="card-block">
                    <center class="m-t-20"><label class="form-horizontal form-material">Ảnh loại sản phẩm</label></center>
                    <center class="m-t-30"><img src="public/img_sp/empty.jpg" id="anh" class="img-circle" width="220" /><br>
                        <br><h4 class="card-title m-t-10">Thêm ảnh loại sản phẩm: </h4><br>
                        <input type="file" name="img_sp" id="imgg" style="width: 250px;">
                        <script type="text/javascript"> //hiển thị ảnh lập tức
                        $(document).ready(function() {
                            $('#imgg').change( function(event) {
                                var tmppath = URL.createObjectURL(event.target.files[0]);
                                $("#anh").fadeIn("fast").attr('src',tmppath);
                            });                                 
                        });                                 
                    </script>
                </center>
            </div>
        </div>
    </div>
    <!-- Column -->
    <!-- Column -->
    <div class="col-lg-8 col-xlg-9 col-md-7">
        <div class="card">
            <div class="card-block">

                <div class="form-group">
                    <label class="col-md-12"><h2 class="page-header"><i class="mdi mdi-plus-circle-outline"></i> THÊM LOẠI SẢN PHẨM MỚI</h2></label>
                </div>
                
                <div class="form-group">
                    <label class="col-md-12">Loại sản phẩm</label>
                    <div class="col-md-12">
                        <input type="text" class="form-control form-control-line" placeholder="Nhập loại sản phẩm"  name="loai_sp">
                    </div>
                </div>
                <div class="form-group" align="center">
                    <div class="col-sm-12">
                        <button type="submit" class="m-t-10 waves-effect waves-dark btn btn-info btn-md btn-rounded">Thêm mới</button>
                    </div><br>
                </div>
                
            </div>
        </div>
    </div>
    <!-- Column -->
</div>
</form>
<!-- Row -->
<!-- ============================================================== -->
<!-- End PAge Content -->
</div>