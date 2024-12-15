<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    
    <title>Document</title>
</head>
<body>
    <?php
    $bilgiler=array("Meyveler"=>array("Elma","Armut","Muz"),
    "Sebzeler"=>array("Biber","Patlıcan","Soğan"),
    "İsimler"=>array("Zeynep","Dila","Sıla")

);

    ?>
    <ul>
        <li><?php echo $bilgiler["Meyveler"][0]; ?></li>
    </ul>
    <ul>
        Sebzeler
            <li><?php echo $bilgiler["Sebzeler"][0]; ?></li>
            <li><?php echo $bilgiler["Sebzeler"][1]; ?></li>
            <li><?php echo $bilgiler["Sebzeler"][2]; ?></li>
    </ul>
</body>
</html>
