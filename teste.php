<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    
        include 'conexao.php';

        $consulta = $conexao->query('SELECT * FROM produtos');

        while($exibe = $consulta->fetch(PDO::FETCH_ASSOC)){
        
        echo $exibe['produto']. '<br>';
        echo $exibe['descricao']. '<br>';
        echo $exibe['departamento']. '<br>';
        echo $exibe['foto1']. '<br>';
        echo '---------------------------------'. '<br>';
        }
    ?>
</body>
</html>