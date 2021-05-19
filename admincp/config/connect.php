<?php

$mysqli = new mysqli("localhost", "root", "", "webmarket");

if ($mysqli->connect_errno) {
    echo "Kết nối MYSQLi Lỗi" . $mysqli->connect_error;
    exit();
}
