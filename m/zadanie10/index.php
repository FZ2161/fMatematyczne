<?php
    $lb = $_GET["napis"];
    $lb2 = $_GET["l1"];
    $lb3 = $_GET["l2"];
    // echo $lb.$lb2."-->";
    echo min($lb, $lb2, $lb3);
?>