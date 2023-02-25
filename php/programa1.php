<?php

$frutas = "naranja";
$frutas = "pera";
$frutas = "uva";

$list_frutas = array("piña", "mandarina", "manzana");
//echo $frutas;
//if /else
if ($frutas == "pera"){
    echo "la pera es saludable";

} else{
    echo "entonces no es pera";
}
foreach($list_frutas as $item){
    echo "fruta:" .$item;
}

?>