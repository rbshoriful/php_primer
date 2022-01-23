<?php 
    $title = "Index";
    include 'includes/header.php' 
?>
    <!-- Basic HTML -->
    <h1>hello HTML - PHP Primer</h1>
    <br>
    <?php //Printing to html using echo
    echo 'Hello PHP!';
    echo '<br/>';
    echo 'Second Line';
    echo '<br/>';

    //declare variable
    $name = 'Shoriful Islam';
    $age = 28;
    //echo variable
    // echo $name;
    echo '<h1>My Name Is : '.$name.' </h1>';
    echo '<h1>My age is: '.$age.'</h1>';

    echo "<h1>My Name Is: $name </h1>";
    ?>

    <button type="button" class="btn btn-dark">CLICK ME!</button>
    <button type="button" class="btn btn-primary">CLICK ME!</button>
    <button type="button" class="btn btn-success">CLICK ME!</button>
    <a href="https://www.heroku.com" target="_blank" class="btn btn-danger">Heroku.com</a>
 <?php require 'includes/footer.php' ?>