<?php 
require_once "../config/config.php";

if($_SERVER['REQUEST_METHOD'] == "POST" )

{
    $first_name = $_POST['first_name'];
$pwd = $_POST['pwd'];

 
try
{
   

    require "../change_account.php";

$sql ="DELETE FROM users WHERE first_name = :first_name AND  pwd = :pwd ";
$stmt = $pdo -> prepare( $sql);

$stmt -> bindParam(":first_name", $first_name);

$stmt -> bindParam(":pwd", $pwd);



$stmt -> execute();


}
catch(PDOException $e)
{
"Error delete user". $e -> getMessage(). "br";
};



}
else
{
    require "../change_account.php";
};










?>

