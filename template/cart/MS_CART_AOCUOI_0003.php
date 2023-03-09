<?php 
	$total_cart = 0;
	if (isset($_SESSION['shopping_cart'])) {
		$total = $_SESSION['total'];
		foreach ($_SESSION['shopping_cart'] as $v) {
			$total_cart++;
		}
	}
?>
<div class="gb-cart_search">
    <ul>
        <li>
            <a href="/gio-hang">
                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
            </a>
            <span><?= $total_cart ?></span>
        </li>
        <li><a href="/"><i class="fa fa-search" aria-hidden="true"></i></a></li>
    </ul>
</div>