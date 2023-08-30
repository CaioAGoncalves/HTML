<?php
    include('conexao.php');

    $query = $dbh->prepare('SELECT * FROM produto');
    $query->execute();

    $produtos = $query->fetchALL();

  //  print_r($produtos);
?>
<!DOCTYPE html>
<html lang = "pt-br">
    <head>
    <title>LISTA</title>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    </head>
    <body>
        <table>
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Quantidade</th>
                    <th>Preço</th>
                    <th>Atualizar</th>
                    <th>Deletar</th>
                </tr>
                <?php
                foreach ($produtos as $linha){
                    echo '<tr>';
                    echo '<td>'.$linha['nome'].'</td>';
                    echo '<td>'.$linha['quantidade'].'</td>';
                    echo '<td>'.$linha['preco'].'</td>';
                    echo '<td><a href="atualizarProduto.php?idProd='.$linha['id'].'">Atualizar</a></td>';

                    echo '</tr>';
                }
                ?>
                </thead>
            </table>
    </body>
</head>
</html>