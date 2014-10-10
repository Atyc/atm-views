<?php
include "header.php";

$page=$_GET['page'];

include "$page" . ".php";

include "footer.php";
?>