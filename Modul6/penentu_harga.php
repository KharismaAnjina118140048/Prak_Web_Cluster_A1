<?php
function harga ($a, $b="merah"){
    $c=strlen($a);

    if($c<=10){
        $harga= $c*300;
    }else if($c<=20){
        $harga=$c*500;
    }else{
        $harga=$c*700;
    }
    echo "<br> Bet dengan nama ".$a.", harga ". $harga.", berwarna ".$b;
}
echo harga("Test", " biru");
echo harga("Kharisma");
?>