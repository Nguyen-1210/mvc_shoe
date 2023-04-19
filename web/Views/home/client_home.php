<main class="main-content">

	<!-- carousel slide banner-->
	<div class="carousel-banner">
		<div id="carouselId" class="carousel slide" data-bs-ride="carousel">
			<div class="carousel-inner" role="listbox">
				<div class="carousel-item active">
					<div class="carousel-slide">
						<img src="<?= _WEB_ROOT ?>/public/images/carousel/9b136a90510b4b566f6f9528de7eb186ca44e8ac-1440x500.webp" class="d-block image-banner w-100" alt="">
						<div class="carousel-title">
							<h1 class="title-heading">
								Chắc chắn </h1>
							<span>Giày Nike Widhorse 8</span>
						</div>
					</div>
				</div>
				<div class="carousel-item">
					<div class="carousel-slide">
						<img src="<?= _WEB_ROOT ?>/public/images/carousel/nike-just-do-it.jpg" class="d-block image-banner w-100" alt="">
						<div class="carousel-title">
							<h1 class="title-heading">
								Chắc chắn </h1>
							<span>Giày Nike Widhorse 8</span>
						</div>
					</div>
				</div>
				<div class="carousel-item">
					<div class="carousel-slide">
						<img src="<?= _WEB_ROOT ?>/public/images/carousel/woman_s_collection_ind_main.jpg" class="d-block image-banner w-100" alt="">
						<div class="carousel-title">
							<h1 class="title-heading">
								Chắc chắn </h1>
							<span>Giày Nike Widhorse 8</span>
						</div>
					</div>
				</div>
			</div>
			<button class="btn-carousel-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
				<i class="fa-solid fa-chevron-left" aria-hidden="true"></i>
			</button>
			<button class="btn-carousel-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
				<i class="fa-solid fa-chevron-right" aria-hidden="true"></i>
			</button>
		</div>
	</div>

	<!-- view product-->
	<div class="container-xxl px-2 mt-5">
		<div class="view">
			<div class="view-heading">
				<h2 class="view-title">
					khám phá bộ sưu tập </h2>
				<div class="btn-view">
					<button class="pre-btn"><i class="fa-light fa-angle-left"></i></button>
					<button class="nxt-btn"><i class="fa-light fa-angle-right"></i></button>
				</div>
			</div>
			<div class="product-container">
                <?php
                if (!(empty($collection) ?? '')):
                    foreach ($collection as $item):
                        if (file_exists($_SERVER['DOCUMENT_ROOT'] . '/public/images/' . $item['thumbnail'])){
                            $avatar = _WEB_ROOT . '/public/images/' . $item['thumbnail'];
                        }else{
                            $avatar = _WEB_ROOT . '/' . $item['thumbnail'];
                        }
                        if ($item['percent_sale'] == 0){
                            $percent_sale = "";
                            $style      = 'style="display: none";';
                            $price_new  = $item['price'] ?? "";
                        }else{
                            $style      = "";
                            $price = $item['price'] ?? "";
							$percent_sale = $item['percent_sale'] ?? "";
                            $price_new  = $price - $price * $percent_sale / 100;
                        }
                        ?><?php
                        if ($item['percent_sale'] != 0 || $item['percent_sale'] == 0 ){
                            ?>
							<div class="card" style="width: 22rem;">
								<a href="/detail_Product?id=<?= $item['id'] ?? '' ?>">
									<span class="card-discount"<?= $style ?>> <?= $percent_sale ?>%</span>
									<img src="<?= $avatar ?>" class="card-img-top card-img" alt="...">
									<div class="card-body px-0">
										<div class="card-left">
											<h5 class="card-color">1 color</h5>
											<h2 class="card-name"><?= $item['title'] ?? '' ?></h2>
											<span class="card-gender"><?= $item['gender'] ?? '' ?>  [2 review]</span>
										</div>
										<div class="card-right">
											<h3 class="card-price-new text-end"><?= formatPrice($price_new)?></h3>
											<h3 class="card-price-old text-end" <?= $style ?>>
                                                <?= formatPrice($price)?></h3>
										</div>
									</div>
								</a>
							</div>
                        <?php }
                    endforeach;
                endif; ?>
			</div>
		</div>
	</div>

	<!-- brand-img -->
	<div class="brand-image">
		<img src="<?= _WEB_ROOT ?>/public/images/d23a623306fb4e959d5cf7f756a9cec70e9e7974-1440x500.webp" class="image">
		<img src="<?= _WEB_ROOT ?>/public/images/da8d5c07-8ee5-4c12-a715-eff2a71a2c69.webp" class="image">
		<img src="<?= _WEB_ROOT ?>/public/images/mail_ind_desktop.jpg" class="image">
	</div>

	<!-- listProduct -->
	<div class="listProduct container-xxl my-5 px-4">
		<div class="row">
		<?php
                if (!(empty($listProducts) ?? '')):
                    foreach ($listProducts as $item):
                        if (file_exists($_SERVER['DOCUMENT_ROOT'] . '/public/images/' . $item['thumbnail'])){
                            $avatar = _WEB_ROOT . '/public/images/' . $item['thumbnail'];
                        }else{
                            $avatar = _WEB_ROOT . '/' . $item['thumbnail'];
                        }
                        if ($item['percent_sale'] == 0){
                            $percent_sale = "";
                            $style      = 'style="display: none";';
                            $price_new  = $item['price'] ?? "";
                        }else{
                            $style      = "";
                            $price = $item['price'] ?? "";
							$percent_sale = $item['percent_sale'] ?? "";
                            $price_new  = $price - $price * $percent_sale / 100;
                        }
                        ?><?php
                        if ($item['percent_sale'] != 0 || $item['percent_sale'] == 0 ){
                            ?>
							<div class="card col-lg-3">
								<a href="/detail_Product?id=<?= $item['id'] ?? '' ?>">
									<span class="card-discount"<?= $style ?>> <?= $percent_sale ?>%</span>
									<img src="<?= $avatar ?>" style="width: 290px; height: 290px;" class="card-img-top card-img" alt="...">
									<div class="card-body px-0">
										<div class="card-left">
											<h5 class="card-color">1 color</h5>
											<h2 class="card-name"><?= $item['title'] ?? '' ?></h2>
											<span class="card-gender"><?= $item['gender'] ?? '' ?>  [2 review]</span>
										</div>
										<div class="card-right">
											<h3 class="card-price-new text-end"><?= formatPrice($price_new)?></h3>
											<h3 class="card-price-old text-end" <?= $style ?>>
                                                <?= number_format($price,
                                                    0, ',', '.') ?>đ</h3>
										</div>
									</div>
								</a>
							</div>
                        <?php }
                    endforeach;
                endif; ?>
		</div>
	</div>
	<!-- brand link -->
	<div class="brand">
		<a href="https://us.puma.com/us/en" class="link"><img src="<?= _WEB_ROOT ?>/public/images/Symbole-Puma.png" alt=""></a>
		<a href="https://www.nike.com/vn/" class="link">
			<img src="<?= _WEB_ROOT ?>/public/images/Nike-Logo.svg" alt="">
		</a>
		<a href="https://www.converse.id/" class="link"><img src="<?= _WEB_ROOT ?>/public/images/converse.svg" alt=""></a>
	</div>
	<!--  -->
</main>

