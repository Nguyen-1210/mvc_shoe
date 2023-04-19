<div class="content">
	<div class="d-flex mb-4 justify-content-sm-between w-100 align-items-center">
		<h3 class="title-product">DANH SÁCH SẢN PHẨM</h3>
		<a href="/admin/add_Category" class="title-product">THÊM DANH MỤC<i class="fa-solid fa-right ms-2"></i></a>
	</div>
	<table class="list-product-admin table table-bordered">
		<thead>
		<tr class="text-center d-flex align-items-center">
			<th class="title" style="width: 10%">ID</th>
			<th class="title name-list-product" style="width: 20%">TÊN DANH MỤC</th>
			<th class="title" style="width: 15%">Ngày tạo</th>
			<th class="title" style="width: 15%">Ngày cập nhật</th>
			<th class="title" style="width: 20%">Trạng thái</th>
			<th class="title std" style="width: 20%">THAO TÁC</th>
		</tr>
		</thead>
		<tbody>
        <?php
        if (!(empty($category) ?? '')):
            foreach ($category as $item):
                ?>
				<tr class="d-flex" style="height: 50px;">
					<td class="title d-flex justify-content-center align-items-center" style="width: 10%"><?= $item['id'] ?? '' ?></td>
					<td class="title name-list-product d-flex justify-content-center align-items-center" style="width: 20%"><?= $item['name'] ?? '' ?></td>
					<td class="title name-list-product d-flex justify-content-center align-items-center" style="width: 15%"><?= date('d-m-Y',
                            strtotime($item['create_at'])) ?? '' ?></td>
					<td class="title name-list-product d-flex justify-content-center align-items-center" style="width: 15%"><?= date('d-m-Y',
                            strtotime($item['update_at'])) ?? '' ?></td>
					<td class="title name-list-product d-flex justify-content-center align-items-center" style="width: 20%">
                        <?php
                        if ($item['status'] = 1){
                            echo 'Đang hoạt động';
                        }else{
                            echo 'Đã đóng';
                        }
                        ?>
					</td>
					<td class="title d-flex justify-content-around align-items-center std" style="width: 20%">
						<a onclick="return confirm('Bạn có chắc chắn xóa <?= $item['name'] ?>')" href="/admin/delete_Category?id=<?= $item['id'] ?? '' ?>" class="title"><i class="fa-solid fa-trash"></i></a>
						<a href="/admin/edit_Category?id=<?= $item['id'] ?? '' ?>" class="title"><i class="fa-solid fa-pen-to-square"></i></a>
					</td>
				</tr>
            <?php endforeach;
        else: ?>
		</tbody>
	</table>
	<p class="title-product">Đang cập nhật ...</p>
    <?php endif; ?>
</div>