<?php
$dbuser = 'root';
$dbpass = '';
$dbserver = 'localhost';
$dbname = 'login_details';


$conn = mysqli_connect($dbserver,$dbuser,$dbpass,$dbname);
  /*  if(!conn) checking the connection, for some reason my server isnt accepting this 
    {
        echo "Connection Was Failed";
    }*/