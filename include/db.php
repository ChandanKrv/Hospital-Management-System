<?php
session_start(); //Main Session 

//For Localhost 
if($_SERVER['HTTP_HOST']=="localhost" or $_SERVER['HTTP_HOST']=="192.168.1.125")
{
DEFINE ('DB_USER', 'root');
DEFINE ('DB_PASSWORD', '');
DEFINE ('DB_HOST', 'localhost');
DEFINE ('DB_NAME', 'hms');
}
//For Live Online Server
else
{
DEFINE ('DB_USER', 'candyapkof_hms');
DEFINE ('DB_PASSWORD', 'Robo2020');
DEFINE ('DB_HOST', 'localhost'); 
DEFINE ('DB_NAME', 'candyapkof_hms');
}

$mysqli=$con=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
$conn=$con;
