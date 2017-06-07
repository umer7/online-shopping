<?php
session_start();
session_destroy();
header("Location: http://localhost:81/db1/login/index.php");

