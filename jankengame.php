
<!DOCTYPE html>
<html lang="ja">
<head>

     <meta charset="UTF-8">
     <title>じゃんけんゲーム</title>
     
     <style type="text/css">
h1:before { 
content: url( janken.png );
vertical-align: middle;
padding-right: 5px;
transform: scale(0.3);


}
</style>

</head>

<body>

<h1>じゃんけんゲーム</h1>

<?php

$jan = $_GET["jan"];

//相手側
$com= array("グー","チョキ","パー");

$key=array_rand($com, 1);

$com1= $com[$key];

//自分がグーの場合
if($jan=="グー"){

   if($com1=="パー"){

    print "相手は $com1 でした。<br/>あなたの負けです(;´･ω･)";

   }elseif($com1=="チョキ"){

    print "相手は $com1 でした。<br/>あなたの勝ちです(*^-^*)";


   }elseif($com1=="グー"){ 
    
    
    print"相手も $com1 。　あいこで～…";
}
//自分がチョキの場合
}elseif($jan=="チョキ"){

    if($com1=="パー"){

        print "相手は $com1 でした。<br/>あなたの勝ちです(*^-^*)";
    
       }elseif($com1=="チョキ"){
    
        print"相手も $com1 。　あいこで～…";
    
       }elseif($com1=="グー"){ 
        
        
        print "相手は $com1 でした。<br/>あなたの負けです(;´･ω･)";
    }
//自分がパーの場合
}elseif($jan=="パー"){

    if($com1=="パー"){

        print"相手も $com1 。　あいこで～…";
    
    
       }elseif($com1=="チョキ"){
    
        print "相手は $com1 でした。<br/>あなたの負けです(;´･ω･)";
    
       }elseif($com1=="グー"){ 
        
        
        print "相手は $com1 でした。<br/>あなたの勝ちです(*^-^*)";

       }
    }else{

     print"じゃんけんしましょう！　ジャ～ンケ～ン・・・";


    }

?>

</body>
</html>