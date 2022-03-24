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

        public function cadastrar($nome, $login, $senha, $empresa){
            global $pdo;

            $sql = "
                INSERT INTO usuarios (
                    nome,
                    email,
                    senha,
                    empresa,
                    created_at,
                    updated_at ) 
                VALUES (
                    :nome,
                    :login,
                    :senha,
                    :empresa,
                    now(),
                    now());";

            $sql = $pdo->prepare($sql);
            $sql->bindValue("nome", $nome);
            $sql->bindValue("login", $login);
            $sql->bindValue("senha", md5($senha));
            $sql->bindValue("empresa", $empresa);

            try {
                $sql->execute();
                $this->login($login, $senha);
            } catch (PDOException $e){
                return false;
            }
        }
    }

?>