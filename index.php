<?php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$mysqli = new mysqli("db", "user", "pass");

/* print server version */
printf("Server version: %s\n", $mysqli->server_info);