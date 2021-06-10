<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin 🛡 - Quero Emprego</title>
    <link rel="stylesheet" href="<?= $_ENV['BASE_URL'] . 'app/assets/libraries/bootstrap.css' ?>">
    <link rel="stylesheet" href="<?= $_ENV['BASE_URL'] . 'app/assets/css/' . $css ?> " >
    <script src="<?= $_ENV['BASE_URL'] . 'app/assets/libraries/bootstrap.js' ?> "></script>
    <script src="<?= $_ENV['BASE_URL'] . 'app/assets/libraries/jquery.js' ?> "></script>
    <script src="<?= $_ENV['BASE_URL'] . 'app/assets/js/' . $js?> "></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div id="all">
        <div id="boxLogin">
            <div id="title-area">
                <h1 class="text-center">Quero Emprego</h1>
                <H4 class="text-danger text-center">Área do administrador</H4>
            </div>

            <div id="inputs-login">
                <div class="form-group">
                    <div class="label-input">Email</div>
                    <input type="email" required class="inputs">
                </div>

                <div class="form-group">
                    <div class="label-input">Senha</div>
                    <input type="password" class="inputs">
                </div>

                <div id="button-form">
                    <button id="button-submit" class="btn btn-success">Entrar</button>

                    <hr data-content="OU" class="hr-text">

                    <a href="<?=$git_login?>" id="button-login-github-a">
                        <div id="button-login-github">
                            <div id="button-login-github-icon"><i id="icon-btn-github" class="fab fa-github"></i></div>
                            <div id="button-login-github-text">Login with GitHub</div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <input type="hidden" id="base_url" value="<?=$_ENV['BASE_URL']?>">
</body>
</html>