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
                    <button class="btn btn-success">Entrar</button>
                    <a href="<?=$git_login?>"><button class='mt-4 btn btn-danger' onclick="loginGithub()">Entrar com github</button></a>
                </div>
            </div>
        </div>
    </div>

    <input type="hidden" id="base_url" value="<?=$_ENV['BASE_URL']?>">
</body>
</html>