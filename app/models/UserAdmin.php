<?php
class UserAdmin extends modelHelper{
    private $table = "u316339274_emprego_hg.admin_user";

    public function getCargo($idCargo){
        $cargos = [
            0 => 'Programador'
        ];

        if(isset($cargos[$idCargo])){
            return $cargos[$idCargo];
        }
    }

    /**
     * Insere o usuário no banco de dados
     */
    public function insert($user_data){
        $sql = "INSERT INTO " . $this->table . "(id, nome, url, url_avatar_web, url_avatar, email_git, email_institucional, id_git, login_git, status, cargo)
                VALUES (
                    NULL,
                    :nome,
                    :url,
                    :url_avatar_web,
                    NULL,
                    :email_git,
                    NULL,
                    :id_git,
                    :login_git,
                    0,
                    0
                )
                ";
        
        $sql = $this->db->prepare($sql);
        $sql->bindValue(":nome", $user_data['nome']);
        $sql->bindValue(":url", $user_data['url']);
        $sql->bindValue(":url_avatar_web", $user_data['url_avatar_web']);
        $sql->bindValue(":email_git", $user_data['email_git']);
        $sql->bindValue(':id_git', $user_data['id_git']);
        $sql->bindValue(":login_git", $user_data['login_git']);
        $sql->execute();

        return $this->db->lastInsertId();
    }

    /**
     * Verifica se o usuário vindo do github já existe no banco de dados
     */
    public function verify_user_git($git_id){
        intval($git_id);

        $sql = "SELECT * FROM " . $this->table . " WHERE id_git = :id";

        $sql = $this->db->prepare($sql);
        $sql->bindValue(":id", $git_id);
        $sql->execute();

        if($sql->rowCount() > 0){
            $dados = $sql->fetch();
            return $dados;
        }else{
            return null;
        }
    }

    public function get_user_data($id){
        intval($id);

        $sql = "SELECT * FROM " . $this->table . " WHERE id = :id";

        $sql = $this->db->prepare($sql);
        $sql->bindValue(":id", $id);
        $sql->execute();

        if($sql->rowCount() > 0){
            $dados = $sql->fetch();

            $dados['cargo'] = $this->getCargo($dados['cargo']);
            $dados['primeiro_nome'] = $this->getPrimeiroNome($dados['nome']);

            return $dados;
        }else{
            return null;
        }
    }

    public function getPrimeiroNome($nomeCompleto){
        $arr = explode(' ', $nomeCompleto);
        return $arr[0];
    }
}


?>