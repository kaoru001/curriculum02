<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

// $fruits = [ 
//     ['りんご',100,3], 
//     ['みかん',50,3], 
//     ['もも',500,6] 
// ];
$fruits = ["りんご" => "100", "みかん" => "50", "もも" => "500"];
// $fruits_kosu = ["りんご" => "3", "みかん" => "3", "もも" => "6"];
// $fruits_kosu = [1,1,1];
// echo $fruits_kosu[0]."<br>";

function a($tanka,$kosu){
    $goukei = $tanka * $kosu;
    return $goukei;
};


foreach ($fruits as $n => $f) {
    $fruits_kosu = [3,3,6];
     if($n === "もも") {
    echo "${n}は".a($f,$fruits_kosu[2])."円です。","<br>";
    }else if($n === "みかん") {
        echo "${n}は".a($f,$fruits_kosu[1])."円です。","<br>";
    }else if($n === "りんご") {
        echo "${n}は".a($f,$fruits_kosu[0])."円です。","<br>";
    }
    // $fruits_kosu = [1,1,2];
    // foreach ($fruits_kosu as $fruits_kosus) {
    //    $w = $fruits_kosus;
    // };
    // echo "${n}は".a($f,3)."円です。","<br>";
    // echo " $f[0]."は".a($f[1],$f[2])."円です。"","<br>";
};

// foreach ($fruits_tanka as $n => $t) {
//     foreach ($fruits_kosu as $e => $k) {
//         echo "${n}は".a($t,$k)."円です","";
//     }
    // echo " $f[0]."は".a($f[1],$f[2])."円です。"","<br>";
// };



// $fruits = ["りんご" => "300", "みかん" => "150", "もも" => "3000"];

// foreach ($fruits as $n => $f) {
//     echo "${n}は${f}円です","<br>";
// }

// 多分違うけどこれで一回出してみる
// コメントアウトのは、どっかコピーで残しとく

// foreach ($fruits as $n => $f) {
//     function a($tanka,$kosu){
//         $goukei = $tanka * $kosu;
//         echo "${n}は${goukei}円です","<br>";
//     };
//     a(150,$f);
// };

?>

</body>
</html>