<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
    <link rel="stylesheet" href="<?=$_ENV['BASE_URL']?>app/assets/css/template.css">
    <link rel="stylesheet" href="<?=$_ENV['BASE_URL']?>app/assets/css/<?=$css?>">
    <script src="<?=$_ENV['BASE_URL']?>app/assets/js/jquery.js"></script>
    <script src="<?=$_ENV['BASE_URL']?>app/assets/js/template.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR&display=swap" rel="stylesheet">
    <link href="<?=$_ENV['BASE_URL']?>/app/assets/libraries/bootstrap.css" rel="stylesheet">
    <link href="<?=$_ENV['BASE_URL']?>/app/assets/css/homolog-header.css" rel="stylesheet">
    <script src="<?=$_ENV['BASE_URL']?>app/assets/libraries/bootstrap.js"></script>
</head>
<body>
    <header id="header_inv">
        <div id="box-header">
            <div id="logo-area" onclick="window.location.href = '  <?= $_ENV['BASE_URL'] ?> ' ">
                QUERO EMPREGO
            </div>
        </div>
    </header>

    <?php $this->loadViewInTemplate($viewName, $viewData)?>

    <footer id="footer_bg">
        <hr>
        <p>rodape do site</p>
    </footer>
</body>
</html>