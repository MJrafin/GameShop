<?php 
    include ('header.php');
    require ('DB_connection.php');
    $search = $_POST['search'];
 ?>
<!DOCTYPE html>
<html lang="en">
<head>

    <style>
    	.card-fix{
    		height: 650px;

    	}

    </style>

</head>
<body>
    

   <!-- bg color black  -->
 <div style="background: #000;">
    <div class="container pb-5">
    	<!-- Search Results page -->
        <div class="row justify-content-center pt-3 ">
            <h4 class="text-center pb-5 pt-3 text-white">Search Results of <span class="text-info"><?php echo "$search"; ?></span></h4>
                <?php
                    $sql= "SELECT * FROM games WHERE title LIKE '%$search%' or description LIKE '%$search%' or category LIKE '%$search%';";
                    $result = mysqli_query($connected, $sql); 

                        while ($games = mysqli_fetch_array($result)) {?>
                            <div class="col-lg-4 pb-4">
                               <div class="card bg-dark text-white card-fix">
                                  <?php  echo '<img class="card-img-top" src="img/',$games['image'],'" alt="" style="width: 100%; height:350px;">';?>
                                  <div class="card-body">
                                     <h3 class="card-title text-center"><?php echo " $games[title] "; ?></h3>
                                     <p><?php echo " $games[description] "; ?></p>
                                     <h5 class="card-title">Price: <?php echo " $games[price] "; ?> Taka</h5>
                                     <div class= "text-center pt-4"><a href="order_form.php?id=<?php echo $games['id']; ?>"><button type="button" class="btn btn-info">Buy Now</button></a></div>
                                  </div>
                               </div>
                            </div>
                <?php }?> 
          </div>
     </div>		
  </div>
    



    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script> -->


<!-- Footer Added -->
<?php 
    include ('footer.php');
 ?>
</body>
</html>