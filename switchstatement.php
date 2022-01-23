<?php 
    $title = "Switch Statement";
    include 'includes/header.php' 
?>
<body>
    <h1><?php echo $title ?></h1>
    <?php
    $grade = 'A';

    switch($grade){
        case 'F':
            echo '<h2 style="color: green">You are Superman</h2>';
            break;
        case 'B':
            echo '<h2 style="color: blue">You are Well</h2>';
            break;
        default:
            echo '<h2 style="color: red">Your are Failed</h2>';
            break;
    }

    ?>
 <?php require 'includes/footer.php' ?>