<div class="detailProduct">
	<?php
	if (!(empty($product) ?? '')) :
		if (file_exists($_SERVER['DOCUMENT_ROOT'] . '/public/images/' . $product['thumbnail'])) {
			$avatar = _WEB_ROOT . '/public/images/' . $product['thumbnail'];
		} else {
			$avatar = _WEB_ROOT . '/' . $product['thumbnail'];
		}
		if ($product['percent_sale'] == 0) {
			$percent_sale = "";
			$style      = 'style="display: none";';
			$price_new  = $product['price'] ?? "";
		} else {
			$style      = "";
			$price = $product['price'] ?? "";
			$percent_sale = $product['percent_sale'] ?? "";
			$price_new  = $price - $price * $percent_sale / 100;
		}
	?><?php
					if ($product['percent_sale'] != 0 || $product['percent_sale'] == 0) {
					?>
	<div class="header">
		<h2 class="title-heading">N & T <span><i class="fa-solid fa-circle fs-6 mx-1"></i> Giày <?= ($product['gender']) ?? '' ?></span>
		</h2>
	</div>
	<div class="container-xxl px-5">
		<div class="container-details">
			<form action="<?= $action ?>" method="post" enctype="multipart/form-data">
				<div class="row">
					<div class="col-lg-8 d-flex align-items-center">
						<div class="img-small w-25">
							<div class="img-thumbnail">
								<img src="../public/images/products/air-max-90-mens-shoes-6n3vKB (1).png" alt="" class="featured-image">
							</div>
							<div class="img-thumbnail">
								<img src="../public/images/products/air-max-90-mens-shoes-6n3vKB (2).png" alt="" class="featured-image">
							</div>
							<div class="img-thumbnail">
								<img src="../public/images/products/air-max-90-mens-shoes-6n3vKB (3).png" alt="" class="featured-image">
							</div>
							<div class="img-thumbnail">
								<img src="../public/images/products/air-max-90-mens-shoes-6n3vKB.png" alt="" class="featured-image">
							</div>
						</div>
						<div class="img-full w-75 ms-4 h-100">
							<div class="img-thumbnail h-100">
								<img src="<?= $avatar ?>" alt="" class="big-image">
							</div>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="view-product-detail">
							<h2 class="product-name"><?= ($product['title']) ?? '' ?></h2>
							<span class="product-gender">giày nam [8 bình luận]</span>
							<div class="product-price d-flex align-items-center">
								<h3 class="price-new me-5 text-lowercase"><?= formatPrice($price_new) ?></h3>
								<h3 class="price-old" <?= $style ?>><?= formatPrice($price) ?></h3>
							</div>
							<div class="product-color d-flex ">
								<label for="color" class="formColor">Màu</label>
								<input type="submit" name="color" class="checkColor" value="" style="--color: yellow;">
							</div>
							<div class="product-size">
								<label for="size" class="formSize">Kích thước</label>
								<input type="submit" name="size" class="checkSize" value="37">
								<input type="submit" name="size" class="checkSize" value="37">
								<input type="submit" name="size" class="checkSize" value="37">
							</div>
							<div class="product-qty d-flex align-items-center">
								<label for="size" class="formQty">Số lượng</label>
								<div class="form-group d-flex align-items-center">
									<button class="btn btn-custom decrement-btn">-</button>
									<input type="text" class="qty text-center" value="1" disabled>
									<button class="btn btn-custom increment-btn">+</button>
								</div>
							</div>
							<input type="hidden" name="number" value="1">
							<input type="hidden" name="id" value="<?= $product['id'] ?>">
							<input type="hidden" name="name" value="<?= $product['title'] ?>">
							<input type="hidden" name="img" value="<?= $avatar ?>">
							<input type="hidden" name="price" value="<?= $price_new ?>">
							<div class="form-group-submit">
								<button type="submit" class="addCart" name="addCart">Thêm vào giỏ hàng</button>
							</div>
							<div class="form-group-submit">
								<button type="submit" class="buyCart" name="buyCart">Mua hàng</button>
							</div>
						</div>
						<h4 class="description mt-5">Mô tả
							<span>
								<?= ($product['description']) ?? '' ?>
							</span>
						</h4>
					</div>
				</div>
			</form>
	<?php }
				endif; ?>
		</div>

	</div>
</div>

<div class="comment-container">
	<h3 class="pull-left heading-comment">Đánh giá sản phẩm</h3>
	<form action="">
		<div class="container mb-5 pb-2">
			<div class="comment-post py-3 border-0">
				<div class="d-flex flex-start w-100 align-items-center">
					<img class="rounded-circle shadow-1-strong me-3" src="public/images/d23a623306fb4e959d5cf7f756a9cec70e9e7974-1440x500.webp" alt="avatar" width="80" height="80" />
					<div class="form-outline w-100">
						<textarea class="comment-content" id="textAreaExample" placeholder="Vui lòng nhập bình luận" rows="4" cols="20"></textarea>
					</div>
				</div>
				<div class="float-end mt-2 pt-1 btn-post">
					<button type="button" class="btn btn-primary btn-sm post">Đánh giá</button>
					<button type="button" class="btn btn-outline-primary btn-sm cancel">Hủy</button>
				</div>
			</div>
			<span class="draw"></span>
			<div class="media d-flex justify-content-between">
				<a class="media-user" href="#"><img class="media-object" src="https://bootdey.com/img/Content/avatar/avatar2.png" alt=""></a>
				<div class="media-body">
					<h4 class="media-heading">John Doe</h4>
					<p class="media-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum
						dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur
						adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor
						sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing
						elit.</p>
					<div class="media-footer d-flex justify-content-between align-items-center">
						<div class="media-footer-left">
							<span><i class="fa-solid fa-calendar-days me-2"></i>23/7/2023</span>
							<span><i class="fa-regular fa-thumbs-up me-2"></i>12</span>
						</div>
						<div class="media-footer-right">
							<button type="button" class="btn btn-outline-primary btn-sm like">Like</button>
							<button type="button" class="btn btn-primary btn-sm rep">Trả lời</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</form>
</div>

<div class="listProduct container-xxl my-5 px-4">
	<div class="row">
		<?php
		if (!(empty($listProducts) ?? '')) :
			foreach ($listProducts as $item) :
				if (file_exists($_SERVER['DOCUMENT_ROOT'] . '/public/images/' . $item['thumbnail'])) {
					$avatar = _WEB_ROOT . '/public/images/' . $item['thumbnail'];
				} else {
					$avatar = _WEB_ROOT . '/' . $item['thumbnail'];
				}
				if ($item['percent_sale'] == 0) {
					$percent_sale = "";
					$style      = 'style="display: none";';
					$price_new  = $item['price'] ?? "";
				} else {
					$style      = "";
					$price = $item['price'] ?? "";
					$percent_sale = $item['percent_sale'] ?? "";
					$price_new  = $price - $price * $percent_sale / 100;
				}
		?><?php
							if ($item['percent_sale'] != 0 || $item['percent_sale'] == 0) {
							?>
		<div class="card col-lg-3">
			<a href="/detail_Product?id=<?= $item['id'] ?? '' ?>">
				<span class="card-discount" <?= $style ?>> <?= $percent_sale ?>%</span>
				<img src="<?= $avatar ?>" style="width: 290px; height: 290px;" class="card-img-top card-img" alt="...">
				<div class="card-body px-0">
					<div class="card-left">
						<h5 class="card-color">1 color</h5>
						<h2 class="card-name"><?= $item['title'] ?? '' ?></h2>
						<span class="card-gender"><?= $item['gender'] ?? '' ?> [2 review]</span>
					</div>
					<div class="card-right">
						<h3 class="card-price-new text-end"><?= formatPrice($price_new) ?></h3>
						<h3 class="card-price-old text-end" <?= $style ?>>
							<?= number_format(
									$price,
									0,
									',',
									'.'
								) ?>đ</h3>
					</div>
				</div>
			</a>
		</div>
<?php }
						endforeach;
					else : ?>
	</div>
	<p class="title-product">Đang cập nhật ...</p>
<?php endif; ?>
</div>
</div>