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
            margin-bottom: 25px;
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
                        <li><a href="#">Excluir</a></li>
                        <li><a href="#">Pesquisar</a></li>
                        <li><a href="listar.php">Listar</a></li>
                        <li><a href="#">Alterar</a></li>
                    </ul>
                </nav>
        </header>

    <!-- Fim do Menu -->


    <!-- Começo Form -->


    <div class="box">

    <fieldset>

    <center> <font face = "Helvetica" size="6"><b>CADASTRAR</b><br><br><font size="3">

    <form name="cliente" method = "POST" action = "">
        <fieldset id="a">
            <legend><b>Dados do Produto:</b></legend>
                <p> Estoque: <input name="txtnome" type="text" size="10" maxlenght="40" placeholder="0">
                <p> Nome: <input name="txtestoq" type="text" size="40" placeholder="Nome do Produto"></p>   
        </fieldset>
        <br>

        <fieldset id="b">
            <legend><b> Opções: </b></legend>
                <br>
                <input name="btnenviar" type="submit" value="Cadastrar"> &nbsp;&nbsp;
                <input name="limpar" type="reset" value="Limpar">
        </fieldset>


    </form>


    <!-- Fim-do-Form -->

    <!-- Começo-do-PHP-->

    <?php
    extract($_POST, EXTR_OVERWRITE);
    if(isset($btnenviar))
    {
        include_once 'produto.php';
        $pro=new Produto();
        $pro->setNome ($txtnome);
        $pro->setEstoque($txtestoq);
        echo "<h3><br><br>" . $pro->salvar() . "</h3>";
    }
    ?>

    <br>
    <center>
        <button><a href = "menu.html"> Voltar </a></button>
    </center>
    </fieldset>
    </fieldset>
    <!-- Fim-do-PHP-->

</body>
</html
