<div id="content" style="width: 100%; text-align:center">
    <div id="title-page-area">
        <div id="title-page-inv">
            <div id="title-page">Dashboard</div>
        </div>
    </div>

    <div id="cards-area" class="container-box">

        <div class="card-area" style="border-bottom: 4px solid #864DD9; border-right: 4px solid #864DD9">
            <div class="icon-card-area">
                <i class="fas fa-users icon-card"></i>
            </div>

            <div class="text-card">
                Usuários cadastrados
            </div>

            <div class="data-card" style="color:#864DD9">
                334
            </div>
        </div>

        <div class="card-area" style="border-bottom: 4px solid #e95f71; border-right: 4px solid #e95f71">
            <div class="icon-card">
                <i class="fas fa-briefcase icon-card"></i>
            </div>

            <div class="text-card">
                Empresas cadastradas
            </div>

            <div class="data-card" style="color: #e95f71">
                1280
            </div>
        </div>

        <div class="card-area" style="border-bottom: 4px solid #CF53F9; border-right: 4px solid #CF53F9">
            <div class="icon-card">
                <i class="fas fa-dollar-sign icon-card"></i>
            </div>

            <div class="text-card">
                Ganhos mensais
            </div>

            <div class="data-card" style="color:#CF53F9">
                R$ 200,98
            </div>
        </div>

        <div class="card-area" style="border-bottom: 4px solid #7127AC; border-right: 4px solid #7127AC">
            <div class="icon-card">
                <i class="fas fa-hand-pointer icon-card"></i>
            </div>

            <div class="text-card">
                Acessos
            </div>

            <div class="data-card" style="color:#7127AC">
                <?= $count_acessos ?>
            </div>
        </div>
    </div>

    <div class="container-box">
        <div id="table-area">
            <div class="title-container">Relatório de acessos</div>
            
            <div id="overflow-table">
                <table class="table" id="table-users">
                    <thead>
                        <tr>
                            <th>IP</th>
                            <th>Hora</th>
                            <th>Data</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php foreach($relatorio_acessos as $acesso): ?>
                        <tr data-id="">
                            <td class="ip-td"><?= $acesso['ra_ip'] ?> <?= $user['last_ip'] == $acesso['ra_ip'] ? "(você)" : "" ?></td>
                            <td class="hora-td"><?=$acesso['hora']?></td>
                            <td class="data-td"><?=$acesso['data']?></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            
        </div>
    </div>
</div>
