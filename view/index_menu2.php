<?php include_once("header.php");?>

        
        <section>
            
            <div id="publicacoes" class="container">
                
                <div class="row text-center">
                    <h2>Publicações</h2>
                    <hr>
                </div>
                
                <br><br>
                
                <div id="carousel_" class="carousel slide" data-ride="carousel">

                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#carousel_" data-slide-to="0" ng-class="{active:!$index}"></li>
                            <li data-target="#carousel_" data-slide-to="1"></li>
                            <li data-target="#carousel_" data-slide-to="2"></li>
                            <li data-target="#carousel_" data-slide-to="3"></li>
                        </ol>

                        <div class="carousel-inner" role="listbox">
                            
                            <div class="item" ng-class="{active:!$index}" ng-repeat="publicacao in publicacoes">
                                <img ng-src="{{publicacao.thumbnail_publ}}" alt="{{publicacao.titulo_publ}}" class="img-thumbnail">
                                <div class="carousel-caption">
                                    <h3>{{publicacao.titulo_publ}}</h3>
                                    <time>{{publicacao.ano_publ}} - {{publicacao.mes_publ}}</time>
                                </div>
                            </div>
                            <div class="item">
                                <a href="../view/radarPDF.php">
                                    <img src="../img/thumbs/todas_publicacoes.jpg" alt="Ver todas Publicações Radar" class="img-thumbnail" style="margin: 0 auto;">
                                </a>
                                <div class="carousel-caption">
                                    <h3>Todas Publicações</h3>
                                    <time>2017</time>
                                </div>
                            </div>

<!--                            <div class="item">
                                <img src="../img/thumbs/nova_thumb_47.jpg" alt="Artigo nº 47" class="img-thumbnail">
                                <div class="carousel-caption">
                                    <h3>Artigo nº 47</h3>
                                    <time>2016 - Outubro</time>
                                </div>
                            </div>

                            <div class="item">
                                <img src="../img/thumbs/nova_thumb_46.jpg" alt="Artigo nº 46" class="img-thumbnail">
                                <div class="carousel-caption">
                                    <h3>Artigo nº 46</h3>
                                    <time>2016 - Agosto</time>
                                </div>
                            </div>
                            <div class="item">
                                <img src="../img/thumbs/nova_thumb_45.jpg" alt="Artigo nº 45" class="img-thumbnail">
                                <div class="carousel-caption">
                                    <h3>Artigo nº 45</h3>
                                    <time>2016 - Junho</time>
                                </div>
                            </div>-->
                        <!--    
                            <div class="item">
                                <img src="img/thumbs/nova_thumb_44.jpg" alt="Artigo nº 44" class="img-thumbnail">
                                <div class="carousel-caption">
                                    <h3>Artigo nº 44</h3>
                                    <time>2016 - Abril</time>
                                </div>
                            </div>
                            <div class="item">
                                <img src="img/thumbs/nova_thumb_43.jpg" alt="Artigo nº 43" class="img-thumbnail">
                                <div class="carousel-caption">
                                    <h3>Artigo nº 43</h3>
                                    <time>2016 - Fevereiro</time>
                                </div>
                            </div>

                            <div class="item">
                                <img src="img/thumbs/nova_thumb_42.jpg" alt="Artigo nº 42" class="img-thumbnail">
                                <div class="carousel-caption">
                                    <h3>Artigo nº 42</h3>
                                    <time>2015 - Dezembro</time>
                                </div>
                            </div>

                            <div class="item">
                                <img src="img/thumbs/nova_thumb_41.jpg" alt="Artigo nº 41" class="img-thumbnail">
                                <div class="carousel-caption">
                                    <h3>Artigo nº 41</h3>
                                    <time>2015 - Outubro</time>
                                </div>
                            </div>
                        -->
                        </div>


                        <!-- Controls -->
                        <a class="left carousel-control" href="#carousel_" role="button" data-slide="prev">
                          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                          <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#carousel_" role="button" data-slide="next">
                          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                          <span class="sr-only">Next</span>
                        </a>

                    </div>
                
                
                
            </div>
            
            <div id="sobre_radar">
                
                <div class="container">
                    
                    <div class="row">
                        
                        <div class="col-md-4">
                            <p>Boletim bimestral do IPEA.
                                <small>Divulga resultados instigantes de pesquisas realizadas ou em andamento.</small></p>
                        </div>
                        
                        <div class="col-md-4">
                            <p>Leitores: <small>público não especializado, gestores de políticas públicas e jornalistas.</small></p>
                        </div>
                        
                        <div class="col-md-4">
                            <p>Temas: <small> inovação tecnológica, comércio exterior, infraestrutura, educação e análises setoriais.</small></p>
                        </div>
                        
                    </div>
                    
                </div>
                
            </div>
            
            <div id="call-to-action">
                
                <div class="container">
                    
                    <div class="row text-center">
                        
                        <h2>Informações</h2>
                        <hr>
                        <br/>
                        
                    </div>
                    
                    <div class="row">
                        
                        <iframe id="video-" width="560" height="315" src="https://www.youtube.com/embed/XwippruKeV4?rel=0?ecver=1" frameborder="0" allowfullscreen></iframe>
                        
                        <p>Lançada nesta segunda-feira (27) edição especial do boletim Radar, com seis textos que debatem o financiamento à educação pública de nível superior no Brasil. 
                            <br/>Acesse a publicação em <a href="https://goo.gl/0uMu3v">IPEA/Radar</a>.
                            <br/>
                            Graziela Ferrero Zucoloto – chefe de Divisão de Estudos em Infraestrutura do Ipea</p>
                        <time datetime="2017-03-27">27 de Março de 2017</time>
                    </div>
                    
                </div>
                
            </div>
            
        </section>
        
<?php include_once("footer.php");?>

<script>
    angular.module("radar", []).controller("carouselCtrl", ['$scope', '$http', function($scope, $http){
        $scope.publicacoes = [];
        
        $http({
            method: 'GET',
            url: 'publicacoes'
        }).then(function successCallback(response) {
              
              $scope.publicacoes = response.data;
              
            }, function errorCallback(response) {
              // called asynchronously if an error occurs
              // or server returns response with an error status.
        });
    /*    $scope.publicacoes.push({
            thumbnail_publ: "nova_thumb_48.jpg",
            titulo_publ: "Radar nº 48",
            ano_publ: "2016",
            mes_publ: "Dezembro"
        });
        
        $scope.publicacoes.push({
            thumbnail_publ: "nova_thumb_47.jpg",
            titulo_publ: "Radar nº 47",
            ano_publ: "2016",
            mes_publ: "Outubro"
        });
        
        $scope.publicacoes.push({
            thumbnail_publ: "nova_thumb_46.jpg",
            titulo_publ: "Radar nº 46",
            ano_publ: "2016",
            mes_publ: "Agosto"
        });
        
        $scope.publicacoes.push({
            thumbnail_publ: "nova_thumb_45.jpg",
            titulo_publ: "Radar nº 45",
            ano_publ: "2016",
            mes_publ: "Junho"
        });
     */   
    }]);
</script>
