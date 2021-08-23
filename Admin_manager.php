<?php 
    include ('header.php');
    require ('DB_connection.php');
    $total_sell=0;
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
     
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
      
    
    <style>


    </style>

</head>
<body>

    
    <div class="container-fluid bg-dark" style="padding-bottom: 100px;">
        <div class="team-table bg-dark text-warning">
         <div class="title text-center mb-1">
             <h3 class= "font-weight bolder py-5">Admin Manager</h3>
         </div>
     
     <table class="table table-bordered text-center text-white">
         <thead class="thead">
             <tr>
     
                 <th>ID</th>
                 <th>Full Name</th>
                 <th>Username</th>
                 <th>Actions</th>  
             </tr>
         </thead>
         <tbody>
            <?php
                    $sql= 'SELECT * FROM admins ';
                    $result = mysqli_query($connected, $sql); 

                        while ($admins = mysqli_fetch_array($result)) {?>
                        <tr>
                            <td class="p-3"><?php echo "$admins[id]"; ?></td>
                            <td class="p-3"><?php echo "$admins[full_name]";?></td>
                            <td class="p-3"><?php echo "$admins[username]";?></td>
                            <td class="float-left">
                                <a class="btn btn-outline-danger" href="Admin_delete.php?id=<?php echo $admins['id']; ?>">Delete Admin</a>
                             </td>

                        </tr>
                    <?php 
                    } 
                ?>
                
         </tbody>
     </table>

     
     <div class="text-center pt-4 m-3">
    <a class="btn btn-warning" href="Admin_signup.php">Add Admin</a> 
    <a class="btn btn-warning" href="Admin_update.php">Change Password</a>
    </div>

    </div>


<div class="pt-3"></div>
         <div class="title text-center mb-1 text-warning">
             <h3 class= "font-weight bolder py-5">Earnings</h3>
         </div>
    <table class="table table-bordered text-center text-white">
         <thead class="thead">
             <tr>
                 <th>Game</th>
                 <th>Total Sell</th>
                 <th>Total Price</th>
             </tr>
         </thead>
         <tbody>
            <?php
                    $sql= 'SELECT * FROM games ';
                    $result = mysqli_query($connected, $sql); 

                        while ($games = mysqli_fetch_array($result)) {?>
                            <tr>
                                <td class="p-3"><?php echo "$games[title]"; ?></td>
                                <td class="p-3"><?php echo "$games[total_sell]"; ?></td>
                                 <td class="p-3"><?php $sell = $games['total_sell']*$games['price']; $total_sell+=$sell; echo $sell; ?></td>
                            </tr>
                <?php 
                    } 
                ?>
         </tbody>
     </table>

                <div class="row">
                <div class= col-lg-4></div>     
                <div class= col-lg-4>
                <div class="text-center text-warning pt-5"><h5 class="p-4" style="border: 2px solid white">Total Earnings: <?php echo $total_sell; ?> Taka </h5> </div>
                </div>
                </div>    
                <div class= col-lg-4>
                </div>
   </div> 


    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<?php 
    include ('footer.php');
 ?>


</body>
</html>