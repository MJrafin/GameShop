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
        
        .bold-txt{
            font-weight: bold;
        }

    </style>

</head>

<body> 
    

    <!--Backround Image  -->
 <div style="background-image: url(img/4848691.jpg);">
    
    <div class="row pt-5 pb-3 justify-content center" style="align-items: center;">
        
        <!-- Category Update Form -->
        <div class="col-lg-12" style="align-items: center;">
            <div class="container" style="border:#000 solid; width: 700px; height: 550px; background: #252525b8;">
               
                <div class="contact-form p-3">
                    <div class="title text-center mb-3 pt-4 text-white">
                        <h3 class="font-weight bolder">Category Update</h3>
                    </div>
                    <form action="category_manager_backend.php" class="m-auto bold-txt text-white" method="post" enctype="multipart/form-data">
                        <?php
                        $sql= "SELECT * FROM category WHERE id ='$_GET[id]';";
                        $result = mysqli_query($connected, $sql); 

                        while ($category = mysqli_fetch_array($result)) {?>
                        <div class="form-group pt-5">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" name="title" id="title" value="<?php echo $category['title']; ?>">
                            <input type="text" class="form-control" name="oldtitle" value="<?php echo $category['title']; ?>" hidden>
                        </div>

                        <input type="text" name="category_id" value="<?php echo $_GET['id']; ?>" hidden>

                        <div class="form-group pt-5">
                            <label for="image">Update Category Image: </label>
                             <input type="file" class="form-control-file" id="image" name="image" required>
                        </div>
                        <?php }?> 
            

                        <div class="form-group text-center pt-5 bold-txt">
                            <button type="submit" name="update" class="frm-btn btn btn-warning text-center"> Confirm </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> 
    
    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

<!-- Footer Added -->
<?php 
    include ('footer.php');
 ?>

</body>
</html>