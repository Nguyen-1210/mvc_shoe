<main class="main-content" style="margin-top: 200px;">
	<div class="listProduct container-xxl mt-5 px-4">
		<div class="row">
			<h2 class="list-gender mb-2 ms-2">Giới tính</h2>
			<div class="col-lg-2 border-end border-1 border-dark">
				<div class="navbar-list">
					<div class="navbar-menu px-2">
						<nav class="navbar navbar-expand-lg navbar-dark w-100">
							<ul class="nav-lists d-flex flex-column w-100">
								<li class="nav-item my-2">
									<a href="/genderMen" class="nav-link-menu-gender">Nam</a>
								</li>
								<li class="nav-item my-2">
									<a href="/genderWomen" class="nav-link-menu-gender">Nữ</a>
								</li>
								<li class="nav-item my-2">
									<a href="/genderKid" class="nav-link-menu-gender">Trẻ em</a>
								</li>
							</ul>
						</nav>
					</div>
				</div>
			</div>

			<div class="col-lg-10">
				<div class="row">
					<?php
					if (!(empty($listProducts) ?? '')): foreach ($listProducts as $item):
							if (file_exists($_SERVER['DOCUMENT_ROOT'] . '/public/images/' . $item['thumbnail'])) {
								$avatar = _WEB_ROOT . '/public/images/' . $item['thumbnail'];
							} else {
								$avatar = _WEB_ROOT . '/' . $item['thumbnail'];
							}
							if ($item['percent_sale'] == 0) {
								$percent_sale = "";
								$style = 'style="display: none";';
								$price_new = $item['price'] ?? "";
							} else {
								$style = "";
								$price = $item['price'] ?? "";
								$percent_sale = $item['percent_sale'] ?? "";
								$price_new = $price - $price * $percent_sale / 100;
							}
							?>
							<?php
							if ($item['percent_sale'] != 0 || $item['percent_sale'] == 0) {
								?>
								<div class="card col-lg-4">
									<a href="/detail_Product?id=<?= $item['id'] ?? '' ?>">
										<span class="card-discount" <?= $style ?>> <?= $percent_sale ?>%</span>
										<img src="<?= $avatar ?>" style="height: 290px;" class="card-img-top card-img" alt="...">
										<div class="card-body px-0">
											<div class="card-left">
												<h5 class="card-color">1 color</h5>
												<h2 class="card-name">
													<?= $item['title'] ?? '' ?>
												</h2>
												<span class="card-gender">Giày nữ [2 review]</span>
											</div>
											<div class="card-right">
												<h3 class="card-price-new text-end">
													<?= number_format(
														$price_new,
														0,
														',',
														'.'
													) ?>đ
												</h3>
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
					else: ?>
					</div>
				</div>

				<p class="title-product">Sản phẩm đang cập nhật ...</p>
			<?php endif; ?>
		</div>

	</div>

	<!-- brand link -->
</main>
<div class="brand">
	<a href="https://us.puma.com/us/en" class="link"><img src="<?= _WEB_ROOT ?>/public/images/Symbole-Puma.png"
			alt=""></a>
	<a href="https://www.nike.com/vn/" class="link">
		<img src="<?= _WEB_ROOT ?>/public/images/Nike-Logo.svg" alt="">
	</a>
	<a href="https://www.converse.id/" class="link"><img src="<?= _WEB_ROOT ?>/public/images/converse.svg" alt=""></a>
</div>
<!--  -->