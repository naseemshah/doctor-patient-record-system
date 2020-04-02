<?php
session_start();
$dbserver = "localhost:3306";
$dbusername = "root";
$dbpass = "";
$dbName = "doctor-patient";
$conn = mysqli_connect($dbserver,$dbusername,$dbpass,$dbName);
