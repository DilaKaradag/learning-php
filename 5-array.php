<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    
    <title>Document</title>
</head>
<body>
    <?php
    $deneme="Merhaba PHP";
    $deneme2="Merhaba HTML";
    $deneme3="Merhaba CSS";

    echo $deneme." ".$deneme2." ".$deneme3."<br><br><br>";

    $dizi=array(); //1. dizi tanımlama yöntemi
    $dizi2[]=""; //2. dizi tanımlama yöntemi

    $ornek=array("Merhaba PHP","Merhaba HTML","Merhaba CSS");
    echo $ornek[1]."<br><br><br>";

    $dizi[]="En";
    $dizi[]="Büyük";
    $dizi[]="Fenerbahçe";       //index tanımladığın sürece otomatik koyar. (0,1,2)
    echo $dizi[0]." ".$dizi[1]." ".$dizi[2];
    ?>
</body>
</html>
