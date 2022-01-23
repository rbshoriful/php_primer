<?php 
    $title = "Arrays and Printouts";
    include 'includes/header.php' 
?>
<body>
    <h1><?php echo $title ?></h1>
    <?php
        // a variable
        $num = 3;

        // an array
        //only one datatype
        $numbers = array(1,2,3,4,5,6,7,8,9,10);
        //position array
        echo $numbers[5];

        echo "<p>$numbers[9]</p>";

        $size = count($numbers);
        echo "<p>Array Numbers is size: $size </p>";
        // ekhane $size ar jaigate count($numbers) dite hobe jodi upore declar thake tahole evabei thakbe
        for($count = 0; $count < $size; $count++){
            echo "<p>$numbers[$count]</p>";
        }
    ?>
 <?php require 'includes/footer.php' ?>