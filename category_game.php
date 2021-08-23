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
    	.card-fix{
    		height: 650px;

    	}

    </style>

</head>
<body>
    
 <div style="background: #000;">
    <div class="container pb-5">
        <div class="row justify-content-center pt-3 ">
            <h2 class="text-center pb-3 pt-3 text-white"><?php echo $_GET['cat']; ?></h2>
                <?php
                        $cate = $_GET['cat'];
                        $sql= "SELECT * FROM games WHERE category = '$cate';";
                        $result = mysqli_query($connected, $sql);
                        while ($games = mysqli_fetch_array($result)) {?>
                            <div class="col-lg-4 pb-4">
                               <div class="card bg-dark text-white card-fix">
                                  <?php  echo '<img class="card-img-top" src="img/',$games['image'],'" alt="" style="width: 100%; height:350px;">';?>
                                  <div class="card-body">
                                     <h3 class="card-title text-center"><?php echo " $games[title] "; ?></h3>
                                     <p><?php echo " $games[description] "; ?></p>
                                     <h5 class="card-title">Price: <?php echo " $games[price] "; ?> Taka</h5>
                                     <div class= "text-center pt-4"><a href="order_form.php?title=<?php echo $games['title']; ?> & price=<?php echo $games['price']; ?>"><button type="button" class="btn btn-info">Buy Now</button></a></div>
                                  </div>
                               </div>
                            </div>
                <?php }?>

          </div>
     </div>		
  </div>
    




    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script> -->

<?php 
    include ('footer.php');
 ?>
</body>
</html>