<?php

    class Usuario {
        public function login($login, $senha){
            global $pdo;

            $sql = "SELECT * FROM usuarios WHERE email = :email and SENHA = :senha";
            $sql = $pdo->prepare($sql);
            $sql->bindValue("email", $login);
            $sql->bindValue("senha", md5($senha));
            $sql->execute();

            if ($sql->rowCount() > 0) {

                $dado = $sql->fetch();
                $_SESSION['idUsuario'] = $dado['id'];

                return true;
            } else {
                return false;
            }
        }
    }

?>