
<?php

$url="https://fakestoreapi.com/products/";
$ch=curl_init();
curl_setopt($ch,CURLOPT_URL,$url);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
$result=curl_exec($ch);
curl_close($ch);
$result=json_decode($result);
//echo '<pre>';
//print_r($result[0]->image);

?>

