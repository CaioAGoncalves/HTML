<!DOCTYPE html>
<html>
    <head>
        <title>Atualizar de produto</title>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    </head>
    <body>
        <h1>Atualizar Produtos </h1>
        <form action="UpdateP.php" method="post">
            <input type="hidden" name="idProd" value="<?php echo $_GET['idProd']; ?>">
            <label for="">nome</label>
            <input type="text" name="nome" id="">
            <label for="">quantidade</label>
            <input type="text" name="quantidade" id="">
            <label for="">preço</label>
            <input type="text" name="preco" id="">
            <input type="submit" value="Atualizar">
        </form>
    </body>
</html>