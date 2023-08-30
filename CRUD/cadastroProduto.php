<?php

include('conexao.php');
 echo '<pre>';
 print_r($_POST);
 echo '<pre>';

 $nome = $_POST['nome'];
 $quantidade = $_POST['quantidade'];
 $preco = $_POST['preco'];

 $query = $dbh->prepare('insert into produto (nome, preco, quantidade)
 value (:nome ,:quantidade, :preco);');

$query->execute(array(
    ':nome' => $nome,
    ':quantidade'=> $quantidade,
    ':preco' => $preco
));

?>