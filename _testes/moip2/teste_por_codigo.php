<?php
//sandbox
define('TOKEN',    'LBEBVGIIFPWRPBLKDSTMLGIXD7YP46NB');
define('KEY',      'WKDR1CVFWPQU2Z9IDS69XXEUCWUKDC3HPPEM0VD2');

//producao
//define('TOKEN',    '4CGSGRVO8NCDXMNRFO22WDQIYZZSALEV');
//define('KEY',      '6CCVL1RV2SEZBWM1TLHPNHECJBUJUUUAWCDEXBJY');

require 'api/MoIP.php';
$moip = new MoIP();
$moip->setCredential(array('key'=>KEY,'token'=>TOKEN));

$moip->setEnvironment('sandbox');

$moip->setReceiver(array('LoginMoIP'=>'jorgejardim','Apelido'=>'jorgejardim'));


$moip->setUniqueID(123456);
$moip->setValue('123456');
$moip->setReason('Teste do MoIP-PHP');
$moip->validate();
$moip->send();
echo $moip->getAnswer()->token;
?>
