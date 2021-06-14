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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <header id="header-area">
        <div id="header-inv">

            <div id="logo-area-header">
                <div class="logo"> <div class="logo-style box-logo-1">Quero</div> <div class="logo-style box-logo-2">Emprego</div> </div>
                <span class="badge bg-danger">Administrador</span>
            </div>

            <div id="menu-area-header">
                <div id="notification-header-area">
                    <span class="badge bg-secondary" id="num-notifications-header">4</span>
                    <i class="fas fa-bell" id="icon-notification-header"></i>
                </div>
            </div>

        </div>
    </header>

    <div id="content-area">
        <div id="lateral-menu">
            <div id="profile-area-lm">

                <div id="box1-pa">
                    <div id="photo-area-lm">
                        <img src="<?=$user['url_avatar_web']?>">
                    </div>
                </div>

                <div id="box2-pa">
                    <div id="name-area-lm">
                        <?= $user['primeiro_nome'] ?>
                    </div>

                    <div id="profession-area-lm">
                        <?= $user['cargo'] ?>
                    </div>
                </div>

            </div>

            <div class="lm-inv">
                <div class="title-lm">Principal</div>
            </div>
        </div>
    </div>

    <?php $this->loadViewInTemplate($viewName, $viewData)?>

    <footer id="footer_bg">
    </footer>
</body>
</html>