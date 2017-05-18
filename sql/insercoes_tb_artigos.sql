SELECT * FROM tb_publicacoes;
SELECT * FROM tb_artigos;

drop table tb_artigos;

INSERT INTO tb_publicacoes VALUES(NULL, 41, 2015, 10, 4, 7, '../Documents/xampp/htdocs/Projeto_IPEA/public_html/img/151106_radar_41.jpg', 'Radar nº 41', '../Documents/xampp/htdocs/Projeto_IPEA/public_html/img/pdfs/151106_radar_41.pdf');
INSERT INTO tb_publicacoes VALUES(NULL, 48, 2016, 12, 5, 9, '../Documents/xampp/htdocs/Projeto_IPEA/public_html/img/nova_thumb_48.jpg', 'Radar nº 48', '../Documents/xampp/htdocs/Projeto_IPEA/public_html/img/pdfs/20170110_radar_48.pdf');

INSERT INTO tb_artigos VALUES(NULL, 1, 'Tributação sobre Empresas no Brasil: comparação internacional', 
'Educação', 'Gabriel Gouvêa Rabello; João Maria de Oliveira', '../Documents/xampp/htdocs/Projeto_IPEA/public_html/img/artigos/151106_radar_41_cap4.pdf');

