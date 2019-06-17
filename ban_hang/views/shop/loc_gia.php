<div class="row">
    <div class="col-12">
        <div class="product-topbar d-xl-flex align-items-end justify-content-between">
            <!-- Sorting -->
            <form action="?mod=shop&act=locgia" method="post">
                <div class="product-sorting d-flex">

                    <div class="sort-by-date d-flex align-items-center mr-20">
                        <p>Giá&nbsp&nbsp&nbsp&nbsp</p>

                        <select name="gia">
                            <option value="1">10.000 VNĐ - 100.000 VNĐ</option>
                            <option value="2">100.000 VNĐ - 500.000 VNĐ</option>
                            <option value="3">500.000 VNĐ - 2.000.000 VNĐ</option>
                        </select>

                    </div>
                    <div style="line-height: 5px; margin-left: 15px">
                        <button type="submit" class="btn btn-group" name="loc_gia" style="background-color: #EEEEEE">Lọc giá</button>
                    </div>           

                </div>
            </form>
            <form action="?mod=shop&act=sapxep" method="post">
                <br><div class="product-sorting d-flex">
                 <div class="view-product d-flex align-items-center">

                    <p>Sắp xếp giá &nbsp&nbsp</p>
                    <select name="sapxep">
                        <option value="1">Thấp - Cao</option>
                        <option value="2">Cao - Thấp</option>
                    </select>

                </div>
                <div style="line-height: 5px; margin-left: 15px">
                    <button type="submit" class="btn btn-group" name="sap_xep" style="background-color: #EEEEEE">Sắp xếp</button>
                </div>  
            </div>
        </form>
        
    </div>
</div>
</div>