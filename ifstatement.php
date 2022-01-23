<?php 
    $title = "If Else & ElseIf";
    include 'includes/header.php' 
?>
<body>
    <h1><?php echo $title ?></h1>
    <h3 style="color:red"></h3>
    <?php
    echo '<h2>If Statement</h2>';
    // = equals ==, || or, && and, > greater-than , < less-then,  <= less-than equals  >= greater-than equals
    $grade = 30;
    if($grade >= 50){
        echo '<h3 style="color: green">You have Passed</h3>';
    }
    else{
        echo '<h3 style="color: red">You have Failed</h3>';
    }
    $grade = 'A';
    if($grade == 'A'){
        echo '<h2 style="color: green">You are Supperman </h2>';
    } 
    elseif($grade == 'B'){
        echo '<h2 style="color: blue">Your are Well</h2>';
    } 
    else{
        echo '<h2 style="color: red">Your are Failed</h2>';
    }

    ?>
 <?php require 'includes/footer.php' ?>