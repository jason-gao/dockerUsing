<?php


function geturl($url){
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $output = curl_exec($ch);

    var_dump(curl_error($ch));
    curl_close($ch);

    return $output;
}

//$c = geturl("http://www.baidu.com");
//$c = geturl("http://sso.xx.cc");
//var_dump($c, "<br/>");

$f = "/etc/hosts";

var_dump(implode("<br/>", explode("\n", file_get_contents($f))));