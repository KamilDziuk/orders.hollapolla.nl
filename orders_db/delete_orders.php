<?php  
require "config/config.php";

$currentDateResult = $_POST['currentDateResult'];
$display = $_POST['display'];



    if($currentDateResult === $display)
    {


}
else
{
    $sql = "DELETE FROM orders";

$orders =  $conn -> query($sql) -> fetch_all(MYSQLI_ASSOC); 


};
$conn -> close();
?>