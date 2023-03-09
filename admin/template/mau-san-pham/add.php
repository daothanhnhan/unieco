<?php 
	function uploadPicture($src, $img_name, $img_temp){
        $src = $src.$img_name;
        if (!@getimagesize($src)){
            if (move_uploaded_file($img_temp, $src)) {
                return true;
            }
        }
    }

    function addColor ($id) {
    	$src= "../images/";
    	global $conn_vn;
    	if (isset($_POST['add_color'])) {
    		if (isset($_FILES['fileUpload1']) && $_FILES['fileUpload1']['name'] != "") {
                $img = $_FILES['fileUpload1'];
                uploadPicture($src, $img['name'], $img['tmp_name']); 
                $img_name = $img['name'];
            }else{
                $img_name = '';
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
            $sub_img = json_encode($sub_img);
    		$color_name = trim($_POST['color_name']);

    		$sql = "INSERT INTO color (product_id, color_name, color_img, color_img_sub) VALUES (?, ?, ?, ?)";
    		$stmt = $conn_vn->prepare($sql);
    		$stmt->bind_param('isss', $id, $color_name, $img_name, $sub_img);
    		$stmt->execute();
            echo '<script type="text/javascript">alert("Bạn đã thêm màu sản phẩm thành công.");window.location.href="/admin/?page=mau-san-pham&id='.$id.'";</script>';
    	}
    }
    addColor($_GET['id']);
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

                </div>

            </div>        
        </div>
        <div class="boxNodeContentPage">
            <p class="titleRightNCP">Tên màu - Mã màu</p>
            <input type="text" class="txtNCP1" name="color_name" required/>
            
        </div>

        <div class="boxNodeContentPage">
            <h3>Ảnh phụ màu</h3>
            <input type="file" name="fileUpload2" id="fileUpload2">
            <div class="preview2" id="preview2"> 
                
            </div>
        </div>
    </div><!--end rowNodeContentPage-->
    
    <button name="add_color" class="btn btnSave" type="submit" <?php echo ($_SESSION['admin_role']==2)?'style="display: none;"':'';?> >Lưu</button>
</form>
            
            <p class="footerWeb">Cảm ơn quý khách hàng đã tin dùng dịch vụ của chúng tôi<br />Sản phẩm thuộc Công ty TNHH Truyền Thông Và Công Nghệ GoldBridge Việt Nam</p>