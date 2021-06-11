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
            <div id="signal-error">
                <i class="fas fa-exclamation-circle"></i>
            </div>

            <div id="text-error-area">
                <h1>Oops!</h1>
                <div id="text-error">
                    <p>Você é não é um colaborador oficial da <b>Quero Emprego Web Admin</b>, por isso não pode acessar essa página.</p>
                </div>

                <div id="button-area">
                    <div class="btn btn-lg btn-warning" style="color: #F7FAFF !important" onclick="window.location.href = '<?=$_ENV['BASE_URL'] . 'login'?>' "><i class="fas fa-home" id="home-icon-btn"></i> Voltar</div>
                </div>
            </div>
        </div>
    </div>

    <input type="hidden" id="base_url" value="<?=$_ENV['BASE_URL']?>">
</body>
</html>