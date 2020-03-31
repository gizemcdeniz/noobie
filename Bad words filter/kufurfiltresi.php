<?php

function duzenle($gelen){
$gveri = array("salak", "aptal");
$dveri = array("s***k", "a***l");
$yveri = str_replace($gveri,$dveri,$gelen);
return $yveri;
}


$soz = "salak herif sen neredesin?";
$temizle = duzenle($soz);

echo $temizle;

?>