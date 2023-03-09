<?php 
	function uploadPicture($src, $img_name, $img_temp){
        $src = $src.$img_name;
        if (!@getimagesize($src)){
            if (move_uploaded_file($img_temp, $src)) {
                return true;
            }
        }
    }

    function editColor ($id) {
    	$src= "../images/";
    	global $conn_vn;
    	if (isset($_POST['edit_color'])) {
    		$subImage = isset($_POST['subImage']) ? $_POST['subImage'] : '';

    		if (isset($_FILES['fileUpload1']) && $_FILES['fileUpload1']['name'] != "") {
                $img = $_FILES['fileUpload1'];
                uploadPicture($src, $img['name'], $img['tmp_name']); 
                $img_name = $img['name'];
            }else{
                $img_name = $_POST['product_img'];
            }
            $sub_img = array();
            if(isset($_FILES['fileUpload2']) && $_FILES['fileUpload2']['name'] != ""){
                foreach (array_combine($_FILES['fileUpload2']['name'], $_FILES['fileUpload2']['tmp_name']) as $name => $tmp_name) {

                    if ($name != '' && $name != ' ') {

                        uploadPicture($src, $name, $tmp_name);

                        $sub_img[] = json_encode(array('image'=>$name));

                    }

                }
            }

            if ($subImage) {

                foreach ($subImage as $key => $val) {

                    $sub_img[] = json_encode(array('image'=>$val));

                }

            }

            $sub_img = json_encode($sub_img);
    		$color_name = trim($_POST['color_name']);

    		// $sql = "INSERT INTO color (product_id, color_name, color_img, color_img_sub) VALUES (?, ?, ?, ?)";
    		$sql = "UPDATE color SET color_name = ?, color_img = ?, color_img_sub = ? WHERE color_id = ?";
    		$stmt = $conn_vn->prepare($sql);
    		$stmt->bind_param('sssi', $color_name, $img_name, $sub_img, $id);
    		$stmt->execute();
            echo '<script type="text/javascript">alert("Bạn đã sửa màu sản phẩm thành công.");</script>';
    	}
    }
    editColor($_GET['id']);

    function getColor ($id) {
    	global $conn_vn;
    	$sql = "SELECT * FROM color WHERE color_id = $id";
    	$result = mysqli_query($conn_vn, $sql);
    	$row = mysqli_fetch_assoc($result);
    	return $row;
    }
    $color = getColor($_GET['id']);
?>

<script src="js/previewImage.js"></script>
<script>

    $(document).ready(function() {


        $("input[id=fileUpload2").previewimage({

            div: "#preview2",

            imgwidth: 90,

            imgheight: 90

        });

    });

</script>
<form action="" method="post" enctype="multipart/form-data">
    <div class="rowNodeContentPage">
        <div class="leftNCP">
            <span class="titLeftNCP">Nội dung trang</span>
            <p class="subLeftNCP">Nhập tiêu đề và nội dung cho trang<br /><br /></p>     
            <p class="subLeftNCP">Chọn ảnh đại diện. Tỉ lệ hình ảnh yêu cầu là 4x3.</p> 
             <div id="wrapper">

                <input id="fileUpload" type="file" name="fileUpload1" onchange="showImage(this)" />
                <br />
                <div id="image-holder">
                	<?php 
	                    if ($color['color_img'] != '') {
	                    ?>
	                        <img src="../images/<?= $color['color_img']?>" class="img-responsive" alt="Image">
	                        <input type="hidden" name="product_img" value="<?= $color['color_img']?>">
	                    <?php
	                    }
	                ?>
                </div>

            </div>  
        </div>
        <div class="boxNodeContentPage">
            <p class="titleRightNCP">Tên màu</p>
            <input type="text" class="txtNCP1" name="color_name" value="<?= $color['color_name'] ?>" required/>

            <br>
            <h3>Ảnh phụ màu</h3>
            <input type="file" name="fileUpload2" id="fileUpload2">
            <div class="preview2" id="preview2"> 
                <?php
                    // var_dump($guarantee_detail['image']);
                    $array = json_decode($color['color_img_sub']);//var_dump($array);

                    foreach ($array as $key => $val) {
                        // echo $val;
                        $img = json_decode($val, true);

                        if ($img != '') {

                            ?>

                                <div class="sub_image_product">

                                    <input type="hidden" name="subImage[]" value="<?= $img['image']?>">

                                    <img src="../images/<?= $img['image']?>" alt="">

                                    <p data-upload-preview="fileUpload2[]-0" style="cursor: pointer;">Xóa ảnh</p>

                                </div>

                            <?php                            

                        }

                    }

                ?>
            </div>

            <a href="/admin/?page=mau-san-pham&id=<?= $_GET['pro'] ?>">Quay lại</a>
        </div>

    </div><!--end rowNodeContentPage-->
    
    <button name="edit_color" class="btn btnSave" type="submit" <?php echo ($_SESSION['admin_role']==2)?'style="display: none;"':'';?> >Lưu</button>
</form>
            
            <p class="footerWeb">Cảm ơn quý khách hàng đã tin dùng dịch vụ của chúng tôi<br />Sản phẩm thuộc Công ty TNHH Truyền Thông Và Công Nghệ GoldBridge Việt Nam</p>