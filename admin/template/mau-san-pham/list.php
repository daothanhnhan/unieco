<?php 
	$id = $_GET['id'];
	function listColor ($id) {
		global $conn_vn;
		$sql = "SELECT * FROM color WHERE product_id = $id";
		$result = mysqli_query($conn_vn, $sql);
		$rows = array();
		$num = mysqli_num_rows($result);
		if ($num > 0) {
			while ($row = mysqli_fetch_assoc($result)) {
				$rows[] = $row;
			}
		}
		return $rows;
	}
	$list_color = listColor($id);
?>
<h1><a href="/admin/?page=them-mau&id=<?= $id ?>">Thêm</a></h1>

<div class="boxPageNews">
        
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Tên màu</th>
                    <th>Ảnh</th>
                    <th>Hoạt động</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    foreach ($list_color as $item) {
                    ?>
                        <tr>
                            <td><a href="/admin/?page=sua-mau&id=<?= $item['color_id'] ?>&pro=<?= $id ?>" title=""><?= $item['color_name']; ?></a></td>
                            <td><img src="/images/<?= $item['color_img']?>" width="30" height="30"> </td>
                            <?php if ($_SESSION['admin_role']==1) { ?>
                            <td><a href="/admin/?page=xoa-mau&id=<?= $item['color_id'] ?>&pro=<?= $id ?>" onclick="return confirm('bạn có trắc muốn xóa.');" style="float: none;">DEL</a> | <a href="/admin/?page=sua-mau&id=<?= $item['color_id'] ?>&pro=<?= $id ?>" style="float: none;">EDIT</a></td>
                            <?php } ?>
                        </tr>
                    <?php
                    }
                ?>
            </tbody>
        </table>
 
    </div>
    <p class="footerWeb">Cảm ơn quý khách hàng đã tin dùng dịch vụ của chúng tôi<br />Sản phẩm thuộc Công ty TNHH Truyền Thông Và Công Nghệ GoldBridge Việt Nam</p>