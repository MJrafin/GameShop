<?php 
    include ('header.php');
    require ('DB_connection.php');
 ?>
<!DOCTYPE html>
<html lang="en">
<body>

    
    <div class="container-fluid bg-dark" style="padding-bottom: 100px;">
        <div class="team-table bg-dark text-warning">
         <div class="title text-center mb-1">
             <h3 class= "font-weight bolder py-5">Pending Orders</h3>
         </div>
     
     <table class="table table-bordered text-center text-white">
         <thead class="thead">
             <tr>
     
                 <th>ID</th>
                 <th>Name</th>
                 <th>Email</th>
                 <th>Address</th> 
                 <th>Phone</th>
                 <th>Game</th>
                 <th>Order Date</th>
                 <th>Total Price</th>
                 <th>Action</th>
             </tr>
         </thead>
         <tbody>
            <?php
                    $sql= 'SELECT * FROM orders where status ="pending"';
                    $result = mysqli_query($connected, $sql); 

                        while ($orders = mysqli_fetch_array($result)) {?>
                        <tr>
                            <td class="p-3"><?php echo "$orders[id]"; ?></td>
                            <td class="p-3"><?php echo "$orders[customer_name]"; ?></td>
                            <td class="p-3"><?php echo "$orders[customer_email]"; ?></td>
                            <td class="p-3"><?php echo "$orders[customer_address]"; ?></td>
                            <td class="p-3"><?php echo "$orders[customer_phone]"; ?></td>
                            <td class="p-3"><?php echo "$orders[game]"; ?></td>
                            <td class="p-3"><?php echo "$orders[order_date]"; ?></td>
                            <td class="p-3"><?php echo "$orders[total_price]"; ?> taka</td>
                            <td class="float-left">
                            <a class="btn btn-success" href="order_backend.php?id=<?php echo $orders['id']; ?> & title=<?php echo $orders['game']; ?>">Confirm Order</a>
                             </td>
                        </tr>
                <?php 
                    } 
                ?>
         </tbody>
     </table>


   <div class="pt-5 mb-5">
   <div class="title text-center mb-1">
             <h3 class= "font-weight bolder py-5">Confirm Orders</h3>
         </div>

     <table class="table table-bordered text-center text-white">
         <thead class="thead">
             <tr>
                 <th>ID</th>
                 <th>Name</th>
                 <th>Email</th>
                 <th>Address</th> 
                 <th>Phone</th>
                 <th>Game</th>
                 <th>Order Date</th>
                 <th>Total Price</th>
             </tr>
         </thead>
         <tbody>
            
         <?php
                    $sql= 'SELECT * FROM orders where status ="confirm"';
                    $result = mysqli_query($connected, $sql); 

                        while ($orders = mysqli_fetch_array($result)) {?>
                        <tr>
                            <td class="p-3"><?php echo "$orders[id]"; ?></td>
                            <td class="p-3"><?php echo "$orders[customer_name]"; ?></td>
                            <td class="p-3"><?php echo "$orders[customer_email]"; ?></td>
                            <td class="p-3"><?php echo "$orders[customer_address]"; ?></td>
                            <td class="p-3"><?php echo "$orders[customer_phone]"; ?></td>
                            <td class="p-3"><?php echo "$orders[game]"; ?></td>
                            <td class="p-3"><?php echo "$orders[order_date]"; ?></td>
                            <td class="p-3"><?php echo "$orders[total_price]"; ?> taka</td>
                        </tr>
                <?php 
                    } 
                ?>
         </tbody>
     </table>
        </div>
    </div>
</div>
<?php 
    include ('footer.php');
 ?>


</body>
</html>