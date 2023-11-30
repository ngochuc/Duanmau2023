<script src="js/slide.js"></script>
<div class="banner">
    <div class="slider">
        <div class="listbanner">
            <div class="item">
                <a href=""><img src="access/img/slide0.jpg" alt=""></a>
            </div>
            <div class="item">
                <a href=""><img src="access/img/slide1.jpg" alt=""></a>
            </div>
            <div class="item">
                <a href=""><img src="access/img/slide2.jpg" alt=""></a>
            </div>
            <div class="item">
                <a href=""><img src="access/img/slide3.jpg" alt=""></a>
            </div>
        </div>
        <div class="buttons">
            <button id="prev"><</button>
            <button id="next">></button>
        </div>
        <ul class="dots">
            <li class="active"></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
    </div>
</div>
    <div class="list mb">
            <h1 class="mb" style="margin: 40px;">Top 5 mobile nổi bật</h1>
        <div class="listsp">
            <?php foreach($listdt_popular as $pro):
                extract($pro);
                $linksp = 'index.php?act=spct&id='.$id; ?>
                <div class="pro">
                    <div class="img">
                            <img src="upload/<?php echo $img?>" alt="">
                            <div class="quickview"  onclick="detail_pro(<?php echo $id ?>)">Quick view</div>
                    </div>
                        <a href="<?php echo $linksp?> " class="name"><?php echo $name ?></a>
                        <div class="price"><?php echo currency_format($price)  ?></div>
                        <a href="index.php?act=addcart&idpro=<?php echo $id ?>&from=home" class="add_btn">Add to cart</a>
                </div>
            <?php endforeach ?>
                <div class="btn_more"><a href="index.php?act=mobile">More Mobile Phone</a></div>
        </div>
   
            <h1 class="mb" style="margin: 40px;">Top 5 laptop nổi bật</h1>
        <div class="listsp">
            <?php foreach($listlaptop_popular as $pro): extract($pro);
            $linksp = 'index.php?act=spct&id='.$id; ?>
                <div class="pro">
                        <div class="img">
                            <img src="upload/<?php echo $img?>" alt="">
                            <div class="quickview" onclick="detail_pro(<?php echo $id ?>)">Quick view</div>
                        </div>
                        <a href="<?php echo $linksp?> " class="name"><?php echo $name ?></a>
                        <div class="price"><?php echo currency_format($price)  ?></div>
                        <a href="index.php?act=addcart&idpro=<?php echo $id ?>&from=home" class="add_btn">Add to cart</a>
                </div>
            <?php endforeach ?>
                <div class="btn_more"><a href="index.php?act=laptop">More Laptop</a></div>
            </div>
            <h1 class="mb" style="margin: 40px;">Top 5 tablet nổi bật</h1>
        <div class="listsp">
            <?php foreach($listtablet_popular as $pro): extract($pro);
            $linksp = 'index.php?act=spct&id='.$id; ?>
                <div class="pro">
                        <div class="img">
                            <img src="upload/<?php echo $img?>" height="auto" alt="">
                            <div class="quickview" onclick="detail_pro(<?php echo $id ?>)">Quick view</div>
                        </div>
                        <a href="<?php echo $linksp?> " class="name"><?php echo $name ?></a>
                        <div class="price"><?php echo currency_format($price)  ?></div>
                        <a href="index.php?act=addcart&idpro=<?php echo $id ?>&from=home" class="add_btn">Add to cart</a>
                </div>
            <?php endforeach ?>    
                <div class="btn_more"><a href="index.php?act=tablet">More Tablet</a></div>
            </div>

    </div>
    <div class="modal">
            <div class="overlay" onclick="undetail_pro()"></div>
            <div class="modal_content" style="height: auto;">
                <div class="close" onclick="undetail_pro()">
                    <i class="fa-solid fa-x"></i>
                </div>
                <img src="" class="imgdetail" alt="">
                <div class="detail_pro">
                    <div class="namedetail mb50">ss</div>
                    <div class="pricedetail mb50">1000$</div>
                    <div class="description_pro mb50">
                        <p>Thông số kĩ thuật</p>
                        <table class="table_detailpro">
                        </table>
                    </div>
                    <div class="color mb50">
                        <p for="">Màu sắc</p>
                        <select name="" id="" class="select_color_detailpro">
                        </select>
                    </div>
                    <a class="add_btn them_cart" href="" style="opacity: 1;margin-top: 10px; margin-right: 90px; margin-bottom: 20px;">Add to cart</a>
                </div>
            </div>
        </div>
