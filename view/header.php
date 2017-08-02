<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html ng-app="radar">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Boletim Radar</title> 
        <link rel="stylesheet" href="../lib/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="../lib/owl.carousel/owl.carousel.css">
	<link rel="stylesheet" href="../fonts/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="../css/folha_estilo_ipea.css">
        <link rel="stylesheet" href="../css/ipea-mobile.css">
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
    </head>
    <body ng-controller="carouselCtrl">
        
        <header>
            
            <div id="menu-mobile-mask" class="visible-xs">
                
            </div>
            
            <div id="menu-mobile" class="collapse visible-xs">
                
                <ul class="list-unstyled">
                    <li role="presentation"><a id="br" href="http://brasil.gov.br/">Brasil</a></li>
                    <li role="presentation"><a href="http://www.servicos.gov.br/?pk_campaign=barrabrasil">Serviços</a></li>
                    <li role="presentation"><a href="http://brasil.gov.br/barra#participe">Participe</a></li>
                    <li role="presentation"><a href="http://brasil.gov.br/barra#acesso-informacao">Acesso à Informação</a></li>
                    <li role="presentation"><a href="http://www.planalto.gov.br/legislacao">Legislação</a></li>
                    <li role="presentation"><a href="http://brasil.gov.br/barra#orgaos-atuacao-canais">Canais</a></li>
                    <li role="presentation"><a href="http://www.vlibras.gov.br/"><i class="fa fa-sign-language"></i>VLibras</a></li>
                </ul>
                
                <div class="bar-close">
                    <button type="button" class="btn btn-close"><i class="fa fa-close"></i></button>
                </div>
                
            </div>
            			
            <div class="container">
                <a href="../index_menu2.php/"><img id="logotipo" src="../img/logo_radar.png" alt="Logotipo Radar"></a>
            </div>

            <div class="header-gray">
                
                <input type="search" id="input-search-mobile" class="visible-xs" placeholder="Pesquisar...">
                
                <button id="btn-bars" type="button"><i class="fa fa-bars"></i></button>
                <button id="btn-search" type="button"><i class="fa fa-search"></i></button>
                
                <div class="container">
                    
                    <a id="br" href="http://brasil.gov.br/">Brasil</a>
                    <a href="http://www.servicos.gov.br/?pk_campaign=barrabrasil">Serviços</a>
                    <a href="http://brasil.gov.br/barra#participe">Participe</a>
                    <a href="http://brasil.gov.br/barra#acesso-informacao">Acesso à Informação</a>
                    <a href="http://www.planalto.gov.br/legislacao">Legislação</a>
                    <a href="http://brasil.gov.br/barra#orgaos-atuacao-canais">Canais</a>
                    <a href="http://www.vlibras.gov.br/"><i class="fa fa-sign-language"></i>VLibras</a>
                
                <!--                    <ul class="pull-right">
                        <li class="br"><a href="http://brasil.gov.br/">Brasil</a></li>
                        <li class="ser"><a href="http://www.servicos.gov.br/?pk_campaign=barrabrasil">Serviços</a></li>
                        <li class="participe"><a href="http://brasil.gov.br/barra#participe">Participe</a></li>
                        <li class="informacao"><a href="http://brasil.gov.br/barra#acesso-informacao">Acesso à Informação</a></li>
                        <li class="legislacao"><a href="http://www.planalto.gov.br/legislacao">Legislação</a></li>
                        <li class="canais"><a href="http://brasil.gov.br/barra#orgaos-atuacao-canais">Canais</a></li>
                        <li class="vlibras"><a href="http://www.vlibras.gov.br/"><i class="fa fa-sign-language"></i>VLibras</a></li>
                    </ul> -->
                
                </div>

            </div>

            <div class="pull-right">

                <ul id="menu" class="nav navbar-nav">
                    <li role="presentation"><a href="../index_menu2.php/">Início</a></li>
                    <li role="presentation" class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Temas<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                                <li><a href="../view/agricultura.php">Agricultura</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="../view/ciencia_tecnologia.php">Ciência, Tecnologia e Inovação</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="#">Comércio Exterior</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="#">Educação</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="#">Indústria</a></li>
                        </ul>
                    </li>
                    <li role="presentation"><a href="../view/radarPDF.html">Radar PDF</a></li>
                    <li role="presentation" class="search">
                        <div class="input-group">
                            <input type="search" placeholder="Pesquisar" id="input-search">
                            <span class="input-group-btn">
                                <button type="button"><i class="fa fa-search"></i></button>
                            </span>
                        </div><!-- /input-group -->
                    </li>
                </ul>

            </div>
            
            <div id="menu-mobile-2" class="collapse visible-xs">
                
                <div class="panel-group">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
<!--                                <a id="menu-2" data-toggle="collapse" href="#collapse1"><i class="fa fa-bars"></i> Menu <i class="fa fa-angle-double-down" aria-hidden="true"></i></a>-->
                                    <button id="btn-menu-2" data-toggle="collapse" data-target="#collapse1">
                                        <i class="fa fa-bars"></i> Menu <i class="fa fa-angle-double-down" aria-hidden="true"></i>  
                                    </button>
                            </h4>
                        </div>
                        <div id="collapse1" class="panel-collapse collapse">
                            <ul class="list-group">
                                <li class="list-group-item" role="presentation"><a href="../index_menu2.php/">Início</a></li>
                                <li class="list-group-item dropdown" role="presentation">
                                    <a href="#collapse2" data-toggle="collapse">
                                        Temas
                                        <span class="caret"></span>
                                    </a>
                                    <ul id="collapse2" class="panel-collapse collapse">
                                        <li class="list-group-item"><a href="../view/agricultura.php">Agricultura</a></li>
                                        <li class="list-group-item"><a href="../view/ciencia_tecnologia.php">Ciência, Tecnologia e Inovação</a></li>
                                        <li class="list-group-item"><a href="#">Comércio Exterior</a></li>
                                        <li class="list-group-item"><a href="#">Educação</a></li>
                                        <li class="list-group-item"><a href="#">Indústria</a></li>
                                        <li class="list-group-item"><a href="#">Infraestrutura</a></li>
                                        <li class="list-group-item"><a href="#">Mercado de Trabalho</a></li>
                                        <li class="list-group-item"><a href="#">Políticas Públicas</a></li>
                                        <li class="list-group-item"><a href="#">Regulação</a></li>
                                        <li class="list-group-item"><a href="#">Serviços</a></li>
                                    </ul>

                                </li>
                                <li class="list-group-item" role="presentation"><a href="../view/radarPDF.php">Radar PDF</a></li>
                                <li class="list-group-item" role="presentation"><a href="http://www.ipea.gov.br/portal/" target="_blank">IPEA</a></li>
                            </ul>
                            <div id="footer" class="panel-footer">
                                <button id="btn-close-2" type="button" class="btn btn-close"><i class="fa fa-close"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                
                
                
            </div>

	</header>
        
        <div id="banner">
            <a href="http://www.ipea.gov.br/" target="_blank">
                <img src="../img/logo_ipea.png" alt="Logo do IPEA">
            </a>
        </div>
