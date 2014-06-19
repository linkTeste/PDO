<?php
include_once './conexao.php';

class AlunoBanco extends Conexao {

    public function insert($aluno) {

        $pdo = $this->conectar();

        try {

            $inserir = $pdo->prepare("INSERT INTO aluno(nome,matricula) VALUES (?, ?)");
            $inserir->bindValue(1, $aluno->nome);
            $inserir->bindValue(2, $aluno->matricula);
            $inserir->execute();

            if ($inserir->rowCount() == 1) {
                return TRUE;
            } else {
                return FALSE;
            }
        } catch (PDOException $e) {

            echo "Erro no Cadastro" . $e->getMessage(); {
                
            }
        }
    }

}
