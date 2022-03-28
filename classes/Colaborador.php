<?php

    class Colaborador {

        public function cadastrar($nome, $email, $telefone, $sexo, $nascimento, $cargo, $cadastrou, $salario){
            global $pdo;

            $sql = "
                INSERT INTO colaboradores (
                    usuario_id,
                    nome,
                    email,
                    telefone,
                    sexo,
                    cargo,
                    salario,
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
                    :salario,
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
            $sql->bindValue("salario", $salario);
            $sql->bindValue("nascimento", $nascimento);

            try {
                $sql->execute();
                return true;
            } catch (PDOException $e){
                return false;
            }
        }

        public function listar($usuarioId){
            global $pdo;

            $sql = "SELECT nome, email, telefone, sexo, data_nascimento as nascimento, cargo, salario, id FROM colaboradores WHERE usuario_id = :usuarioId";
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

        public function editarColaborador($nome, $email, $telefone, $cargo, $sexo, $salario, $nascimento, $id){
            global $pdo;

            $sql = "UPDATE 
                        colaboradores 
                    set 
                        nome = :nome, 
                        email = :email,
                        telefone = :telefone,
                        cargo = :cargo,
                        sexo = :sexo,
                        salario = :salario,
                        data_nascimento = :nascimento
                    WHERE 
                        id = :id";

            $sql = $pdo->prepare($sql);
            $sql->bindValue("id", $id);
            $sql->bindValue("nome", $nome);
            $sql->bindValue("email", $email);
            $sql->bindValue("telefone", $telefone);
            $sql->bindValue("cargo", $cargo);
            $sql->bindValue("sexo", $sexo);
            $sql->bindValue("salario", $salario);
            $sql->bindValue("nascimento", $nascimento);
            
            try {
                $sql->execute();
                return true;
            } catch (PDOException $e){
                return false;
            }
        }

    }

?>