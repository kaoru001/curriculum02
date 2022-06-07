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
// $fruits = ["りんご" => "1", "みかん" => "2", "もも" => "3"];

// foreach ($fruits as $n => $f) {
//     function a($tanka,$kosu){
//         $goukei = $tanka * $kosu;
//         echo "${n}は${goukei}円です","<br>";
//     };
//     a(150,$f);
// };

$fruits = ["りんご" => "300", "みかん" => "150", "もも" => "3000"];

foreach ($fruits as $n => $f) {
    echo "${n}は${f}円です","<br>";
}

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