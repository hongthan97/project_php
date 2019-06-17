<?php error_reporting(0); ?>
<div class="shop_sidebar_area">

    <!-- ##### Single Widget ##### -->
    <div class="widget catagory mb-50">
        <!-- Widget Title -->
        <h6 class="widget-title mb-30">Kiểu dáng</h6>

        <!--  Catagories  -->
        <?php 
        if ($kieu == 'bh') {
            ?>
            <div class="catagories-menu">
                <ul>
                    <li class="active"><a href="?mod=shop&act=lockieu&kieu=bh">Bó hoa</a></li>
                    <li><a href="?mod=shop&act=lockieu&kieu=gh">Giỏ hoa</a></li>
                    <li><a href="?mod=shop&act=lockieu&kieu=kh">Kệ hoa</a></li>
                    <li><a href="?mod=shop&act=lockieu&kieu=hh">Hộp hoa</a></li>
                </ul>
            </div>
            <?php
        } elseif ($kieu == 'gh') {
            ?>
            <div class="catagories-menu">
                <ul>
                    <li><a href="?mod=shop&act=lockieu&kieu=bh">Bó hoa</a></li>
                    <li class="active"><a href="?mod=shop&act=lockieu&kieu=gh">Giỏ hoa</a></li>
                    <li><a href="?mod=shop&act=lockieu&kieu=kh">Kệ hoa</a></li>
                    <li><a href="?mod=shop&act=lockieu&kieu=hh">Hộp hoa</a></li>
                </ul>
            </div>
            <?php
        } elseif ($kieu == 'kh') {
            ?>
            <div class="catagories-menu">
                <ul>
                    <li><a href="?mod=shop&act=lockieu&kieu=bh">Bó hoa</a></li>
                    <li><a href="?mod=shop&act=lockieu&kieu=gh">Giỏ hoa</a></li>
                    <li class="active"><a href="?mod=shop&act=lockieu&kieu=kh">Kệ hoa</a></li>
                    <li><a href="?mod=shop&act=lockieu&kieu=hh">Hộp hoa</a></li>
                </ul>
            </div>
            <?php
        } elseif ($kieu == 'hh') {
            ?>
            <div class="catagories-menu">
                <ul>
                    <li><a href="?mod=shop&act=lockieu&kieu=bh">Bó hoa</a></li>
                    <li><a href="?mod=shop&act=lockieu&kieu=gh">Giỏ hoa</a></li>
                    <li><a href="?mod=shop&act=lockieu&kieu=kh">Kệ hoa</a></li>
                    <li class="active"><a href="?mod=shop&act=lockieu&kieu=hh">Hộp hoa</a></li>
                </ul>
            </div>
            <?php
        } else {
            ?>
            <div class="catagories-menu">
                <ul>
                    <li><a href="?mod=shop&act=lockieu&kieu=bh">Bó hoa</a></li>
                    <li><a href="?mod=shop&act=lockieu&kieu=gh">Giỏ hoa</a></li>
                    <li><a href="?mod=shop&act=lockieu&kieu=kh">Kệ hoa</a></li>
                    <li><a href="?mod=shop&act=lockieu&kieu=hh">Hộp hoa</a></li>
                </ul>
            </div>
            <?php
        }
        ?>
        
    </div>

    <!-- ##### Single Widget ##### -->
    <div class="widget brands mb-50">
        <!-- Widget Title -->
        <h6 class="widget-title mb-30">Chủ đề</h6>
        <?php 
        if ($chude == 'sn') {
            ?>
            <div class="catagories-menu">
                <ul>
                    <li class="active"><a href="?mod=shop&act=locchude&chude=sn"><i class="fa fa-birthday-cake"></i>&nbsp&nbspSinh nhật</a></li>
                    <li><a href="?mod=shop&act=locchude&chude=cm"><i class="fa fa-handshake-o"></i>&nbsp&nbspChúc mừng</a></li>
                    <li><a href="?mod=shop&act=locchude&chude=hc"><i class="fa fa-ambulance"></i>&nbsp&nbspHoa cưới</a></li>
                    <li><a href="?mod=shop&act=locchude&chude=kt"><i class="fa fa-sign-language"></i>&nbsp&nbspHoa khai trương</a></li>
                </ul>
            </div>
            <?php
        } elseif ($chude == 'cm') {
            ?>
            <div class="catagories-menu">
                <ul>
                    <li><a href="?mod=shop&act=locchude&chude=sn"><i class="fa fa-birthday-cake"></i>&nbsp&nbspSinh nhật</a></li>
                    <li class="active"><a href="?mod=shop&act=locchude&chude=cm"><i class="fa fa-handshake-o"></i>&nbsp&nbspChúc mừng</a></li>
                    <li><a href="?mod=shop&act=locchude&chude=hc"><i class="fa fa-ambulance"></i>&nbsp&nbspHoa cưới</a></li>
                    <li><a href="?mod=shop&act=locchude&chude=kt"><i class="fa fa-sign-language"></i>&nbsp&nbspHoa khai trương</a></li>
                </ul>
            </div>
            <?php
        } elseif ($chude == 'hc') {
            ?>
            <div class="catagories-menu">
                <ul>
                    <li><a href="?mod=shop&act=locchude&chude=sn"><i class="fa fa-birthday-cake"></i>&nbsp&nbspSinh nhật</a></li>
                    <li><a href="?mod=shop&act=locchude&chude=cm"><i class="fa fa-handshake-o"></i>&nbsp&nbspChúc mừng</a></li>
                    <li class="active"><a href="?mod=shop&act=locchude&chude=hc"><i class="fa fa-ambulance"></i>&nbsp&nbspHoa cưới</a></li>
                    <li><a href="?mod=shop&act=locchude&chude=kt"><i class="fa fa-sign-language"></i>&nbsp&nbspHoa khai trương</a></li>
                </ul>
            </div>
            <?php
        } elseif ($chude == 'kt') {
            ?>
            <div class="catagories-menu">
                <ul>
                    <li><a href="?mod=shop&act=locchude&chude=sn"><i class="fa fa-birthday-cake"></i>&nbsp&nbspSinh nhật</a></li>
                    <li><a href="?mod=shop&act=locchude&chude=cm"><i class="fa fa-handshake-o"></i>&nbsp&nbspChúc mừng</a></li>
                    <li><a href="?mod=shop&act=locchude&chude=hc"><i class="fa fa-ambulance"></i>&nbsp&nbspHoa cưới</a></li>
                    <li class="active"><a href="?mod=shop&act=locchude&chude=kt"><i class="fa fa-sign-language"></i>&nbsp&nbspHoa khai trương</a></li>
                </ul>
            </div>
            <?php
        } else {
            ?>
            <div class="catagories-menu">
                <ul>
                    <li><a href="?mod=shop&act=locchude&chude=sn"><i class="fa fa-birthday-cake"></i>&nbsp&nbspSinh nhật</a></li>
                    <li><a href="?mod=shop&act=locchude&chude=cm"><i class="fa fa-handshake-o"></i>&nbsp&nbspChúc mừng</a></li>
                    <li><a href="?mod=shop&act=locchude&chude=hc"><i class="fa fa-ambulance"></i>&nbsp&nbspHoa cưới</a></li>
                    <li><a href="?mod=shop&act=locchude&chude=kt"><i class="fa fa-sign-language"></i>&nbsp&nbspHoa khai trương</a></li>
                </ul>
            </div>
            <?php
        }
        ?>

    </div>

</div>