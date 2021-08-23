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
            <div class="container" style="border:#000 solid; width: 700px; height: 850px; background: #252525b8;">
               
                <div class="contact-form p-3">
                    <div class="title text-center mb-3 pt-4 text-white">
                        <h3 class="font-weight bolder">Add Game</h3>
                    </div>
                    <form action="" class="m-auto bold-txt text-white" method="post">
                        
                        <div class="form-group pt-5">
                            <label for="name">Title</label>
                            <input type="text" class="form-control" name="title" id="title" required>
                        </div>


                       <!--  <div class="form-group pt-5">
                            <label for="name">Category</label>
                            <input type="text" class="form-control" name="title" id="title" required>
                        </div> -->

                        <div class="form-group pt-5">
                             <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Category </label>
                             <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
                             <option selected>Choose...</option>
                             <option value="1">Action</option>
                             <option value="2">Sports</option>
                             <option value="3">FPS</option>
                        </select>
                        </div> 


                        <div class="form-group pt-5">
                            <label for="exampleFormControlFile1">Enter Image</label>
                             <input type="file" class="form-control-file" id="">
                        </div>

                        <div class="form-group pt-5">
                            <label for="description">Description</label>
                            <input type="text" class="form-control" id="description" name="description">
                        </div>

                        <div class="form-group pt-5">
                            <label for="price">Price</label>
                            <input type="number" class="form-control" name="price" id="price" min="0" required>
                        </div>

                        <div class="form-group pt-5 m-2">
                            <label for="">Active </label>
                            <div class="form-check form-check-inline">
                              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                              <label class="form-check-label" for="inlineRadio1">yes</label>
                            </div>
                            <div class="form-check form-check-inline">
                              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                              <label class="form-check-label" for="inlineRadio2">No</label>
                            </div>
                        </div>

                        <div class="form-group pt-3 m-2">
                            <label for="location">Exclusive </label>
                            <div class="form-check form-check-inline">
                              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                              <label class="form-check-label" for="inlineRadio1">Yes</label>
                            </div>
                            <div class="form-check form-check-inline">
                              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                              <label class="form-check-label" for="inlineRadio2">No</label>
                            </div>
                        </div>


            
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