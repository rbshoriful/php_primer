<?php 
    $title = "While loop & Do-While loop";
    include 'includes/header.php' 
?>
<body>
    <h1><?php echo $title ?></h1>
    <?php
    $grade = 0;
    // infinite loop ar kaj choltei thakbe
    // while($grade < 10){
    //     echo '<p>I am less than 10!</p>';
    // }

    while($grade < 10){
        echo '<p>I am less than 10!</p>';
        $grade++;
    }
    echo 'Exit loop';
    ?>

    <h1><?php echo $title ?></h1>
    <?php
    // post-condition loop
    $grade = 0;
        do{
            echo '<p>I am do while loop!</p>';
            $grade++;
        }while($grade < 10);
        echo 'Exit loop';
    ?>

<?php require 'includes/footer.php' ?>