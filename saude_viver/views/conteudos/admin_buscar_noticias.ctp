<?php
$keys[] = 'dppc';
$keys[] = 'anvisa';
$keys[] = 'falta+de+higiene';
$keys[] = 'vigilância+sanitária';

$i =0;
foreach($keys as $k => $v) {
    
    $link = ('https://news.google.com.br/news/feeds?hl=pt-BR&noj=1&prmd=imvns&biw=1230&bih=688&um=1&ie=UTF-8&output=rss&'.
             'q='.$v.
             urldecode(' -remedios').
             urldecode(' -medicação').
             urldecode(' -tratamento').
             urldecode(' -solar').
             urldecode(' -laboratório').
             urldecode(' -laboratórios').
             urldecode(' -farmácia').
             urldecode(' -farmácias').
             urldecode(' -farmacêuticas').
             urldecode(' -farmacêutica').
             urldecode(' -cigarro').
             urldecode(' -estudos'));
    
    $news = simplexml_load_file($link);
    
    foreach($news->channel->item as $item) {
        $url = parse_query($item->link);
        echo ++$i.") <a href='".urldecode($url['url'])."' target='_blank'>".($item->title)."</a>";
        echo " - <a href='http://www.saudeviver.com.br/admin/conteudos/add/?titulo=".($item->title)."&link=".urldecode($url['url'])."'>Cadastrar</a><br /><br />";
    } 
}

function parse_query($var)  {
    $var  = parse_url($var, PHP_URL_QUERY);
    $var  = html_entity_decode($var);
    $var  = explode('&', $var);
    $arr  = array();

    foreach($var as $val) {
        $x          = explode('=', $val);
        $arr[$x[0]] = $x[1];
    }
    unset($val, $x, $var);
    return $arr;
}
 
?>
