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
            width: 300px;
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
                        <li><a href="alterar.1">Alterar</a></li>
                    </ul>
                </nav>
        </header>

    <!-- Fim do Menu -->


    <!-- Começo Form -->

    <div class="box">

    <fieldset>

    <center> <font face = "Helvetica" size="6"><b>ALTERAR</b><br><br><font size="3">
        

        <fieldset id = "a">
            <legend><b> Alterar </b></legend>

            <?php
                $txtid=$_POST["txtid"];
                include_once 'produto.php';
                $p = new Produto();
                $p -> setId($txtid);
                $pro_bd = $p->alterar();
            ?>
            <br><form name = "cliente2" method = "POST" action = "">
            <?php
                foreach($pro_bd as $pro_mostrar)
                {
            ?>
            
            <input type = "hidden" name = "txtid" size = "5" value='<?php echo $pro_mostrar[0] ?>'>
            <b> <?php echo "ID:" . $pro_mostrar[0]; ?></b>
            <br><br> <b> <?php echo "Nome: ";?></b>
            <input type = "text" name = "txtnome" size = "25" value='<?php echo $pro_mostrar[1] ?>'>
            <br><br> <b> <?php echo "Estoque: ";?></b>
            <input type = "text" name = "txtestoq" size = "10" value='<?php echo $pro_mostrar[2] ?>'>
            <br><br><br><center>
            <input name = "btnalterar" type = "submit" value = "Alterar" >

            <?php
            }
            ?>

        </fieldset>
        </form>

        <?php
        extract ($_POST, EXTR_OVERWRITE);
        if(isset($btnalterar))
        {
            include_once 'produto.php';
            $pro = new Produto();
            $pro->setNome($txtnome);
            $pro->setEstoque($txtestoq);
            $pro->setId($txtid);
            echo "<br><br><h3>" . $pro->alterar2() . "</h3>";   
            header("location:alterar1.php");  
        }
        ?>
    
        <center> <br><br><br><br>
        <button><a href = 'menu.html'> Voltar </a></button>
        </fieldset>
    </body>
</html> 