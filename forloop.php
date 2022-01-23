<?php 
    $title = "For loop";
    include 'includes/header.php' 
?>
<body>
    <h1><?php echo $title ?></h1>
    <?php
    // for loop
    for($count = 0; $count < 10; $count++){
        echo '<p>Hello World</p>';
    }
    for($count = 1; $count <= 10; $count++){
        echo "<p>The Count is : $count</p>";
    }
    ?>
 <?php require 'includes/footer.php' ?>