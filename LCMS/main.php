<?php
    session_start();
    if(!isset($_SESSION['username'])){
        header('Location:/LCMS/login.php');
        exit();
    }
     $inactive = 60;
        if( !isset($_SESSION['timeout']) )
        $_SESSION['timeout'] = time() + $inactive; 

        $session_life = time() - $_SESSION['timeout'];

        if($session_life > $inactive)
        { 
            header("Location:/LCMS/logout.php");
            
        }

       

?>

<h1>Main form</h1>
<h3>Wellcome to my system</h3>