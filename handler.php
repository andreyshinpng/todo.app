<?php

require_once("dbconnect.php");

if(isset($_POST["btn-submit"]) && !empty($_POST["btn-submit"])) {
    $conn -> query("INSERT INTO todolist (what_to_do) values ('".$_POST["what_to_do"]."')");
    header("Location: $siteAddress");
}