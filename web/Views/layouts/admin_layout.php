<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="apple-touch-icon" sizes="76x76" href="<?= _WEB_ROOT ?>public/images/favicon.png">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" type="image/x-icon" href="<?= _WEB_ROOT ?>/public/images/favicon.png">
	<title><?= (!empty($page_title)) ? $page_title : 'WEBSITE N & T' ?></title>
	<!-- CSS Files -->
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v6.0.0-beta3/css/all.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
	<link href="<?= _WEB_ROOT ?>/public/scss/style/paper-dashboard.css" rel="stylesheet"/>
	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link href="<?= _WEB_ROOT ?>/public/scss/style/demo.css" rel="stylesheet"/>
	<link rel="stylesheet" href="<?= _WEB_ROOT ?>/public/scss/style/style.min.css">

</head>

<body class="">
<div class="wrapper ">
    <?php
    use App\Controllers\BaseController;
    BaseController::render('shared/admin_nav', $data);
    ?>
	<div class="main-panel">
        <?php
        BaseController::render('shared/admin_header', $data);
        BaseController::render($content, $data);
        ?>
	</div>
</div>
</div>
</div>
</div>
<script src = "https://ajax.googleapis.com/ajax/libs/jQuery/3.3.1/jQuery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="<?= _WEB_ROOT ?>/public/js/bootstrap.min.js"></script>
<script src="<?= _WEB_ROOT ?>/public/js/bootstrap-notify.js"></script>
<style>.ck.ck-editor{
  width: 100%;
}</style>
<script src="https://cdn.ckeditor.com/ckeditor5/37.0.1/classic/ckeditor.js"></script>
<script>
	ClassicEditor
        .create( document.querySelector( '#description' ) )
        .catch( error => {
            console.error( error );
        } );
</script>
<script src="<?= _WEB_ROOT ?>/public/js/web.js"></script>
</body>

</html>