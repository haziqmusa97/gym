<?php
$DB_host = "tyduzbv3ggpf15sx.cbetxkdyhwsb.us-east-1.rds.amazonaws.com	";
$DB_user = "stf22xc6hke1jbcf";
$DB_pass = "lz430j7qiuhxlnxr";
$DB_name = "i9nkpk1xscv30ayg";
try
{
 $DB_con = new PDO("mysql:host={$DB_host};dbname={$DB_name}",$DB_user,$DB_pass);
 $DB_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{
 $e->getMessage();
}
?>
