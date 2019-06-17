<div class="products-catagories-area clearfix">

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" style="height: 22vmax">
        <div class="carousel-item active" style="height: 22vmax">
            <div class="carousel-caption d-none d-md-block">
                <h1 style="font-family: 'Oleo Script', Helvetica, sans-serif;">Welcome to the store</h1>
                <p style="font-family: 'Merienda One', Helvetica, sans-serif;">FLOWER PROJECT SS2</p>
            </div>
            <img class="d-block w-100" src="public/img/tuan-nguy-n-minh-570922-unsplash.jpg" alt="First slide" >

        </div>
        <div class="carousel-item" style="height: 22vmax">
          <img class="d-block w-100" src="public/img/sergey-shmidt-229811-unsplash.jpg" alt="Second slide" >
          <div class="carousel-caption d-none d-md-block">
            <h1 style="font-family: 'Oleo Script', Helvetica, sans-serif;">Make your next occasion memorable</h1>
            <h6 style="font-family: 'Merienda One', Helvetica, sans-serif;">For the best and freshest flowers in Ha Noi, The Flower Store has exactly what you’re looking for!</h6>
        </div>
    </div>
    <div class="carousel-item" style="height: 22Vmax">
      <img class="d-block w-100" src="public/img/robert-oh-191991-unsplash.jpg" alt="Third slide" >
      <div class="carousel-caption d-none d-md-block">
        <h1 style="font-family: 'Pacifico', Helvetica, sans-serif;">Wedding Season</h1>
        <h3 style="font-family: 'Pacifico', Helvetica, sans-serif;">Wishing you a special happiness on this special day</h3>
    </div>
</div>
</div>
<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
</a>
<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
</a>
</div>

<div class="amado-pro-catagory clearfix">
    <?php 
    foreach ($result as $value) {
                    # code...
     ?>
     <!-- Single Catagory -->
     <div class="single-products-catagory clearfix">
        <a href="index.php?mod=shop&act=list">
            <img src="public/img_sp/<?= $value['img'] ?>" alt="">
            <!-- Hover Content -->
            <div class="hover-content" style="background: white; opacity: 0.8; padding: 7px">
                <div class="line"></div>
                <h6>Giá chỉ từ: </h6>
                <p style="color: #AA0000"><?= number_format($value['min']).' VNĐ' ?></p>
                <h4><?= $value['loai_sp'] ?></h4>
            </div>
        </a>
    </div>
<?php } ?>
<!-- Single Catagory -->

</div>
</div>
<!-- Product Catagories Area End -->
</div>
<!-- ##### Main Content Wrapper End ##### -->

