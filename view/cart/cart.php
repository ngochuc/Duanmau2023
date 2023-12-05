<?php 
    $id_user = $_SESSION['uid'];
    $list_pro = load_cart($id_user);
?>
<section class="bill">
    <h1>Giỏ hàng</h1>
</section>
<section class="bill">
    <div class="bill-header">
        <div class="bill-header-item" style="flex: 6;">
            <h2>Sản phẩm</h2>
        </div>
        <div class="bill-header-item" style="flex: 2;">Đơn giá</div>
        <div class="bill-header-item" style="flex: 2;">Số lượng</div>
        <div class="bill-header-item" style="flex: 2;">Thành tiền</div>
        <div class="bill-header-item" style="flex: 1;">Thao tác</div>
    </div>
    <div class="bill-pro" >

            <?php 
                $total_price = 0;
                foreach($list_pro as $p){
                    $linksp = 'index.php?act=spct&id='.$p['id'];
                    echo '
                    <div class="bill-pro-item">
                    <div class="bill-pro-sanpham" style="flex: 6;">
                    <input style="display: none;" name ="id_pro[]" value = "'.$p['id'].'">
                    <a href="'.$linksp.'" style="display: flex; align-items: center; text-decoration: none;">
                        <img src="upload/'.$p['img'].'" height="40px" width="40px" alt="">
                        <span>'.$p['name'].'</span>
                    </a>
                    </div>
                    <div class="bill-pro-price" style="flex: 2;" price_sp ="'.$p['price'].'" >'.currency_format($p['price']).'</div>
                    <div class="number-input">
                        <button  class="minus minus_cart"></button>
                        <input class="quantity count_cart" min="0" name="quantity" value="'.$p['count'].'" type="number" data-idpro = "'.$p['id'].'">
                        <button  class="plus_cart"></button>
                    </div>
                    <div class="bill-pro-subtotal" style="flex: 2;" value="'.$p['price']*$p['count'].'">'. currency_format($p['price']*$p['count']).'</div>
                    <div class="xoacart" style="flex: 1;" data-idpro = "'.$p['id'].'" from="cart">
                        <button style="color: white; background-color: red; padding: 5px 10px; border: none; border-radius: 5px;  cursor: pointer;">Xóa</button>
                    </div>
                    </div>';
                    $total_price += $p['price']*$p['count'];
                }
            ?>
    </div>
</section>
<section class="bill-total">
    <div class="total-bill" >
        <div class="total-bill-title" style="flex: 4;">Tổng tiền thanh toán</div>
        <div class="detail-total" style="flex: 2;">
            <div class="bill-price-pro" >
                <p>Tổng tiền hàng:</p>
                <p class="total_price total_price-cart" ><?php echo currency_format( $total_price);?></p>
            </div>
            <div class="bill-ship">
                <p>Phí vận chuyển:</p>
                <p>20.000đ</p>
            </div>
            <div class="bill-detail-total">
                <p>Tổng thanh toán:</p>
                <p class="total_bill"><?php echo currency_format($total_price+20000)?></p>
            </div>
        </div>
    </div>
    <a href="index.php?act=bill" style="text-decoration: none;"><div class="btn_more buy" >Pay</div></a>
</section>
<style>
    input[type="number"] {
  -webkit-appearance: textfield;
  -moz-appearance: textfield;
  appearance: textfield;
    }

    input[type=number]::-webkit-inner-spin-button,
    input[type=number]::-webkit-outer-spin-button {
    -webkit-appearance: none;
    }

    .number-input {
    border: 2px solid #ddd;
    display: inline-flex;
    }

    .number-input,
    .number-input * {
    box-sizing: border-box;
    }

    .number-input button {
    outline:none;
    /* -webkit-appearance: none; */
    background-color: transparent;
    border: none;
    align-items: center;
    justify-content: center;
    width: 2.5rem;
    height: 2.5rem;
    cursor: pointer;
    margin: 0;
    position: relative;
    }

    .number-input button:after {
    display: inline-block;
    position: absolute;
    font-family: "Font Awesome 5 Free"; 
    font-weight: 900;
    content: '\f077';
    transform: translate(-50%, -50%) rotate(180deg);
    }
    .number-input button.plus:after {
    transform: translate(-50%, -50%) rotate(0deg);
    }

    .number-input input[type=number] {
    font-family: sans-serif;
    max-width: 5rem;
    padding: .5rem;
    border: solid #ddd;
    border-width: 0 2px;
    font-size: 1rem;
    height: 2rem;
    font-weight: bold;
    text-align: center;
    }
</style>