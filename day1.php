<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

$jeux = [
'atkPoints' => 10,
'defPoints' => 5,
'doubleatkPoints' => 20,
];
foreach($jeux as $value) {
    echo $value.'<br>';
}
echo '<br>';
echo '<br>';
$array = array("Salade"=>1.03, "Tomate"=>2.3, "Oignon"=>1.85, "Chou rouge"=>0.85);

    asort($array);
    foreach($array as $key => $value){
        echo "  $key/ $value<br>";
    }
    echo '<br>';
    echo '<br>';

    krsort($array);
    foreach($array as $key => $value){
        echo "$key/ $value<br>";
    }
    echo '<br>';
    echo '<br>';
    foreach($array as $key => $value){

        }
        echo (array_sum($array)); // ici le professeur a faire sans utiser la fonction. voir ca maniere sur son cours
        
    echo '<br>';
    echo '<br>';
    $numbers[] = '';
    for ($i = 0; $i <= 20; $i++) {
       
        $numbers[] = $i;
        echo "$i";
    }
    // ou enleve le echo et mettre le var_dump($numbers) apres les accolades.ca marche aussi     
    echo '<br>';
    echo '<br>';
    $numbers[] = '';
    $i = 0;
    while ($i<=20) {
        
        $numbers[] = $i;
        echo "$i";
        $i++;
        
    }
    echo '<br>';
    echo '<br>';

    $multiplications[] = '';
    for ($i = 1; $i <= 10; $i++) {
       
        $numbers[$i] = $i*2;  // dans le tableau je met $i pour preciser que la position commence par 1
        echo $i*2;   // tu peux auussi utiliser le var_dump comme le prof
    }
    echo '<br>';
    echo '<br>';

    $array2 = [5, 20, 6, -6, 100];
    $n = count($array2);
    $max = $array2[0];
    for ($i = 1; $i < $n; $i++)
        if ($max < $array2[$i])
            $max = $array2[$i];
     echo $max;  
     echo '<br>';
    echo '<br>';
    $n = count($array2);
    $min = $array2[0];
    for ($i = 1; $i < $n; $i++)  // le professeur a utilise une autre maniere qui est bonne, car ca te donne directe ment la position du max et min 
        if ($max > $array2[$i])  // il a fait avec le foreach le prof
            $max = $array2[$i];
     echo $min; 
    


   



    ?>


</body>
</html>