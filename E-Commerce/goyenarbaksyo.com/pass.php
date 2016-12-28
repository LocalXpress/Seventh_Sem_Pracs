<?php
 2 // WARNING: THIS CODE IS INSECURE. DO NOT USE THIS CODE.
 3 $password = "";
 4 $charset = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
 5 
 6 for($i = 0; $i < 8; $i++)
 7 {
 8     $random_int = mt_rand();
 9     $password .= $charset[$random_int % strlen($charset)];
10 }
11 
12 echo $password, "\n";
13 
14 ?>