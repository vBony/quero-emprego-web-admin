<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
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
    <link rel="shortcut icon" href="<?= $_ENV['BASE_URL'].'/app/assets/favicon/favicon.ico' ?>" >
    <title><?=$title?></title>
</head>
<body>
    <header id="header-area">
        <div id="header-inv">

            <div id="logo-area-header">
                <div class="logo"> <div class="logo-style box-logo-1">Quero</div> <div class="logo-style box-logo-2">Emprego</div> </div>
                <div class="badge bg-danger" id="badge-logo-adm">Administrador</div>
            </div>

            <div id="menu-area-header">
                <div id="notification-header-area">
                    <div class="badge bg-secondary" id="num-notifications-header">4</div>
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

                <div id="user-data-section-lm">
                    <div id="box1-pa">
                        <div id="photo-area-lm">
                            <img src="<?=$user['photo']?>">
                        </div>
                    </div>

                    <div id="box2-pa">
                        <div id="name-area-lm">
                            <?= $user['primeiro_nome'] ?>
                        </div>

                        <div id="profession-area-lm">
                            <?= $user['c_descricao'] ?>
                        </div>
                    </div>
                </div>

                <div id="box3-pa">
                    <i class="fas fa-cog" id="icon-b3"></i>
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

<div id="menu-mobile-bg">
    <div id="menu-mobile-area">

        <div id="btn-close-menu-area">
            <div id="btn-close-menu-mobile" class="close-modal-user-edit">
                <i class="fas fa-times"></i>
            </div>
        </div>

        <div class="row-mm" id="user-area-mm">
            <div id="user-data-section-mm">
                <div id="box1-pa-mm">
                    <div id="photo-area-mm">
                        <img src="<?=$user['photo']?>">
                    </div>
                </div>

                <div id="box2-pa-mm">
                    <div id="name-area-mm">
                        <?= $user['primeiro_nome'] ?>
                    </div>

                    <div id="profession-area-mm">
                        <?= $user['c_descricao'] ?>
                    </div>
                </div>
            </div>

            <div id="box3-pa-mm">
                <i class="fas fa-cog" id="icon-b3-mm"></i>
            </div>
        </div>

        <div class="row-mm redirect-mm" data-idmm="home">
            <div class="opt-inv-mm">
                <div class="icon-mm-area">
                    <i class="fas fa-home icon-mm"></i>
                </div>

                <div class="text-mm-area">
                    Início
                </div>
            </div>
        </div>

        <div class="row-mm redirect-mm" data-idmm="colaboradores">
            <div class="opt-inv-mm">
                <div class="icon-mm-area">
                    <i id="icon-colaboradores-mm" class="fas fa-user-shield icon-mm"></i>
                </div>

                <div class="text-mm-area">
                    Colaboradores
                </div>
            </div>
        </div>

        <div class="row-mm"></div>

    </div>
</div>

<div class="modal fade" id="modal-user-settings" tabindex="-1" role="dialog" aria-labelledby="modal-edit-user" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title">Editar perfil</h5>
                <div id="btn-close-edit-user">
                    <i class="fas fa-times"></i>
                </div>
            </div>

            <div class="modal-body">
                <div id="content-modal" class="row">    
                    <div class="col col-lg-4 col-md-12 col-sm-12 col-12 mb-4">
                        <div id="image-area" class="mb-3">
                            <img src="<?=$user['url_avatar_web']?>">
                        </div>

                        <div id="upload-img-area" class="mb-3">
                            <label class="btn btn-primary" for="upload-img-area">
                                <input id="upload-img-area" type="file" class="d-none" name="eu-photo">
                                Alterar Foto
                            </label>
                        </div>

                        <div class="card">
                            <div class="card-body" id="icon-area">
                                <a href="" target="_blank" id="redirect-github">
                                    <div id="github-icon-area" class="icons-users-edit" title="Acessar GitHub">
                                        <i class="fab fa-github"></i>
                                    </div>
                                </a>

                                <div id="message-icon-area" class="icons-users-edit">
                                    <i class="fas fa-comment-alt"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col col-lg-6 col-md-12 col-sm-12 col-12">
                        <div class="row">
                            <div class="col-lg-12 form-group mb-3">
                                <label for="name-user-edit" class="form-label required">Nome completo:</label>
                                <input  id="name-user-edit" type="text" class="form-control" name="eu-nome" placeholder="Nome completo" value="<?= $user['nome'] ?>">
                                <div class="error-feedback" id="eu-nome-msg"></div>
                            </div>

                            <div class="col-lg-12 form-group mb-3">
                                <label for="email-user-edit" class="form-label">Email:</label>
                                <input  id="email-user-edit" type="email" name="eu-email" class="form-control" placeholder="Email" value=" <?= $user['email'] ?> ">
                                <div class="error-feedback" id="eu-email-msg"></div>
                            </div>

                            <div class="col-lg-12 from-group mb-3">
                                <label for="username-user-edit" class="form-label required">Nome de usuário:</label>
                                <!-- <input type="text" id="username-user-edit" name="eu-login_git" class="form-control is-invalid" placeholder="Nome de usuário" value="<?= $user['login_git'] ?>"> -->
                                <input  id="username-user-edit" type="text" name="eu-login_git" class="form-control" placeholder="Nome de usuário" value="<?= $user['login_git'] ?>">    
                                <div class="error-feedback" id="eu-login_git-msg"></div>
                            </div>  
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" id="btn-close-edit-user-footer">Cancelar</button>
                <button type="button" class="btn btn-primary" id="btn-submit-edit-user">
                    <div id="txt-btn">
                        Salvar
                    </div>
                    
                    <div class="spinner-border spinner-border-sm text-light" id="spin-btn" role="status">
                        <span class="sr-only">Loading...</span>
                    </div>
                </button>
            </div>

        </div>
    </div>
</div>

<input type="hidden" id="url" value="<?=$_ENV['BASE_URL']?>">
</html>