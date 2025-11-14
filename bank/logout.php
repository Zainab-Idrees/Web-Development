<?php
session_start();

session_destroy();
header("Location: create_account.php");
exit;

