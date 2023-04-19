<div class="content">
	<h1 class="fs-3 title-product text-center">THÊM SẢN PHẨM</h1>
	<div class="d-flex my-4 justify-content-sm-between w-100 align-items-center">
		<a href="/admin/list_Category" class="title-product mb-4 d-block ms-2"><i class="fa-solid fa-left me-2"></i>DANH SÁCH DANH MỤC</a>
	</div>
	<form action="<?= $action ?>" method="POST" class="formAdProduct">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12">
				<div class="form-admin">
					<div class="mb-2 d-flex justify-content-center align-items-center">
						<label for="title" class="form-label w-25">Tên danh mục</label>
						<input type="text" name="title" id="title" class="form-control" placeholder="Nhập tên danh mục" aria-describedby="helpId">
					</div>
					<div class="d-flex justify-content-end">
							<span id="helpId" class="text-muted text-right"> <?php
                                echo $_SESSION['error']['title'] ?? '';
                                unset($_SESSION['error']['title']); ?></span>
					</div>
				</div>
			</div>
		</div>
		<button type="submit" class="btn w-100 btn-outline-custom">THÊM DANH MỤC</button>
	</form>
</div>




