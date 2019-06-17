<div class="single-product-area section-padding-100 clearfix">
            <div class="container-fluid">
            
                <div class="row">
                    <div class="col-12 col-lg-7">
                        <div class="single_product_thumb">
                            <div id="product_details_slider" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <a class="gallery_img" href="img/product-img/pro-big-1.jpg">
                                            <img class="d-block w-100" src="public/img_sp/<?= $row['img'] ?>" alt="First slide">
                                        </a>
                                    </div>
                                    <div class="carousel-item">
                                        <a class="gallery_img" href="img/product-img/pro-big-2.jpg">
                                            <img class="d-block w-100" src="public/img_sp/<?= $row['img'] ?>" alt="Second slide">
                                        </a>
                                    </div>
                                    
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-5">
                        <div class="single_product_desc">
                            <!-- Product Meta Data -->
                            <div class="product-meta-data">
                                <div class="line"></div>
                                <p class="product-price"><?= number_format($row['don_gia']).' VNĐ' ?></p>
                                <a>
                                    <h6><?= $row['ten_sp'] ?></h6>
                                </a>
                                <!-- Ratings & Review -->
                                <div class="ratings-review mb-15 d-flex align-items-center justify-content-between">
                                    <div class="ratings">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                    </div>
                                    <div class="review">
                                        <a href="#">Write A Review</a>
                                    </div>
                                </div>
                                <!-- Avaiable -->
                                <p class="avaibility"><i class="fa fa-circle"></i> In Stock</p>
                            </div>

                            <div class="short_overview my-5">
                                <p><b style="color: #AA0000">Kiểu dáng:</b>&nbsp&nbsp<?= $row['kieu_dang'] ?></p>
                                <p><b style="color: #AA0000">Chủ đề:</b>&nbsp&nbsp<?= $row['chu_de'] ?></p>
                            </div>

                            <!-- Add to Cart Form -->
                            <form class="cart clearfix" method="post">
                                <div class="cart-btn d-flex mb-50">
                                    <p>Còn lại</p>
                                    <div class="quantity">
                                        
                                        <input type="number" class="qty-text" id="qty" step="1" min="1" max="300" name="quantity" value="<?= $row['so_luong'] ?>" readonly>
                                        
                                    </div>
                                </div>
                                <a name="addtocart" href="?mod=shop&act=add2cart&ma_sp=<?= $row['ma_sp'] ?>" value="5" class="btn amado-btn">Add to cart</a>
                            </form>

                        </div>
                    </div>
                </div>
           
          </div>
          </div>
      </div>