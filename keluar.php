<?php 
    session_start();
    session_destroy();
    echo '<script>window.location="Sign_In.php"</script>';
?>