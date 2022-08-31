
<!DOCTYPE html>
<html lang="ja">
<head>

     <meta charset="UTF-8">
     <title>サイコロゲーム</title>
     
     <style type="text/css">
h1:before { 
content: url( saikoro_145.png );
vertical-align: middle;
padding-right: 5px;
transform: scale(0.3);


}
</style>

</head>

<body>

<h1>サイコロゲーム</h1>

<?php

$time = $_GET["time"];

if($time==1){


$x=1;
$y=6;

$dice= mt_rand($x, $y); 

print "サイコロの出た目は $dice です。";


}elseif($time==2){

    $x=1;
    $y=6;
    
    $dice= mt_rand($x, $y); 
    
    $dice2= mt_rand($x, $y); 

    print "サイコロの出た目は $dice と $dice2 です。";

    $total=$dice+$dice2;

     print "<br/>"."合計は $total です。";


}elseif($time==3){

    $x=1;
    $y=6;
    
    $dice= mt_rand($x, $y); 
    
    $dice2= mt_rand($x, $y); 

    $dice3= mt_rand($x, $y);    

     print "サイコロの出た目は $dice と $dice2 と $dice3 です。";
     
     $total=$dice+$dice2+$dice3;

     print  "<br/>"."合計は $total です。";

}else{

print "サイコロを振ってください";


}





?>

</body>
</html>



