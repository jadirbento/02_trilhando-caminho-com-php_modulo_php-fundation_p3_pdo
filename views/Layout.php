<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Contecti Decor</title>
    <!-- Bootstrap -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../assets/css/style.css" rel="stylesheet" />
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php
    global $action;
    $iidd = 'header';
    
    if ($action != '/home') {
        $iidd = 'header-internas';
    }
    ?>
</head>
<body>
    <header id="<?php echo $iidd; ?>">
        <nav id="navigation" class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div id="brand" class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#bs-navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="/" class="navbar-brand">CONTECTI DECOR</a>
                </div>

                <div class="collapse navbar-collapse" id="bs-navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li
                            <?php if ($action == '/home') {
                                      echo "class='active'";
                                  } ?>>
                            <a href="/home">Home</a>
                        </li>
                        <li
                            <?php if ($action == '/empresa') {
                                      echo "class='active'";
                                  } ?>>
                            <a href="/empresa">Empresa</a>
                        </li>
                        <li
                            <?php if ($action == '/produtos') {
                                      echo "class='active'";
                                  } ?>>
                            <a href="/produtos">Produtos</a>
                        </li>
                        <li
                            <?php if ($action == '/servicos') {
                                      echo "class='active'";
                                  } ?>>
                            <a href="/servicos">Servi&ccedil;os</a>
                        </li>
                        <li
                            <?php if ($action == '/contato') {
                                      echo "class='active'";
                                  } ?>>
                            <a href="/contato">Contato</a>
                        </li>
                    </ul>
                </div>

            </div>
        </nav>
    </header>

    
    <section>
        <div class="container">
            <?php ContentPlaceHolder(); ?>
        </div>
    </section>


    <footer>
        <div class="container footer">
            <div class="row text-center">
                <h2 class="titulo">CONTECTI DECOR</h2>

                <p class="p">Contecti Decor - Decora&ccedil;&otilde;es e montagem de imobiliarios corporativos</p>
                <smal class="smal">
                    Todos os direitos reservados - <?php echo urlEncode(date("Y")); ?>
                </smal>
            </div>
        </div>
    </footer>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
</body>
</html>