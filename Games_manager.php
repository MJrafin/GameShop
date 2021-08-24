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
            <h2 class="text-center pb-3 pt-3 text-white">Games Manager</h2>
                <?php
                    $sql= 'SELECT * FROM games ';
                    $result = mysqli_query($connected, $sql); 

                        while ($games = mysqli_fetch_array($result)) {?>
                            <div class="col-lg-4 pb-4">
                               <div class="card bg-dark text-white card-fix">
                                  <?php  echo '<img class="card-img-top" src="img/',$games['image'],'" alt="" style="width: 100%; height:350px;">';?>
                                  <div class="card-body">
                                     <h3 class="card-title text-center"><?php echo "$games[title]"; ?></h3>
                                     <p><?php echo " $games[description] "; ?></p>
                                     <h5 class="card-title">Price: <?php echo " $games[price] "; ?> Taka</h5>
                                     <h5 class="card-title">Active: <?php if ($games['active'] == 'true') {
                                         echo 'Yes';
                                     }else{echo 'NO';} ?></h5>
                                     <h5 class="card-title">Exclusive: <?php if ($games['exclusive'] == 'true') {
                                         echo 'Yes';
                                     }else{echo 'NO';} ?></h5>
                                     <div class= "text-center pt-3 mt-2">
                                      <a href="Games_Update_form.php?id=<?php echo $games['id']; ?>"><button type="button" name="update" class="btn btn-warning m-1">Update Game</button></a>
                                      <a href="Games_manager_backend.php?id=<?php echo $games['id']; ?>&action=delete"><button type="button" name="delete" class="btn btn-danger">Delete Game</button></a>
                                    </div>
                                  </div>
                               </div>
                            </div>
                <?php }?> 

                <div class="text-center"><a class="mt-3 mb-3 btn btn-success btn-lg" href="Games_add_form.php">Add Game</a></div>
          </div>
     </div>		
  </div>
    




    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script> -->

<?php 
    include ('footer.php');
 ?>
</body>
</html>