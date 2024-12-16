<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    
    <title>Document</title>
</head>
<body>
    <?php

    $dizi=array("Ali","Ahmet","Mehmet","Ayşe","Musa");

    for($i=0; $i<5; $i++){ //$i<count($dizi); de kullanabilirsin. Eleman sayısı kadar döngüye girer.
        echo $dizi[$i]."<br>";
    }
    ?>
    <select>
        <?php
        for($x=1961; $x<=2020; $x++){
            echo '<option>'.$x.'</option>';
        }
        ?>
    </select>
</body>
</html>
