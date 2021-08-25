<?php 
    include ('header.php');
    require ('DB_connection.php');

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    
      
    
    <style>
        
        .bold-txt{
            font-weight: bold;
        }

    </style>

</head>

<body> 
    
    <!-- Background Image -->
    <div style="background-image: url(img/4848691.jpg);">
    
    <div class="row pt-5 pb-3 justify-content center" style="align-items: center;">
        
        <!-- Category Add form -->
        <div class="col-lg-12" style="align-items: center;">
            <div class="container" style="border:#000 solid; width: 700px; height: 550px; background: #252525b8;">
               
                <div class="contact-form p-3">
                    <div class="title text-center mb-3 pt-4 text-white">
                        <h3 class="font-weight bolder">Add Category</h3>
                    </div>
                    <form action="category_manager_backend.php" class="m-auto bold-txt text-white" method="post" enctype="multipart/form-data">
                        
                        <div class="form-group pt-5">
                            <label for="name">Title</label>
                            <input type="text" class="form-control" name="title" id="title" required>
                        </div>

                        <div class="form-group pt-5">
                            <label for="image">Enter Category Image: </label>
                             <input type="file" class="form-control-file" id="image" name="image">
                        </div>

                        <div class="form-group pt-5 m-2">
                            <label for="location">Active </label>
                            <div class="form-check form-check-inline">
                              <input class="form-check-input" type="radio" name="active" id="active1" value="true">
                              <label class="form-check-label" for="active1">Yes</label>
                            </div>
                            <div class="form-check form-check-inline">
                              <input class="form-check-input" type="radio" name="active" id="active2" value="false">
                              <label class="form-check-label" for="active2">No</label>
                            </div>
                        </div>

                        <div class="form-group pt-3 m-2">
                            <label for="location">Featured </label>
                            <div class="form-check form-check-inline">
                              <input class="form-check-input" type="radio" name="featured" id="featured1" value="true">
                              <label class="form-check-label" for="featured1">Yes</label>
                            </div>
                            <div class="form-check form-check-inline">
                              <input class="form-check-input" type="radio" name="featured" id="featured2" value="false">
                              <label class="form-check-label" for="featured2">No</label>
                            </div>
                        </div>
                </div>

                        <div class="form-group text-center pt-5 bold-txt">
                            <button type="submit" name="add" class="frm-btn btn btn-warning text-center"> Confirm </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> 



<!-- Footer Added  -->
<?php 
    include ('footer.php');
 ?>

</body>
</html>