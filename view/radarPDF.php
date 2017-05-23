<?php include_once ("header.php");?>

        
        <section>
            
            <div id="edicoes" class="container">
                
                <div class="row text-center">
                    <h2>Edições Completas</h2>
                    <hr>
                </div>
                
                <div class="row">
                    
                    <div id="opcoesOrdenar" class="col-lg-3 col-md-3 col-sm-3 col-xs-3 pull-right" >
                    
                        <label class="control-label" for="ordenar">Ordenar por:</label>
                        <select class="select form-control" name="opcoes" data-toggle="select">
                            <option value="dataPubl">Data de Publicação</option>
                            <option value="edEspec">Edições Específicas</option>
                            <option value="porTema">Tema</option>
                            <option value="porAno">Ano</option>
                            <option value="mesAno">Mês / Ano</option>
                        </select>
                        
                    </div>
                    
                </div>
                
                <div>
                    <button type="button" id="btn-artigo-prev"><i class="fa fa-angle-left"></i></button>
                    <button type="button" id="btn-artigo-next"><i class="fa fa-angle-right"></i></button>
                </div>
                
                <div class="row thumbnails">
                    
                    <div class="col-md-7">
                        <h3>Artigo nº 48</h3>
                        <img src="../img/170124_radar_48.jpg" alt="Artigo nº 48">
                        <time>2016 - Dezembro</time>
                    </div>
                        
                    <div class="col-md-7">
                        <h3>Artigo nº 47</h3>
                        <img src="../img/170124_radar_47.jpg" alt="Artigo nº 47">
                        <time>2016 - Outubro</time>
                    </div>

                    <div class="col-md-7">
                        <h3>Artigo nº 46</h3>
                        <img src="../img/161108_radar_46.jpg" alt="Artigo nº 46">
                        <time>2016 - Agosto</time>
                    </div>

                    <div class="col-md-7">
                        <h3>Artigo nº 45</h3>
                        <img src="../img/160714_radar_45.jpg" alt="Artigo nº 45">
                        <time>2016 - Junho</time>
                    </div>
                    
                </div>
                
                <div>
                    <button type="button" id="btn2-artigo-prev"><i class="fa fa-angle-left"></i></button>
                    <button type="button" id="btn2-artigo-next"><i class="fa fa-angle-right"></i></button>
                </div>
                
                <div class="row thumbnails">
                    
                    <div class="col-md-7">
                        <h3>Artigo nº 44</h3>
                        <img src="../img/160502_radar_44.jpg" alt="Artigo nº 44">
                        <time>2016 - Abril</time>
                    </div>
                    
                    <div class="col-md-7">
                        <h3>Artigo nº 43</h3>
                        <img src="../img/160309_radar_43.jpg" alt="Artigo nº 43">
                        <time>2016 - Fevereiro</time>
                    </div>
                    
                    <div class="col-md-7">
                        <h3>Artigo nº 42</h3>
                        <img src="../img/151228_radar_42.jpg" alt="Artigo nº 42">
                        <time>2015 - Dezembro</time>
                    </div>
                    
                    <div class="col-md-7">
                        <h3>Artigo nº 41</h3>
                        <img src="../img/151106_radar_41.jpg" alt="Artigo nº 41">
                        <time>2015 - Outubro</time>
                    </div>
                    
                </div>
                
            </div>
            
        </section>
        
<?php include_once ("footer.php");?>
