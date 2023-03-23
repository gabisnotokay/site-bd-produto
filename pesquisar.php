<!DOCTYPE html>
    <html lang="pt-br">
        <head>
            <meta charset = "utf-8">

            <title>Manutenção Produtos</title>
            
            <link rel="stylesheet" href="./_css/style.css"> 
        </head> 

    <style>
        form
        {
            margin-top: 10px;
            width: 500px;

        }

        fieldset#a{
            width: 500px;
        }

        fieldset#b{
            width: 500px;
        }

        p{
            margin-top: 25px;
        }

        .box{
            margin-top: 100px;
            color: white;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            background-color: #000000;
            padding: 5px;
            border-radius: 5px;
            width: 50%;
        }
    
    </style>



    <!-- Começo do Menu -->

        <body>
            <header>
                <nav>
                    <a class = "logo" href="menu.html">TABELA PRODUTOS</a>  

                    <div class = "linha">
                        <img src="_img/linha.png" alt="">
                    </div>

                    <ul class="nav-list">
                        <li><a href="#">Principal</a></li>
                        <li><a href="cadastrar.php">Cadrastar</a></li>
                        <li><a href="exclusao.php"></a></li>
                        <li><a href="pesquisar.php">Pesquisar</a></li>
                        <li><a href="listar.php">Listar</a></li>
                        <li><a href="#">Alterar</a></li>
                    </ul>
                </nav>
        </header>

    <!-- Fim do Menu -->


    <!-- Começo Form -->
    <div class="box">

    <fieldset>

    <center> <font face = "Helvetica" size="6"><b>PESQUISAR</b><br><br><font size="3">

<form name="cliente" method = "POST" action = "">
    <fieldset id="a">
        <legend><b>Informe o Nome do produto em que deseja pesquisar:</b></legend>
            <p> Nome: <input name="txtname" type="text" size="10" maxlenght="40" placeholder="Nome do Produto"> 
            <br><br><center>
            <input name="btnenviar" type="submit" value="Consultar"> &nbsp;&nbsp;
            <input name="limpar" type="reset" value="Limpar">
    </fieldset>
    <br>

    <fieldset id="b">
        <legend><b> Resultado: </b></legend>
</form>

<!-- Fim Form -->


<!-- Começo PHP -->

<?php
    extract($_POST, EXTR_OVERWRITE);
    if(isset($btnenviar))
    {
        include_once 'produto.php';
        $p=new Produto();
        $p->setNome($txtname.'%');
        $pro_bd=$p->consultar();
        foreach($pro_bd as $pro_mostrar)
            {
                ?> <br>
                <b> <?php echo "ID: " . $pro_mostrar[0]; ?> </br>
                <b> <?php echo "Estoque: " . $pro_mostrar[1]; ?> </br>
                <b> <?php echo "Nome: " . $pro_mostrar[2]; ?> </br>
                <?php
            }
    }
    ?>

    </fieldset>

    <br>
    <center>
        <button><a href = "menu.html"> Voltar </a></button>
    </center>
</div>
    <!-- Fim-do-PHP-->
</fieldset>
</body>
</html