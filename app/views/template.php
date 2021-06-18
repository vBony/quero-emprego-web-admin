<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <title>Document</title>
    <script src="<?=$_ENV['BASE_URL']?>app/assets/libraries/jquery.js"></script>
    <link rel="stylesheet" href="<?=$_ENV['BASE_URL']?>app/assets/css/template.css">
    <link rel="stylesheet" href="<?=$_ENV['BASE_URL']?>app/assets/css/<?=$css?>">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR&display=swap" rel="stylesheet">
    <link href="<?=$_ENV['BASE_URL']?>/app/assets/libraries/bootstrap.css" rel="stylesheet">
    <link href="<?=$_ENV['BASE_URL']?>/app/assets/css/homolog-header.css" rel="stylesheet">
    <script src="<?=$_ENV['BASE_URL']?>app/assets/libraries/bootstrap.js"></script>
    <script src="<?=$_ENV['BASE_URL'].'/app/assets/js/template.js'?>"></script>
    <script src="<?=$_ENV['BASE_URL'].'/app/assets/js/' . $js?>"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="<?=$_ENV['BASE_URL'].'/app/assets/libraries/sweetalert2.all.min.js'?>"></script>
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

                <div id="button-mobile-header">
                    <div class="bar1"></div>
                    <div class="bar2"></div>
                    <div class="bar3"></div>
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
                        <?= $user['nome'] ?>
                    </div>

                    <div id="profession-area-lm">
                        <?= $user['c_descricao'] ?>
                    </div>
                </div>

            </div>

            <div class="lm-inv">
                <div class="title-lm">Principal</div>
            </div>

            <div class="menu-option" data-id="home">
                <div class="opt-inv">
                    <div class="icon-mopt-area">
                        <i class="fas fa-home icon-mopt"></i>
                    </div>

                    <div class="text-mopt-area">
                        Início
                    </div>
                </div>
            </div>

            <div class="menu-option" data-id="colaboradores">
                <div class="opt-inv">
                    <div class="icon-mopt-area">
                        <i id="icon-colaboradores" class="fas fa-user-shield icon-mopt"></i>
                    </div>

                    <div class="text-mopt-area">
                        Colaboradores
                    </div>
                </div>
            </div>

            <div class="menu-option" data-id="none">
                <div class="opt-inv">
                    <div class="icon-mopt-area">
                        <i class="fas fa-home icon-mopt"></i>
                    </div>

                    <div class="text-mopt-area">
                        Ipsum
                    </div>
                </div>
            </div>

            <div class="menu-option" data-id="none">
                <div class="opt-inv">
                    <div class="icon-mopt-area">
                        <i class="fas fa-home icon-mopt"></i>
                    </div>

                    <div class="text-mopt-area">
                        Odor
                    </div>
                </div>
            </div>

        </div>

        <div id="content-divisor">
            <div id="app-area">
                <?php $this->loadViewInTemplate($viewName, $viewData)?>
            </div>
            
            <div id="footer-area">
                <div id="footer-inv">2021 © Quero Emprego. Design by vBony.</div>
            </div>
        </div>
    </div>

    <input type="hidden" id="base_url" value="<?=$_ENV['BASE_URL']?>">
</body>


</html>