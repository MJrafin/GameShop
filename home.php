<!DOCTYPE html>
<html lang="en">
<head>
    <!-- <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"></script>
      
      <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
     
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script> -->
      
    
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
        height: 700px;
        overflow: hidden;
    }

    .crop img {
        width: 100%;
        height: 700px;
    }

</style>

</head>
<body>

    

    <div class= "crop">
        <img src="img/5494392.jpg" alt="">

       
    <div class="wrap">
        <div class="text-white text-center pb-5"> <h3 >Welcome to Element Gaming Store</h3></div>
        <div class="search">
           <input type="text" class="searchTerm" placeholder="Search your desired games">
           <button type="submit" class="searchButton">
             <i class="fa fa-search"></i>
          </button>
        </div>
     </div>
    </div>
    


    


    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script> -->


</body>
</html>