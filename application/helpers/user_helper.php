<?php
    function checkUserRole($requiredRole) {
        if ($_SESSION['user_type'] !== $requiredRole) {
            // Redirect or show error
            header("Location: access_denied.php");
            exit;
        }
    }

    // Show if user Accessible
    function viewUserRole($requiredRole) {
        if ($_SESSION['user_type'] !== $requiredRole) {
            return false;
        }else{
            return true;
        }
    }
