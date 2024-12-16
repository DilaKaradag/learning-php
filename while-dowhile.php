<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <title>Document</title>
</head>
<body>
    <?php
    $dizi=array("Elma","Armut","Kiraz","Çilek");

    $sayac=0;
    while($sayac<count($dizi)){
        echo $dizi[$sayac]."<br>";
        $sayac++;
    }

    $sayac2=0;
    do {
        echo $dizi[$sayac2]."<br>";
        $sayac2++;
    }
    while($sayac2<count($dizi));


    ?>
</body>
</html>
