<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hlavný nadpis</h1>
    <?php
    //zaklady
    $x=10;
    echo $x;
    echo "<br>";
    $meno="Peter";
    echo $meno;
    echo "<br>";
    var_dump($meno);
    echo "<br>";

   //list
    $farby =array("červená","modra","zelena");
    echo $farby[0];
    echo "<br>";

   //prejdem po liste
    foreach($farby as $farba){
        echo "Farba: ".$farba."<br>";
    };

    //slovnik

    $data=array(
        "Peter"=> 25,
        "Jana"=> 30,
        "Marek"=>20
    );

    foreach($data as $name =>$age){
        echo "$name má $age rokov <br>";
    };




    ?>
</body>
</html>