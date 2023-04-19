<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="apple-touch-icon" sizes="76x76" href="<?= _WEB_ROOT ?>public/images/favicon.png">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" type="image/x-icon" href="<?= _WEB_ROOT ?>/public/images/favicon.png">
	<title><?= (!empty($page_title)) ? $page_title : 'WEBSITE N & T' ?></title>
	<!-- Link css fontawesome -->
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v6.0.0-beta3/css/all.css">
	<!-- Link css bootstrap 5.3.0 -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
	<!-- Link css customer -->
	<link rel="stylesheet" href="<?= _WEB_ROOT ?>/public/scss/style/style.min.css">

</head>
<body>

<?php

use App\Controllers\BaseController;
	
	BaseController::render('shared/client_header', $data);
	BaseController::render($content, $data);
	BaseController::render('shared/client_footer', $data);
?>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
<script src="<?= _WEB_ROOT ?>/public/js/web.js"></script>
</body>
</html>