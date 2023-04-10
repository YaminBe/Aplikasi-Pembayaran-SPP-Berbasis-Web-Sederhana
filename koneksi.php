


<?PHP error_reporting(E_ALL ^ (E_NOTICE | E_WARNING)); ?>

<?php
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    session_start();
    $konek = new mysqli("localhost","root","","sppsekolah");
            
?>