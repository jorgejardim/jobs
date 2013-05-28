TESTE, TESTE, TESTANDOOOOO!!!  <br />
VOCE CONVIDOU:
<hr />
<?php
function get_data($url) {

    $ch = curl_init();

    $timeout = 5;

    curl_setopt($ch, CURLOPT_URL, $url);

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);

    $data = curl_exec($ch);

    curl_close($ch);

    return $data;
}


//print_r($_POST);
foreach ($_GET['to'] as $url) {
    
    echo '<img src="https://graph.facebook.com/'.$url.'/picture" /> ';
    $res = get_data('https://graph.facebook.com/'.$url);    
    $stuff = json_decode($res, true);
    echo $stuff['name'];
    echo '<hr />';

}
?>
