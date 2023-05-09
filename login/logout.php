<?php
session_start();

// not always prefered when on shared host, it can destroy everyone's work on the shared host.
session_destroy();

// redirect to login page
header('location:../view/index.php');
?>



