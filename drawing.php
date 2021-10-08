<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
//for ($i = 0; $i <= 5; $i++) {
//    for ($j = 0; $j < $i; $j++) {
//        echo "*";
//    }
//    echo "<br>";
//}


//for ($i = 7;$i >=1;$i--){
//    for ($j=1;$j <=$i;$j++){
//        echo "*";
//    }echo "<br>";
//}
//

for ($i = 0; $i <= 6; $i++) {
    for ($j = 6; $j > $i; $j--) {
        echo "&nbsp;&nbsp;";
    }
    for ($k = 0; $k < $i; $k++) {
        echo "*&nbsp&nbsp;";
    }
    echo "<br>";
}



?>



</body>
</html>


