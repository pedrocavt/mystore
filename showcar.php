<div class="container-fluid text-center" style="width:100%;margin-top:50px">

    <div class="row">
        <h1 style="margin:0 auto;">Carrinho de Compras</h1>
    </div>

    <?php 

        $total = null;  //cria uma variavel para mostrar o total da compra
        foreach($_SESSION['carrinho'] as $id => $quantidade){ //cria a sessao carrinho
        $consulta = $conexao->query("SELECT * FROM produtos WHERE id = '$id'"); //busca no banco o produto
        $exibe = $consulta->fetch(PDO::FETCH_ASSOC);//busca os dados do produto
        $produto = $exibe['nome_produto']; //coloca o nome do produto em uma variavel
        $preco = number_format(($exibe['preco_produto']),2,',','.'); //pega o preço e formata
        $total += $exibe['preco_produto'] * $quantidade; //multiplica o preco pela quantidade para dar o total
    
    ?>

    <div class="row" style="margin:0 auto">
            <div class="col-sm-2 align-self-center" style="margin-left:auto">
                <img src="img/<?php echo $exibe['imagem_produto1'];?>" class="img-fluid" alt="">
            </div>

            <div class="col-sm-3 align-self-center">
                <h4><?php echo $exibe['nome_produto']; ?></h4>
            </div>

            <div class="col-sm-2 align-self-center">
                <h4>R$ <?php echo $preco;?></h4>
            </div>
            
            <div class="col-sm-1 align-self-center">
                <h4><?php echo $quantidade; ?></h4>
            </div>

            <div class="col-sm-2 align-self-center" style="margin-right:auto">
                <a href="removecar.php?id=<?php echo $id; ?>">
                <button class="btn btn-block btn-danger">Remover do Carrinho</button>
                </a>
            </div>
    </div>
        <?php } ?>      
</div>