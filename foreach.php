<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $dizi=array("Mehmet","isim"=>"Ahmet","bilgi"=>"Fatma");

    foreach($dizi as $anahtar=>$bilgi){
        echo $anahtar."-".$bilgi."<br />";
    }
    ?>
</body>
</html>
