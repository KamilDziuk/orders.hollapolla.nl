<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Displaying Orders</title>
</head>
<body>
    <div id="printOrders"></div>
<?php require "orders_db/get_orders.php";

?>
<script>
let date = new Date();
  
  let currentDateResult =  date.getFullYear() + "-" +
  ("0" + (date.getMonth() + 1)).slice(-2) + "-" + ("0" + date.getDate()).slice(-2) ;
let orders =  <?php echo json_encode($orders)  ?>






let display =  orders.map( allOrders => {
    return `${allOrders.data}`;
})


let displayOrders =  orders.map( displayOrders => {
    return `<br><br>
   codeNumber: ${displayOrders.orderNumber}<br>
    orderNumber: ${displayOrders.codeNumber}<br>
  quantity: ${displayOrders.quantity}<br>
  lastName: ${displayOrders.lastName}<br>
  email: ${displayOrders.email}<br>
   addres: ${displayOrders.addres}<br>
  data: ${displayOrders.data}<br>
  time: ${displayOrders.time}<br>
   message: ${displayOrders.message}<br><br>`;
}).join(`\n`)

document.querySelector("#printOrders").innerHTML = displayOrders;
formDataDate = new FormData()

formDataDate.append('currentDateResult',currentDateResult);
formDataDate.append('display',display[0]);

fetch('orders_db/delete_orders.php',
    {
method: "POST",
body: formDataDate
    }
)

setInterval(() => {
    location.reload();
},50000)
</script>
</body>
</html>