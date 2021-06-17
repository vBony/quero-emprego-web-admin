<input type="hidden" id="base_url" value="<?=$_ENV['BASE_URL']?>">
<div id="content">
    <div id="title-page-area">
        <div id="title-page-inv">
            <div id="title-page">Colaboradores</div>
        </div>
    </div>

    <div id="table-area">
        <table class="table" id="table-users">
            <thead>
                <tr>
                    <th class="status-th"></th>
                    <th class="id-th">#</th>
                    <th>Nome</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Cargo</th>
                    <th></th>
                </tr>
            </thead>

            <tbody>
                <?php foreach($users as $u): ?>
                    <tr data-id="<?= $u['id'] ?>">
                        <td class="status-td">
                            <div class="icon-status-area">
                                <?php if($u['disp_status'] == 'online'): ?>
                                    <div class="online-icon"></div>
                                <?php elseif($u['disp_status'] == 'offline'): ?>
                                    <div class="offline-icon"></div>
                                <?php endif; ?>
                            </div>
                        </td>

                        <td class="id-td"><?= $u['id'] ?></td>
                        <td class="nome-td"><?= $u['nome'] ?></td>
                        <td class="login_git-td"><?= $u['login_git'] ?></td>
                        <td class="email-td"><?= $u['email'] ?></td>
                        <td class="c_descricao-td"><?= $u['c_descricao'] ?></td>
                        <td>
                            <div id="btn-action-table-area">
                                <div class="btns-list" id="edit-btn-list" data-id="<?= $u['id'] ?>">
                                    <i class="fas fa-edit"></i>
                                </div>

                                <div class="btns-list" id="message-btn-list">
                                    <i class="fas fa-comment-alt"></i>
                                </div>
                            </div>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<div class="modal fade" id="modal-edit-user" tabindex="-1" role="dialog" aria-labelledby="modal-edit-user" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title" id="modal-edit-user">Colaborador</h5>
                <div id="btn-close-edit-user" class="close-modal-users-edit">
                    <i class="fas fa-times"></i>
                </div>
            </div>

            <div class="modal-body">
                <div id="content-modal">    

                    <div class="col col-lg-4 col-md-4 col-sm-4">

                        <div id="image-area" class="mb-3">
                            <img src="" id="image-users-edit">
                        </div>

                        <div class="card mb-3">
                            <div class="card-body" id="icon-area">
                                <a target="_blank" id="redirect-github">
                                    <div id="github-icon-area" class="icons-users-edit" title="Acessar GitHub">
                                        <i class="fab fa-github"></i>
                                    </div>
                                </a>

                                <div id="message-icon-area" class="icons-users-edit" title="Mandar mensagem">
                                    <i class="fas fa-comment-alt"></i>
                                </div>
                            </div>
                        </div>

                        <div id="status-area">
                            Status: <span id="status-users-edit"></span>
                        </div>
                    </div>

                    <div class="col col-lg-6 col-md-6 col-sm-6">
                        <div class="row">
                            <div class="col-lg-12 form-group mb-3">
                                <label for="name-users-edit" class="form-label">Nome completo:</label>
                                <input  id="name-users-edit" type="text" class="form-control" placeholder="First name" disabled>
                            </div>

                            <div class="col-lg-12 form-group mb-3">
                                <label for="email-users-edit" class="form-label">Email:</label>
                                <input  id="email-users-edit" type="email" class="form-control" placeholder="Email" disabled>
                            </div>

                            <div class="col-lg-12 from-group mb-3">
                                <label for="username-users-edit" class="form-label">Nome de usuário:</label>
                                <input type="text" id="username-users-edit" class="form-control" placeholder="Username" disabled>
                            </div>

                            <div  class="col-lg-12 form-group mb-3">
                                <label for="cargo-users-edit" class="form-label">Cargo:</label>
                                <select class="form-select" aria-label="Default select example" id="cargo-users-edit">
                                    <option selected>Selecione o cargo</option>
                                </select>
                            </div>

                            <div  class="col-lg-12 form-group mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="1" id="banned-users-edit">
                                    <label class="form-check-label" for="banned-users-edit">
                                        Banido
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                

            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary close-modal-users-edit" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-primary">Salvar</button>
            </div>

        </div>
    </div>
</div>

<div id="loading-bg" style="display:none">
    <div id="loading-inv">
        <div id="spinner-loading">
            <div class="spinner-border text-light" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>

        <div id="loading-text">
            Carregando
        </div>
    </div>
</div>

<!-- Modal para editar dados do logado -->
<!-- <div class="modal fade" id="modal-edit-user" tabindex="-1" role="dialog" aria-labelledby="modal-edit-user" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title" id="modal-edit-user">Colaborador</h5>
                <div id="btn-close-edit-user">
                    <i class="fas fa-times"></i>
                </div>
            </div>

            <div class="modal-body">
                <div id="content-modal">    

                    <div class="col col-lg-4">

                        <div id="image-area" class="mb-3">
                            <img src="<?=$user['url_avatar_web']?>">
                        </div>

                        <div id="upload-img-area" class="mb-3">
                            <label class="btn btn-primary" for="my-file-selector">
                                <input id="my-file-selector" type="file" class="d-none">
                                Alterar Foto
                            </label>
                        </div>

                        <div class="card">
                            <div class="card-body" id="icon-area">
                                <div id="github-icon-area" class="icons-users-edit">
                                    <i class="fab fa-github"></i>
                                </div>

                                <div id="message-icon-area" class="icons-users-edit" title="Acessar GitHub">
                                    <i class="fas fa-comment-alt"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col col-lg-6">
                        <div class="row">
                            <div class="col-lg-12 form-group mb-3">
                                <label for="name-users-edit" class="form-label">Nome completo:</label>
                                <input  id="name-users-edit" type="text" class="form-control" placeholder="First name" value="<?= $user['nome'] ?>" disabled>
                            </div>

                            <div class="col-lg-12 form-group mb-3">
                                <label for="email-users-edit" class="form-label">Email:</label>
                                <input  id="email-users-edit" type="email" class="form-control" placeholder="Email" value="" disabled>
                            </div>

                            <div  class="col-lg-12 form-group mb-3">
                                <label for="cargo-users-edit" class="form-label">Cargo:</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Selecione o cargo</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>

                            <div class="col-lg-12 from-group mb-3">
                                <label for="username-users-edit" class="form-label">Nome de usuário:</label>
                                <input type="text" id="username-users-edit" class="form-control" placeholder="Username" value="<?= $user['login_git'] ?>">
                            </div>

                            <div  class="col-lg-12 form-group mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="1" id="banned-users-edit">
                                    <label class="form-check-label" for="banned-users-edit">
                                        Banido
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                

            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-primary">Salvar</button>
            </div>

        </div>
    </div>
</div> -->

<!-- <table class="table" id="table-users">
            <thead>
                <tr>
                    <th class="status-th"></th>
                    <th class="id-th">#</th>
                    <th>Nome</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Cargo</th>
                    <th></th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td class="status-td">
                        <div class="online-icon-area">
                            <div class="online-icon"></div>
                        </div>
                    </td>

                    <td class="id-td">1</td>
                    <td>Vinicius</td>
                    <td>vBony</td>
                    <td>contato.vinicius-af@outlook.com</td>
                    <td>Lider de projeto</td>
                    <td>
                        <div id="btn-action-table-area">
                            <div class="btns-list" id="edit-btn-list">
                                <i class="fas fa-edit"></i>
                            </div>

                            <div class="btns-list" id="message-btn-list">
                                <i class="fas fa-comment-alt"></i>
                            </div>
                        </div>

                    </td>
                </tr>
            </tbody>
        </table> -->