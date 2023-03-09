<?php
	$limit = 9;
	function search ($lang, $trang, $limit) {
		if (isset($_POST['q'])) {
			$q = $_POST['q'];
			$q = trim($q);
	        $q = vi_en1($q);	        
		} else {
			$q = $_GET['search'];
        	$q = str_replace('-', ' ', $q);
		}

		$start = $trang * $limit;
		global $conn_vn;
		$sql = "SELECT * FROM product_languages INNER JOIN product ON product_languages.product_id = product.product_id WHERE product_languages.friendly_url like '%$q%' And product_languages.languages_code = '$lang'";
		$result = mysqli_query($conn_vn, $sql);
		$count = mysqli_num_rows($result);

		$sql = "SELECT * FROM product_languages INNER JOIN product ON product_languages.product_id = product.product_id WHERE product_languages.friendly_url like '%$q%' And product_languages.languages_code = '$lang' LIMIT $start,$limit";
		$result = mysqli_query($conn_vn, $sql);
		$rows = array();
		while ($row = mysqli_fetch_assoc($result)) {
			$rows[] = $row;
		}
		$return = array(
				'data' => $rows,
				'count' => $count,
				'q' => $q
			);
		return $return;
	}
	$rows = search($lang, $trang, $limit);
?>
<?php include DIR_BREADCRUMBS."MS_BREADCRUMS_AOCUOI_0001.php";?>
<div id="gn-aocuoi-sanpham" style="padding: 50px 0">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <?php 
                    $d = 0;
                    foreach ($rows['data'] as $row) {
                        $d++;
                        $action_product = new action_product();
                        $rowLang1 = $action_product->getProductLangDetail_byId($row['product_id'],$lang);
                        $row1 = $action_product->getProductDetail_byId($row['product_id'],$lang); 
                ?>
                    <div class="col-md-4">
                        <div class="gb-product-items">
                            <a href="/<?= $rowLang1['friendly_url'] ?>">
                                <img src="/images/<?= $row1['product_img'] ?>" alt="" class="img-responsive">
                            </a>
                            <h2><a href="/<?= $rowLang1['friendly_url'] ?>"><?= $rowLang1['lang_product_name'] ?></a></h2>
                            <div class="price"><?= number_format($row1['product_price']) ?> vnđ</div>
                            <?php include DIR_CART."MS_CART_AOCUOI_0001.php";?>
                        </div>
                    </div>
                <?php } ?>
                <?php include DIR_PAGINATION."MS_PAGINATION_AOCUOI_0008.php";?>
            </div>
            <div class="col-md-3">
                <?php include DIR_SIDEBAR."MS_SIDEBAR_AOCUOI_0008.php";?>
                <?php include DIR_SIDEBAR."MS_SIDEBAR_AOCUOI_0001.php";?>
                <?php include DIR_SIDEBAR."MS_SIDEBAR_AOCUOI_0005.php";?>
            </div>
        </div>
        
    </div>
</div>