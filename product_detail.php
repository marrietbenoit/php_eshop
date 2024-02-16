<?php
include("header.php");
session_start();
var_dump($_SESSION['dataOfProducts'][$_GET["key"]]);

?>


<?php
include("footer.php");
?>
