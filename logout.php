<?php
session_start();
session_destroy();
header("location:dropdown.html?msg=successfully logged out");
?>