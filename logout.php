<?php
session_start();
session_unset("user");
session_unset("nip");
session_unset("level");
header("Location: index.php");
?>