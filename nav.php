<nav class="navbar black navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" style="font-family:'Anton', sans-serif;" href="index.php">Pedro Colchões</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Camas/Colchões
        </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="search.php?search=Cama">Camas</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="search.php?search=Colchão">Colchões</a>

                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle black" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Acessórios
        </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Travesseiros</a>
                    <a class="dropdown-item" href="#">Edredons</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Sacos de dormir</a>
                    <a class="dropdown-item" href="#">Mantas</a>
                </div>
            </li>
        </ul>
        <form method="GET" action="search.php" class="form-inline my-2 my-lg-0 mr-auto">
            <input class="form-control mr-sm-2" name="search" type="search" placeholder="Buscar" aria-label="Search">
            <button class="btn btn-outline-danger my-2 my-sm-0" type="submit">Buscar</button>
        </form>
        <ul class="navbar-nav">
            
            <li class="nav-item">
                <a class="nav-link" href="#"><i class="fas fa-id-badge"></i>&nbsp;Contato</a>
            </li>

                <?php

                    if(empty($_SESSION['id'])){ //verifica se a sessão esta vazia
                
                ?>


            <li class="nav-item">
                <a class="nav-link" href="formLogon.php"><i class="fas fa-sign-in-alt"></i>&nbsp;Login</a>
            </li>
                    <?php } else{ //se não estiver vazia, mostra o nome do usuario logado

                        if($_SESSION['adm']==0){
                        
                    $consulta_user = $conexao->query("SELECT nome_user FROM clientes WHERE id_user = '$_SESSION[id]'");    
                    $exibir_user = $consulta_user->fetch(PDO::FETCH_ASSOC);
                    ?>
            <li class="nav-item">
                <a class="nav-link" href="carrinho.php"><i class="fas fa-shopping-cart"></i>&nbsp;Carrinho</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href=""><i class="fas fa-user"></i>&nbsp;<?php echo $exibir_user['nome_user']; ?></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="logout.php"><i class="fas fa-sign-out-alt"></i>&nbsp;Logout</a>
            </li>
                        <?php } else{ ?>
                            
                        <li class="nav-item">
                            <a href="administrador.php"><button class="btn btn-sm btn-danger">Administrador</button></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="logout.php"><i class="fas fa-sign-out-alt"></i>&nbsp;Logout</a>
                        </li>
                    
                        <?php }
                    }?>

        </ul>
    </div>
</nav>