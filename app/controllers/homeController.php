<?php
class homeController extends controllerHelper{
    public function index(){
        $this->verificarSessao();
        $data = array();

        $UserAdmin = new UserAdmin();
        $RelatorioAcessos = new RelatorioAcessos();

        $user = $UserAdmin->buscar($_SESSION['token']['id']);
        $relatorio = $RelatorioAcessos->buscar();
        $countAcessos = $RelatorioAcessos->getCount();

        $data['css'] = 'home.css';
        $data['js'] = 'home.js';
        $data['user'] = $user;
        $data['relatorio_acessos'] = $relatorio;
        $data['count_acessos'] = $countAcessos['contagem'];
        $data['title'] = "📊 Dashboard - Quero Emprego Admin";
        
        $this->loadTemplate('home', $data);
    }
}

?>