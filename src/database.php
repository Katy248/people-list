<?php
define("HOSTNAME", "localhost");
define("USERNAME", "root");
define("DB_PASSWORD", "P@\$\$w0rd");
define("DATABASE", "people-db");

$connection = mysqli_connect(HOSTNAME, USERNAME, DB_PASSWORD, DATABASE);

if (!$connection) {
    die("Connection failed");
}
