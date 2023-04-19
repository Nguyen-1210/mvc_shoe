<div class="content">
	<a href="/admin/listProducts" class="title-product mb-4 d-block ms-2"><i class="fa-solid fa-left me-2"></i>DANH SÁCH SẢN PHẨM</a>
	<form action="<?= $action ?>" method="POST" class="formAdProduct" enctype="multipart/form-data">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12">
				<div class="form-admin">
					<div class="mb-2 d-flex justify-content-center align-items-center">
						<label for="title" class="form-label w-25">Tên sản phẩm</label>
						<input type="text" name="title" id="title" class="form-control" placeholder="Nhập tên sản phẩm" aria-describedby="helpId">
					</div>
					<div class="d-flex justify-content-end">
						<small id="helpId" class="text-muted">messages</small>
						<span id="helpId" class="text-muted text-right"> <?php
                            echo $_SESSION['error']['title'] ?? '';
                            unset($_SESSION['error']['title']); ?></span>
					</div>
				</div>
			</div>
		</div>
		<div class="row my-4">
			<div class="col-lg-12 col-md-12 col-sm-12">
				<div class="form-admin">
					<div class="mb-2 d-flex justify-content-center align-items-center">
						<label for="price" class="form-label w-25">Giá sản phẩm</label>
						<input type="number" name="price" id="price" class="form-control" placeholder="Nhập giá sản phẩm" min=0 aria-describedby="helpId">
					</div>
					<div class="d-flex justify-content-end">
						<small id="helpId" class="text-muted">messages</small>
						<span id="helpId" class="text-muted text-right"> <?php
                            echo $_SESSION['error']['title'] ?? '';
                            unset($_SESSION['error']['title']); ?></span>
					</div>
				</div>
			</div>
		</div><div class="row my-4">
			<div class="col-lg-12 col-md-12 col-sm-12">
				<div class="form-admin">
					<div class="mb-2 d-flex justify-content-center align-items-center">
						<label for="price_sale" class="form-label w-25">Giảm giá</label>
						<input type="number" name="price_sale" id="price_sale" class="form-control" placeholder="Nhập giá sản phẩm" min=0 aria-describedby="helpId">
					</div>
					<div class="d-flex justify-content-end">
						<small id="helpId" class="text-muted">messages</small>
						<span id="helpId" class="text-muted text-right"> <?php
                            echo $_SESSION['error']['title'] ?? '';
                            unset($_SESSION['error']['title']); ?></span>
					</div>
				</div>
			</div>
		</div>
		<div class="row my-4">
			<div class="col-lg-12 col-md-12 col-sm-12">
				<div class="form-admin">
					<div class="mb-2 d-flex justify-content-center align-items-center">
						<label for="thumbnail" class="form-label w-25">Hình ảnh</label>
						<input type="file" name="thumbnail" id="thumbnail" class="form-control" aria-describedby="helpId">
					</div>
					<div class="d-flex justify-content-end">
						<small id="helpId" class="text-muted">messages</small>
						<span id="helpId" class="text-muted text-right"> <?php
                            echo $_SESSION['error']['title'] ?? '';
                            unset($_SESSION['error']['title']); ?></span>
					</div>
				</div>
			</div>
		</div>
		<div class="row my-4">
			<div class="col-lg-12 col-md-12 col-sm-12">
				<div class="form-admin">
					<div class="mb-2 d-flex justify-content-center align-items-center">
						<label for="description" class="form-label w-25">Mô tả</label>
						<textarea name="description" id="description" class="form-control" placeholder="Nhập mô tả"></textarea>
					</div>
					<div class="d-flex justify-content-end">
						<small id="helpId" class="text-muted">messages</small>
						<span id="helpId" class="text-muted text-right"> <?php
                            echo $_SESSION['error']['title'] ?? '';
                            unset($_SESSION['error']['title']); ?></span>
					</div>
				</div>
			</div>
		</div>
		<div class="row my-4">
			<div class="col-lg-12 col-md-12 col-sm-12">
				<div class="form-admin">
					<div class="mb-2 d-flex justify-content-center align-items-center">
						<label for="selects" class="form-label w-25">Danh mục</label>
						<select class="form-select form-select-lg form-control" name="selects" id="selects">
							<option value="nike" style="background-color:red;">New Nike</option>
						</select>
					</div>
					<div class="d-flex justify-content-end">
						<small id="helpId" class="text-muted">messages</small>
						<span id="helpId" class="text-muted text-right"> <?php
                            echo $_SESSION['error']['title'] ?? '';
                            unset($_SESSION['error']['title']); ?></span>
					</div>
				</div>
			</div>
		</div>
		<button type="submit" class="btn btn-outline-custom w-100">THÊM SẢN PHẨM</button>
	</form>
</div>




