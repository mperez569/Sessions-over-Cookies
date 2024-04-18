<?php
    $a = array(
        array("001", "Laptop", 12),
        array("002", "Samsung TV", 2),
        array("003", "Microwave", 3),
        array("004", "Air Conditioner", 4)
    );

    $max_a = sizeof($a);
    echo "Size of array a ==> ".$max_a."<br>";
    
    $b = array("005", "Fridge", 3);
    array_push($a, $b);
    $max_b = sizeof($a);
    echo "Size of b ==> ".$max_b."<br>";

    //SESSION

    session_start();
    $_SESSION['CART']=array();
    array_push($_SESSION['CART'], $a);

    //Size of cart is 1 bc it only has ONE array within itself, it doesn't count the other arrays with array a
    //this can be considered the "columns" of the array
    $max_c = sizeof($_SESSION['CART']);
    echo "Size of CART ==> ".$max_c."<br>";

    //size is 5 bc within the first element of the array, there are 5 more elements
    //this can be considered the "rows" of the array
    $max_clms = sizeof($_SESSION['CART'][0]);
    echo "Number of rows in CART==> ".$max_clms."<br>";

    //For loops display the elements within the a array within the $_SESSION['CART']
    //first for loop iterates through array a by counting the size of array a, these are the rows
    for($i = 0; $i < $max_b; $i++)
    {
        //second for loop iterates through the number of elements within array $_SESSION['CART'], these are the columns
        for($j = 0; $j < $max_clms; $j++)
        {
            //list function assigns the values 
            while(list($key, $val) = each($_SESSION['CART'][$i][$j]))
            {
                echo "$val ";
            }
            echo "<br>";
        };
    };
?>
