<footer>
            
            <div class="row row-verde_silver_tree">
                
                <div class="container">
                    
                    <div class="row">
                        
                        <div class="col-md-12">
                            
                            <div class="col-md-4 col-mais-acessados">
                                
                                <h4>ÚLTIMAS PUBLICAÇÕES</h4>
                                <!--
                                <ul class="list-unstyled">
                                    <li>
                                        <h5>Neque porro quisquam est, quister.</h5>
                                        <time>January 01, 2016</time>
                                    </li>
                                    <li>
                                        <h5>Neque porro quisquam est, quister.</h5>
                                        <time>January 01, 2016</time>
                                    </li>
                                </ul>
                                -->
                                <ul class="list-unstyled" ng-repeat="publicacao in publicacoes">
                                    <li>
                                        <a href="../view/edicoes_radar.php">
                                            <center><h5>{{publicacao.titulo_publ}} - Edição de</h5></center>
                                            <center><time>{{publicacao.mes_publ}} - {{publicacao.ano_publ}}</time></center> 
                                        </a>
                                    </li>
                                </ul>
                                
                                <!--
                                <div class="container" ng-controller="ultPublCtrl">
                                    <div class="list-unstyled" ng-repeat="publicacao in publicacoes">
                                        <div class="text-justify">
                                            <h3>{{publicacao.titulo_publ}}</h3>
                                            <time>{{publicacao.num_edicao}} - {{publicacao.ano_publ}}</time>
                                        </div>
                                    </div>
                                </div>
                                -->
                                
                            </div>
                            
                            <div class="col-md-4 col-links">
                                
                                <h4>LINKS</h4>
                                <ul class="list-unstyled">
                                    <li><a href="http://www.ipea.gov.br" target="_blank"><i class=" fa fa-angle-right"></i>IPEA</a></li>
                                    <li><a href="view/temasRadar.html"><i class="fa fa-angle-right"></i>Temas</a></li>
                                    <li><a href="view/radarPDF.html"><i class="fa fa-angle-right"></i>Radar PDF</a></li>
                                </ul>
                                
                            </div>
                            
                            <div class="col-md-4 col-contatos">
                                
                                <h4>CONTATOS</h4>
                                
                                <address>
                                    <i class="fa fa-map-marker"></i> <span>Ipea - Brasília <small>SBS - Quadra 1 - Bloco J - Ed. BNDES 70076-900 - Brasília - DF - Brasil</small></span>
                                </address>
                                
                                <p><a href="06120265422"><i class="fa fa-phone"></i>(61)2026-5422</a></p>
                                
                                <ul class="list-unstyled list-socials">
                                    
                                    <li>
                                        <a href="https://www.facebook.com/IPEA1964" target="_blank"><i class="fa fa-facebook"></i></a>
                                    </li>
                                    
                                    <li>
                                        <a href="https://twitter.com/ipeaonline" target="_blank"><i class="fa fa-twitter"></i></a>
                                    </li>
                                    
                                    <li>
                                        <a href="https://www.youtube.com/user/agenciaipea" target="_blank"><i class="fa fa-youtube"></i></a>
                                    </li>
                                    <li class="page-up">
                                        <a id="page-up" href="#"><i class="fa fa-chevron-up"></i></a>
                                    </li>
                                    
                                </ul>
                                
                            </div>
                            
                        </div>
                        
                    </div>
                    
                </div>
                
            </div>
            
            <div class="row row-caribbean_green">
                
                <div class="container">
                    
                    <p class="center-block">Copyright © 2017 Sites Ipea. Todos os direitos reservados.</p>
                    
                </div>
                
            </div>
            
        </footer>
        
        <script src="../lib/jquery/jquery.min.js"></script>
        <script src="../lib/bootstrap/js/bootstrap.min.js"></script>
        <script src="../lib/bootstrap/jquery-bootpag/lib/jquery.bootpag.js"></script>
        <script src="../lib/owl.carousel/owl.carousel.min.js"></script>
        <script src="../lib/js/efeitos.js"></script>
        
        <script>
            angular.module("radar", [])
                    .controller("carouselCtrl", ['$scope', '$http',  function($scope, $http){
                
                $scope.publicacoes = [];

                $http({
                    method: 'GET',
                    url: 'ultimas-publicacoes'
                }).then(function successCallback(response) {

                      $scope.publicacoes = response.data;

                    }, function errorCallback(response) {
                      // called asynchronously if an error occurs
                      // or server returns response with an error status.
                });
            }]);
        </script>
        
<!--        <script>
            angular.module("radar", [])
                    .controller("carouselCtrl", ['$scope', '$http', function($scope, $http){
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
        </script>-->
        
    </body>
</html>