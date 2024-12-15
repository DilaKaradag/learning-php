<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    
    <title>Document</title>
</head>
<body>
    <?php
    $metin="php de neler yapılabilir?";
    echo $metin."<br>";

    $buyukharf=ucwords($metin); //kelimelerin baş harflerini büyültür.
    echo $buyukharf."<br>";

    $first=ucfirst($metin); //cümlenin başındaki harfi büyültür.
    echo $first;



    ?>
</body>
</html>
