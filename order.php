<?php 
    include ('header.php');
    require ('DB_connection.php');
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
             <h3 class= "font-weight bolder py-5">Pending Orders</h3>
         </div>
     
     <table class="table table-bordered text-center text-white">
         <thead class="thead">
             <tr>
     
                 <th>ID</th>
                 <th>Name</th>
                 <th>Email</th>
                 <th>Address</th> 
                 <th>Game</th>
                 <th>Order Date</th>
                 <th>Total Price</th>
                 <th>Action</th>
             </tr>
         </thead>
         <tbody>
            
                        <tr>
                            <td class="p-3">1</td>
                            <td class="p-3">Mahfuj Ahmed Kim</td>
                            <td class="p-3">mafhujkim@lol.com</td>
                            <td class="p-3">123/1, Bhooter Goli, Golachipa, Dhaka</td>
                            <td class="p-3">GTA 5</td>
                            <td class="p-3">28 August 2022</td>
                            <td class="p-3">2000 taka</td>
                            <td class="float-left">
                            <a class="btn btn-success" href="">Confirm Order</a>
                             </td>
                        </tr>
                
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
                 <th>Game</th>
                 <th>Order Date</th>
                 <th>Total Price</th>
             </tr>
         </thead>
         <tbody>
            
                        <tr>
                            <td class="p-3">1</td>
                            <td class="p-3">Mahfuj Ahmed Kim</td>
                            <td class="p-3">mafhujkim@lol.com</td>
                            <td class="p-3">123/1, Bhooter Goli, Golachipa, Dhaka</td>
                            <td class="p-3">GTA 5</td>
                            <td class="p-3">28 August 2022</td>
                            <td class="p-3">2000 taka</td>
                        </tr>
 
         </tbody>
     </table>
        </div>
    </div>
</div>

    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<?php 
    include ('footer.php');
 ?>


</body>
</html>