<!DOCTYPE html>
<html lang="ar" dir="ltr">
<head>
    <meta charset="UTF-8">
  
   
    <title>Hello</title>
</head>
<body>
<?php

    
    $_car = "Toyota";
    $_car = "Nisaan";
    define('company', 'GMC');
    ?>
    <p> <?php echo "Hello"; echo "World" ?> </p>
    <p>your car is <?php echo $_car ?> </p>
    <?php
    $_car = "BMW";
    echo company; ?>
    <p>your car is <?php echo $_car ?> </p>
    <?php
    $NwarasAge = 19;
    $SamahersAge = 50;
    if($NwarasAge > $SamahersAge) {
        echo " Nwara older than samaher";
    }
    else{
        echo "Nwara younger than samaher";
    }
 
    ?>
    <?php
    $people = [
        ['name' => 'Amal', 'Age' => 3, 'Adress' => 'saudi'],
        ['name' => 'Fahad', 'Age' => 34, 'Adress' => 'Egypt'],
        ['name' => 'Ahmed', 'Age' => 23, 'Adress' => 'Dubai'],
        ['name' => 'Hisah', 'Age' => 20, 'Adress' => 'Oman'],





    ];
    echo $people[2]['Adress'];
    echo "<pre>";
    print_r($people);
    echo "</pre>";
    
    ?>

    <?php
    $i = 10;
    while($i>1) {
        echo "<div>$i</div>";
        $i--;
    }
    ?>
    <?php
    $names = ['amal','ahmed','ali','hisah','waleed'];
    foreach($names as $key => $name) {
        echo "<div>Hello $name indix $key </div>";
        if ($key ==3){
            break;
  
        }
    }
    ?>

    <?php
    function total($price,$tax){
        return $price + $tax;
    }
    echo total(500,25);
 
    ?> -->

    <?php
    if(count($__R)){
        foreach($_POST as $key => $getValues){
            echo "<div> $key : $getValues </div>";
        }
    }
    ?>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">
<input type="text" name="name" placeholder="Name">
<input type="number" name="age" placeholder="Age">
<input type="text" name="adress" placeholder="Adress">
<button type = "submit">save</button>
</form>

</body>
</html> 