<header class="header" id="header">
    <div class="container-xxl h-100 px-4">
        <div class="navbar-header d-flex justify-content-between align-items-center h-100">
            <div class="navbar-menu h-100 px-2 -bg-danger">
                <nav class="navbar navbar-expand-lg navbar-dark h-100 w-100">
                    <ul class="nav-lists d-flex justify-content-between align-items-center w-100">
                        <li class="nav-item">
                            <a href="/" class="nav-link-menu">Trang chủ</a>
                        </li>
                        <?php
                        if (!(empty($category) ?? '')) :
                            foreach ($category as $item) :
                        ?>
                            <li class="nav-item">
                                <a href="/listProductOfCategory?id=<?= $item['id']?>" class="nav-link-menu text-capitalize"><?= $item['name']?></a>
                            </li>
                        <?php
                            endforeach;
                        endif; ?>
                        <li class="nav-item">
                            <a href="#" class="nav-link-menu">Giảm giá</a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="navbar-brand d-flex justify-content-center align-items-center">
                <a href="/" class="brand-link"><img src="<?= _WEB_ROOT ?>/public/images/brand.png" alt="BRAND N & T" class="brand-img img-thumbnail"></a>
            </div>

            <div class="navbar-form">
                <form action="" class="form-search d-flex align-items-center">
                    <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="Bạn đang tìm kiếm ...">
                    <button type="submit" class="btn btn-primary"><i class="fa-solid fa-magnifying-glass"></i></button>
                </form>
            </div>
            <div class="navbar-contact d-flex justify-content-around align-items-center">
                <div class="cart-icon"><a href="#" class="navbar-link-icon"><i class="fa-regular fa-cart-shopping"></i></a></div>
                <div class="user-icon"><a href="/login" class="navbar-link-icon"><i class="fa-regular fa-user"></i></a>
                </div>
            </div>
        </div>
    </div>
</header>