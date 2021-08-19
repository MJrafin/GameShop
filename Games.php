<?php 
    include ('header.php');
    require ('DB_connection.php');

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script> -->
      
    
    <style>


    </style>

</head>
<body>
    


    <div class="container-fluid pb-5" style="background-color: #000;">

        <div class="row justify-content-center pt-3 ">
            <h2 class="text-center pb-3 pt-3 text-white">Action Games</h3>
            <div class="col-lg-3">
               <div class="card bg-dark text-white">
                  <img class="card-img-top" src="img/gta.jpg" alt="" style="width: 100%; height:350px;">
                  <div class="card-body">
                     <h3 class="card-title text-center">GTA 5</h3>
                     <p>Grand Theft Auto V for PC offers players the option to explore the award-winning world of Los Santos and Blaine County in resolutions of up to 4k and beyond.</p>
                     <h5 class="card-title">Price: 2000 Taka</h5>
                     <div class= "text-center pt-4"><a href=""><button type="button" class="btn btn-info">Buy Now</button></a></div>
                  </div>
               </div>
            </div>
            <div class="col-lg-3">
                <div class="card bg-dark text-white">
                   <img class="card-img-top" src="img/cod.jpg" alt="" style="width: 100%; height:350px;">
                   <div class="card-body">
                      <h3 class="card-title text-center">Call of Duty: MW</h3>
                      <p>The iconic first-person shooter game is back! Cross play, free maps and modes, and new engine deliver the largest technical leap in Call of Duty history.</p>
                      <h5 class="card-title">Price: 1500 Taka</h5>
                      <div class= "text-center pt-4"><a href=""><button type="button" class="btn btn-info">Buy Now </button></a></div>
                   </div>
             </div> 
             </div> 

           <div class="col-lg-3">
            <div class="card bg-dark text-white">
                  <img class="card-img-top" src="img/pubg.jpg" alt="" style="width: 100%; height:350px;">
                  <div class="card-body">
                     <h3 class="card-title text-center">PUBG</h3>
                     <p>PUBG is a battle royale shooter that pits 100 players against each other in a struggle for survival.its platforms and voice support and movements beyond gaming universe.</p>
                     <h5 class="card-title">Price: 1200 Taka </h5>
                     <div class= "text-center pt-4"><a href=""><button type="button" class="btn btn-info">Buy Now</button></a></div>
                  </div>
               </div>
         </div>
         </div>
    </div>
 
    

    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script> -->

<?php 
    include ('footer.php');
 ?>
</body>
</html>