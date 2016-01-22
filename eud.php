<?php

$eg = file_get_contents("http://api.vateud.net/online/atc/eg.json");
$lon = file_get_contents("http://api.vateud.net/online/atc/lon.json");
$px = file_get_contents("http://api.vateud.net/online/atc/egpx.json");
$ltc = file_get_contents("http://api.vateud.net/online/atc/ltc.json");
$sco = file_get_contents("http://api.vateud.net/online/atc/sco.json");
$atc_data = json_encode(array_merge(json_decode($eg, true),json_decode($lon, true), json_decode($px, true), json_decode($ltc, true), json_decode($sco, true)));
echo $atc_data;
?>