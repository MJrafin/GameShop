<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo</title>

      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    
     
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script> 
      
    
<style>
  .search {
  width: 100%;
  position: relative;
  display: flex;
}

.searchTerm {
  width: 100%;
  border: 3px solid #000;
  border-right: none;
  padding: 5px;
  height: 40px;
  border-radius: 5px 0 0 5px;
  outline: none;
  color: #000;
  background-color: black;
}



.searchTerm:focus{
  color: #fff;
}


.searchButton {
  width: 40px;
  height: 40px;
  border: 1px solid #000;
  background: #000;
  text-align: center;
  color: #333;
  border-radius: 0 5px 5px 0;
  cursor: pointer;
  font-size: 20px;
}

.searchButton:hover{
    color: #fff;
}



/*Resize the wrap to see the search bar change!*/
.wrap{
  width: 30%;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}


.crop {
   width: 100%;
   height: 470px;
  overflow: hidden;
}

.crop img {
   width: 100%;
  height: 700px;
}

.card-fix{
  height: 650px;

}

</style>

</head>
<body>

    
 	<!-- Background Image -->
    <div class= "crop">
        <img src="img/5494392.jpg" alt="">
    <div class="wrap">
        <div class="text-white text-center pb-5"> <h3 >Welcome to Element Gaming Store</h3></div>


        	<!-- Search Bar -->
            <form action="search_result.php" method="post">
                <div class="search">
           <input type="search" name="search" class="searchTerm" placeholder="Search your desired games">
           <button type="submit" name="searchbt" class="searchButton">
             	<i class="fa fa-search"></i>
          </button>
          		</div>
          </form>
        
     </div>
    </div>



    <!-- Exclusive Games Section  -->

    <div class= "text-white"style="background: #000;">
        <div class="container pb-5">
        <div class="row justify-content-center pt-3 ">
            <h3 class="text-center pb-4 pt-3 text-white">Exclusive Games</h3>
                <?php
                    $sql= 'SELECT * FROM games WHERE exclusive="true" AND active="true";';
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
    




    <!-- Featured Games Section  -->

    <div class= "text-white"style="background: #000;">
        <div class="container pb-5">
        <div class="row justify-content-center pt-3 ">
            <h3 class="text-center pb-4 pt-3 text-white">Featured Category</h3>
               <?php
                    $sql= 'SELECT * FROM category WHERE active = "true" AND featured = "true";';
                    $result = mysqli_query($connected, $sql); 

                        while ($category = mysqli_fetch_array($result)) {?>
                            <div class="col-lg-4 pb-4">
                               <div class="card bg-dark text-white" style="border: black 100px;">
                                  <?php  echo '<img class="card-img-top" src="img/',$category['image'],'" alt="" style="width: 100%; height:350px;">';?>
                                  <div class="card-body">
                                     <h3 class="card-title text-center"><?php echo " $category[title] "; ?></h3>
                                     <div class= "text-center pt-2 pb-1"><a href="category_game.php?cat=<?php echo $category['title'];?>"><button type="button" class="btn btn-info">Browse</button></a></div>
                                  </div>
                               </div>
                            </div>  
                        <?php } ?>  
          </div>
     </div>
    </div>

    


    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script> -->


</body>
</html>