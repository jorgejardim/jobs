<?
header( "HTTP/1.1 301 Moved Permanently" );

if($_GET['id']=='19') {
    header( "Location: http://www.saudeviver.com.br/cursos" ); exit;
    
} if($_GET['id']=='11') {
    header( "Location: http://www.saudeviver.com.br/servicos" ); exit;
   
} if($_GET['id']=='15') {
    header( "Location: http://www.saudeviver.com.br/cursos/curso-de-atualizacao-em-vigilancia-sanitaria--alimentos-" ); exit;

} if($_GET['id']=='10') {
    header( "Location: http://www.saudeviver.com.br/quem-somos" ); exit;
   
} if($_GET['id']=='17') {
    header( "Location: http://www.saudeviver.com.br/cursos/curso-de-atualizacao-em-vigilancia-sanitaria--alimentos-" ); exit;
   
} if($_GET['id']=='21') {
    header( "Location: http://www.saudeviver.com.br/cursos/curso-online-de-consultoria-e-assessoria-de-nutricao-para-servicos-de-alimentacao" ); exit;
   
} if($_GET['id']=='20') {
    header( "Location: http://www.saudeviver.com.br/cursos/material-de-apoio-para-consultoria-e-assessoria-de-nutricao-para-servicos-de-alimentacao" ); exit;
   
} if($_GET['id']=='14') {
    header( "Location: http://www.saudeviver.com.br/links" ); exit;
  
}

header( "Location: http://www.saudeviver.com.br" ); exit;
?>