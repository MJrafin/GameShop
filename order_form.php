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
    <div style="background-image: url(img/4848691.jpg);">
    <div class="row pt-5 pb-3 justify-content center" style="align-items: center;">
        
        
        <div class="col-lg-12" style="align-items: center;">
            <div class="container" style="border:#000 solid; width: 700px; height: 750px; background: #252525b8;">
                <div class="contact-form p-3">
                    <div class="title text-center mb-3 pt-4 text-white">
                        <h3 class="font-weight bolder">Order Form</h3>
                    </div>
                    <form action="order_backend.php" class="m-auto bold-txt text-white" method="post">
                        <div class="form-group pt-5">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" name="name" id="name" required>
                        </div>

                        <div class="form-group pt-5">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" name="email" id="email" required>
                        </div>

                        <div class="form-group pt-5">
                            <label for="location">Full Address</label>
                            <input type="text" class="form-control" id="address" name="address" required>
                        </div>

                        <div class="form-group pt-5">
                            <label for="inputZip">Phone Number</label>
                            <input type="number" class="form-control" name="phone" id="phone" min="0" required>
                        </div>
                        <input type="text" class="form-control" name="game_id" id="game_id" value="<?php echo $_GET['id']; ?>" hidden>
                        <input type="number" class="form-control" name="price" id="price" value="<?php echo $_GET['price']; ?>" hidden>
                        </div>

                        <div class="form-group text-center pt-5 bold-txt">
                            <button type="submit" name="submit" class="frm-btn btn btn-warning text-center"> Confirm </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> 
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<?php 
    include ('footer.php');
 ?>

</body>
</html>