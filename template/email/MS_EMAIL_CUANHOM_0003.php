<?php
    $send_mail = new action_email();
    $send_mail->lien_he();
?>
<div class="gb-form-lienhe">
    <h3>Thông tin liên hệ</h3>
    <form action="" method="post">
        <div class="form-group">
            <label>Họ và tên</label>
            <input type="text" name="name" class="form-control" required="">
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" class="form-control" required="">
        </div>
        <div class="form-group">
            <label>Điện thoại</label>
            <input type="tel" name="phone" class="form-control" required="">
        </div>
        <div class="form-group">
            <label>Nội dung</label>
            <textarea class="input-xlarge form-control" id="message" name="note" rows="8"></textarea>
        </div>

        <button class="btn btn-gui" type="submit" name="lien_he">GỬI LIÊN HỆ</button>
    </form>
</div>