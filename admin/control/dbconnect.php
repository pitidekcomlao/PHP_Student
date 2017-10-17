<?php

	 $DBhost = "localhost";
	 $DBuser = "root";
	 $DBpass = "";
	 $DBname = "std";

	 $DBcon = new MySQLi($DBhost,$DBuser,$DBpass,$DBname);
   $DBcon->set_charset("utf8");
     if ($DBcon->connect_error) {
         die("ERROR : -> ".$DBcon->connect_error);
     }
