<div class="content">
	<h1 class="fs-3 title-product text-center">SỬA DANH MỤC</h1>
	<div class="d-flex my-5 justify-content-sm-between w-100 align-items-center">
		<a href="/admin/list_Category" class="title-product"><i class="fa-solid fa-left me-2"></i>DANH SÁCH SẢN PHẨM</a>
	</div>
	<form action="<?= $action ?>" method="POST" class="formAdProduct">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12">
				<div class="form-admin">
					<div class="mb-2 d-flex justify-content-center align-items-center">
						<label for="title" class="form-label w-25">Tên danh mục</label>
						<input type="text" name="title" id="title" class="form-control text-capitalize" aria-describedby="helpId" required value="<?= ($category['name']) ?? '' ?>">
					</div>
					<div class="d-flex justify-content-end">
						<span id="helpId" class="text-muted text-right">messages</span>
					</div>
				</div>
			</div>
		</div>
		<div class="row my-4">
			<div class="col-lg-12 col-md-12 col-sm-12">
				<div class="form-admin">
					<div class="mb-2 d-flex justify-content-center align-items-center">
						<label for="title" class="form-label w-25">Trạng thái</label>
						<select class="form-select" name="status" aria-label="Default select example">
							<option <?= ($category['status']) ?? '' ?> value=""><?= ($category['status']) ?? '' ?></option>
						</select>
					</div>
				</div>
			</div>
		</div>
		<input type="hidden" name="id" value="<?= ($category['id']) ?? '' ?>">
		<button type="submit" class="btn w-100 btn-outline-custom">CẬP NHẬT DANH MỤC</button>
	</form>
</div>