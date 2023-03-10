<?php
    require('connection.php');

    function read(){
        $conn = getConnection();

        $sql = 'SELECT * FROM livro';

        $stmt = $conn->prepare($sql);

        $stmt->execute();

        $result = $stmt->fetchAll();
        return $result;
    }

    function create(){
        $conn = getConnection();

        $sql = 'INSERT INTO livro (nome, preco, paginas, autor, quantidade) VALUES (?, ?, ?, ?, ?)';

        $stmt = $conn->prepare($sql);

        $stmt->bindParam(1, $_POST['nome']);
        $stmt->bindParam(2, $_POST['preco']);
        $stmt->bindParam(3, $_POST['paginas']);
        $stmt->bindParam(4, $_POST['autor']);
        $stmt->bindParam(5, $_POST['quantidade']);

        if($stmt->execute()){
            return('salvo com sucesso!');
        }else{
            return('Erro ao salvar');   
        }
    }

    function delete(){
        $conn = getConnection();

        $sql = "DELETE FROM livro WHERE id = ?";

        $stmt = $conn->prepare($sql);

        $stmt->bindParam(1,$_GET['id']);

        if($stmt->execute()){
            return('Excluido com sucesso!');
        }else{
            return('Erro ao excluir');
        }
    }

    function update($id){
        $conn = getConnection();

        $sql = "UPDATE livro SET nome = ?, preco = ?, paginas = ?, autor = ?, quantidade = ? WHERE id = ?";

        $stmt = $conn->prepare($sql);

        $stmt->bindParam(1, $_POST['nome']);
        $stmt->bindParam(2, $_POST['preco']);
        $stmt->bindParam(3, $_POST['paginas']);
        $stmt->bindParam(4, $_POST['autor']);
        $stmt->bindParam(5, $_POST['quantidade']);

        $stmt->bindParam(6, $id);

      
        if($stmt->execute()){
            return('Update com sucesso!');
        }else{
            return('Erro no update');
        }
    }

    function selectWhere(){

        $conn = getConnection();

        $sql = 'SELECT * FROM livro WHERE id = ?';

        $stmt = $conn->prepare($sql);

        $stmt->bindParam(1, $_GET['id']);

        $stmt->execute();

        $result = $stmt->fetchAll();
        return $result;

    }
        
    
