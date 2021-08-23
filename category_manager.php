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
    
   
  <div style="background: #000;">
    <div class="container pb-5" style="background-color: #000;">

        <div class="row justify-content-center pt-3 ">
            <h2 class="text-center pb-3 pt-3 text-white">Categories</h2>
                <?php
                    $sql= 'SELECT * FROM category ';
                    $result = mysqli_query($connected, $sql); 

                        while ($category = mysqli_fetch_array($result)) {?>
                            <div class="col-lg-4 pb-4">
                               <div class="card bg-dark text-white" style="border: black 100px;">
                                  <?php  echo '<img class="card-img-top" src="img/',$category['image'],'" alt="" style="width: 100%; height:350px;">';?>
                                  <div class="card-body">
                                     <h3 class="card-title text-center"><?php echo " $category[title] "; ?></h3>
                                     <div class= "text-center pt-5">
                                      <a href="category_update_form.php"><button type="button" class="btn btn-warning m-1">Update Category</button></a>
                                      <a href="category_manager_backend.php?id=<?php echo $category['id']; ?>&action=delete"><button type="button" name="delete" class="btn btn-danger">Delete Category</button></a>
                                    </div>
                                  </div>
                               </div>
                            </div>
                        <?php } ?>
                        <div class="text-center"><a class="mt-3 mb-3 btn btn-success btn-lg" href="category_add_form.php">Add Category</a></div>
         </div>
    </div>
 </div>
    
    


    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script> -->
<?php 
    include ('footer.php');
 ?>

</body>
</html>