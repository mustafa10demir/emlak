<?php
mysql_connect("localhost","root","") or die (mysql_error());
mysql_select_db("real") or die (mysql_error());
mysql_query ( " SET CHARACTER SET UTF8");
?>