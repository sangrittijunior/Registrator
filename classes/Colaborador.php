<?php

    class Colaborador {

        public function cadastrar($nome, $email, $telefone, $sexo, $nascimento, $cargo, $cadastrou){
            global $pdo;

            $sql = "
                INSERT INTO colaboradores (
                    usuario_id,
                    nome,
                    email,
                    telefone,
                    sexo,
                    cargo,
                    data_nascimento,
                    created_at,
                    updated_at
                ) VALUES (
                    :cadastrou,
                    :nome,
                    :email,
                    :telefone,
                    :sexo,
                    :cargo,
                    :nascimento,
                    now(),
                    now()
                )";

            $sql = $pdo->prepare($sql);
            $sql->bindValue("cadastrou", $cadastrou);
            $sql->bindValue("nome", $nome);
            $sql->bindValue("email", $email);
            $sql->bindValue("telefone", $telefone);
            $sql->bindValue("sexo", $sexo);
            $sql->bindValue("cargo", $cargo);
            $sql->bindValue("nascimento", $nascimento);
            $sql->execute();

        }

        public function listar($usuarioId){
            global $pdo;

            $sql = "SELECT * FROM colaboradores WHERE usuario_id = :usuarioId";
            $sql = $pdo->prepare($sql);
            $sql->bindValue("usuarioId", $usuarioId);
            $sql->execute();

            return $sql->fetchAll();

        }

        public function deletarColaborador($colaboradorId){
            global $pdo;

            $sql = "DELETE FROM colaboradores WHERE id = :colaboradorId";
            $sql = $pdo->prepare($sql);
            $sql->bindValue("colaboradorId", $colaboradorId);
            $sql->execute();
            
        }
    }

?>