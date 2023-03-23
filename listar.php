<html>
<head>
            <meta charset = "utf-8">

            <title>Listar</title>
            
            <link rel="stylesheet" href="./_css/listar.css"> 
         

        <style>
        body{

        }
        .box{
            margin-top: 100px;
            color: white;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            background-color: #000000;
            padding: 15px;
            border-radius: 15px;
            width: 20%;
        }

</style>
</head>

<header>
                <nav>
                    <a class = "logo" href="menu.html">TABELA PRODUTOS</a>  

                    <div class = "linha">
                        <img src="_img/linha.png" alt="">
                    </div>

                    <ul class="nav-list">
                        <li><a href="#">Principal</a></li>
                        <li><a href="#">Cadrastar</a></li>
                        <li><a href="#">Excluir</a></li>
                        <li><a href="#">Pesquisar</a></li>
                        <li><a href="listar.php">Listar</a></li>
                        <li><a href="#">Alterar</a></li>
                    </ul>
                </nav>
        </header>

        <!-- Fim-do-Menu -->

        <body>
        <div class="box">
        <form action="">
            <fieldset>
                <center> <font face = "Helvetica" size="6"><b>LISTAR</b><br><br><font size="3">
                

        <!-- Começo PHP -->


<?php

    include_once 'produto.php';
    $p = new Produto();
    $pro_bd=$p->listar();

?>
<b> ID &nbsp; &nbsp; &nbsp; &nbsp; NOME &nbsp; &nbsp; &nbsp; &nbsp;ESTOQUE</b>

<?php
    foreach($pro_bd as $pro_mostrar)
    {
        ?>
        <br><br>

        <b> <?php echo $pro_mostrar[0]; ?> </b> &nbsp; &nbsp; &nbsp; &nbsp;
            <?php echo $pro_mostrar[2]; ?> &nbsp; &nbsp; &nbsp; &nbsp;
            <?php echo $pro_mostrar[1]; ?>
    <?php
    }
    ?>

<div class="button">
        <button><a href = "menu.html"> Voltar </a></button>
</div>

</fieldset>
        </form>
    </div>
</body> 
	</html>