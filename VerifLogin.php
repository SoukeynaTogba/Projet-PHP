<?php
session_start();

if (!isset($_SESSION5['login'])) {
    header("location:index.php?e=1");

    exit;
}
?>