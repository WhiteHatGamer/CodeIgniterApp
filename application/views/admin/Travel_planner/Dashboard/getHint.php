<?php

    // Session Start to Check if User Logged In
   @session_start();

    // Checking If User is Logged In
    if(!isset($_SESSION['email'])){
        echo "<h3>You Are Logged out Please Login Again!!!</h3><br>";
        echo '<a href="<?=adminTravelPlannerUrl()?>">Home</a><br>';
        exit;
    }

?>