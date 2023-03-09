<?php
    $products = $cart->getCart();
    $totalPrice = 0;
    if(isset($_SESSION['user_name_gbvn'])){
        global $conn_vn;
        $user = $_SESSION['user_name_gbvn'];
        $sql = "SELECT * FROM user Where user_name = '$user'";
        $result = mysqli_query($conn_vn, $sql);
        $row = mysqli_fetch_assoc($result);
    }
?>
<?php 
if (isset($_POST['send_mail'])){
    $email = $_POST['txtEmail'];
    $name = $_POST['txtName'];
    $phone = $_POST['txtPhone'];
    $address = $_POST['txtAddress'];
    $infor_cart = "";
    if(isset($_SESSION['shopping_cart'])){
        $total = 0;
        foreach($_SESSION["shopping_cart"] as $keys => $values){
            $name_product = $values['product_name'];
            $qty = $values['product_quantity'];
            $product_price = $values['product_price'];
            $total = $total + ($values["product_quantity"] * $values["product_price"]);
            $infor_cart .= "
                <tr>
                    <th>".$name_product."</th>
                    <th>".number_format($product_price)." VNĐ x ".$qty."</th>
                </tr>
            ";
        }
        $infor_cart1 = "
            <tr>
                <th>Tổng tiền</th>
                <th>".number_format($total)." VNĐ</th>
            </tr>
        ";
    }
    $content = "
    <div class='container'>
        <h2>Thông Tin Đơn Hàng</h2>
        <table class='table table-bordered' border='1'>
            <thead>
                <tr>
                    <th>Tên người đặt hàng</th>
                    <th>".$name."</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Số điện thoại</td>
                    <td>".$phone."</td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>".$email."</td>
                </tr>
                <tr>
                    <td>Địa chỉ</td>
                    <td>".$address."</td>
                </tr>
            </tbody>
        </table>
        <h2>Chi tiết Đơn Hàng</h2>
        <table class='table table-bordered' border='1'>
            <thead>
                <tr>
                    <th>Tên sản phẩm</th>
                    <th>Giá</th>
                </tr>
            </thead>
            <tbody>
                ".$infor_cart."
                ".$infor_cart1."
            </tbody>
        </table>
    </div>
    ";
    $cart->payment1();
    $mail = new action_email();
    $gui_mail = $mail->email_send($email, "Thông Tin Đặt Hàng Từ Áo Cưới",$content);
?>

    <script type="text/javascript">
        alert('Đặt hàng thành công');
        window.location.href="/";
    </script>
<?php } ?>
<div class="uni-checkout-body">
    <?php include DIR_BREADCRUMBS."MS_BREADCRUMS_AOCUOI_0001.php";?>
    <div class="container">
        <div class="tg-container">
            <div id="primary">
                <div class="entry-thumbnail">
                    <div class="entry-content-text-wrapper clearfix">
                        <div class="entry-content-wrapper">
                            <div class="entry-content">
                                <div class="woocommerce">
                                    <div class="row">
                                        <form action="" method="POST" role="form" id="formPayment">
                                        <div class="vk-checkout-billing-left">
                                            <div class="col-md-6">
                                                <div class="woocommerce-billing-fields">
                                                    <h3>
                                                        Thông tin thanh toán và nhận hàng
                                                    </h3>
                                                    <div class="woocommerce-billing-fields__field-wrapper">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <p class="form-row form-row-last" >
                                                                    <label class="">Họ và tên <abbr class="required" title="required">*</abbr></label>

                                                                    <input type="text" class="input-text " name="txtName" id="inputTxtName"  placeholder="Họ và tên" value="<?= $row['user_name']?>" required="" >
                                                                </p>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <p class="form-row form-row-last">
                                                                    <label class="">Số điện thoại <abbr class="required" title="required">*</abbr></label>
                                                                    <input type="tel" class="input-text" name="txtPhone" id="inputTxtPhone" placeholder="Số điện thoại" value="<?= $row['user_phone']?>">
                                                                </p>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <p class="form-row form-row-last">
                                                                    <label class="">Email <abbr class="required" title="required">*</abbr></label>
                                                                    <input type="email" class="input-text" name="txtEmail" id="inputTxtEmail" placeholder="Địa chỉ Email" value="<?= $row['user_email']?>">
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <p class="form-row form-row-last">
                                                            <label class="">Địa chỉ <abbr class="required" title="required">*</abbr></label>
                                                            <input type="text" class="input-text" name="txtAddress" id="inputTxtAddress" placeholder="Địa chỉ" value="<?= $row['user_address']?>">
                                                        </p>
                                                        <p class="form-row form-row-last">
                                                            <label class="">Ghi chú </label>
                                                            <textarea class="input-text" name="txtNote" id="inputTxtNote" placeholder="" ></textarea>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="vk-checkout-order-paypal">
                                                    <div id="order_review" class="woocommerce-checkout-review-order">
                                                        <div class="vk-checkout-order-left">
                                                            <h3>Thông tin giỏ hàng</h3>
                                                            <table class="shop_table woocommerce-checkout-review-order-table">
                                                                <thead>
                                                                    <tr>
                                                                        <th class="product-name">Sản phẩm</th>
                                                                        <th class="product-total">Đơn giá</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <?php
                                                                    if(!empty($_SESSION["shopping_cart"])){  
                                                                        $total = 0;  
                                                                        foreach($_SESSION["shopping_cart"] as $keys => $values){                             
                                                                    ?>
                                                                    <tr class="cart_item">
                                                                        <td class="product-name">
                                                                            <?php echo $values["product_name"]; ?>
                                                                        </td>
                                                                        <td class="product-total">
                                                                            <span class="woocommerce-Price-amount amount"><?php echo number_format($values["product_price"]); ?> VNĐ</span>
                                                                        </td>
                                                                    </tr>
                                                                    <?php 
                                                                        $total = $total + ($values["product_quantity"] * $values["product_price"]);  
                                                                    }
                                                                    ?>
                                                                </tbody>
                                                                <tfoot>
                                                                    <tr class="order-total">
                                                                        <th style="font-weight: bold;">Tổng tiền</th>
                                                                        <th style="font-weight: bold;"><span class="woocommerce-Price-amount amount"><?php echo number_format($total, 2); ?> VNĐ</th>
                                                                    </tr>
                                                                    </tfoot>
                                                                        <?php } ?>
                                                            </table>
                                                        </div>
                                                        <div class="img-thanhtoan">
                                                            <img src="/images/bao-ve-nguoi-tieu-dung-khi-mua-hang-online.jpg" alt="">
                                                        </div>
                                                        <div class="form-row place-order">
                                                            <button type="submit" name="send_mail" class="btn btn-primary" id="submitPayment" style="padding:3px 30px; font-weight:bold; font-size:16px; margin-bottom:15px;background-color:#333; border:1px solid #fff;" ><?php if($lang == "vn"){echo "Hoàn tất mua hàng";}else{echo "Complete Shopping";}?></button>

                                                            <input type="hidden" id="wpnonce" name="_wpnonce" value="341d89a24a"><input type="hidden" name="_wp_http_referer" value="/structure-contruction/checkout/?wc-ajax=update_order_review">
                                                        </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        </form>
                                        <div class="clearfix"></div>
                                    </div>
                                
                                </div>
                            </div><!-- .entry-content -->
                        </div>
                    </div>
                </div>
            </div> <!-- Primary end -->
        </div>
    </div>
</div>

<script>
    $(document).ready(function () {
        //------------------------checkout-----------------------------
        $('.woocommerce-info').on('click', function (e) {
            if($(e.target).is('.click-here-to-login')){
                $('.vk-form-woo-login').slideToggle();
                return false;
            }
            if($(e.target).is('.click-here-entry-code')){
                $('.vk-check-coupon').slideToggle();
                return false;
            }
        });
        $('.vk-checkout-billing-left').on('click', function (e) {
            if($(e.target).is('.checkbox-create-account')){
                $('.checkbox-create-account-form').slideToggle();
            }
        });
    });
</script>