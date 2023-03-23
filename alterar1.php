<!DOCTYPE html>
    <html lang="pt-br">
        <head>
            <meta charset = "utf-8">

            <title>Produtos</title>
            
            <link rel="stylesheet" href="./_css/style.css"> 
        </head> 
<body>
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
                        <li><a href="alterar1.php">Alterar</a></li>
                    </ul>
                </nav>
        </header>

    <!-- Fim do Menu -->


    <!-- Começo Form -->

    <div class="box">

    <fieldset>

    <center> <font face = "Helvetica" size="6"><b>ALTERAR</b><br><br><font size="3">

        <form name = "cliente" method = "POST" action = "alterar2.php">
        <fieldset>
            <legend><b> Informe o ID do produto desejado: </b></legend>
                <p> ID: <input name = "txtid" type = "text" size = "20" maxlength = "5" palceholder = "Id do Produto">
                <br><br><center>
                    <input name="btnenviar" type="submit" value="Consultar"> &nbsp;&nbsp;
                    <input name="Limpar" type="reset" value="Limpar">
        </fieldset>
        </form>

        <center> <br><br><br><br>
        <button><a href = 'menu.html'> Voltar </a></button>
        </fieldset>
    </body>
</html> 