
<!DOCTYPE html>
<html lang="en">
<head>
  <?php include "common/html_head.php"; include "common/dbConnect.php" ?>
    <title>Pitam Poudel</title>
</head>
<body>

  <?php include "common/header.php" ?>
  <div class="container" style="padding:  50px; min-height:500px;">

<?php

$result =  array();
 $query = "SELECT * FROM `my_blogs`" ;
 $run = mysqli_query($connected,$query);
 if($run){
while ($row = mysqli_fetch_array($run)){
$result[] = $row;
}
  
 }
?>
<?php foreach($result as $blog_posts_item) { ?>
    <div class="card blog-item">
      <div class="row no-gutters">
      
        <div class="col-md-4">
          <img src="<?php echo $blog_posts_item['image'] ?>" class="card-img" style="max-height: 270px; width: auto; max-width: 100%;">
        </div>
        <div class="col-md-8">
          <div class="card-body">
      
            <h5 class="card-title" style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;"><?php echo $blog_posts_item["title"] ?></h5>
            <p class="card-text text-justify" style="font-family: cursive;" >
           <?php echo $blog_posts_item['body'] ?>
              </p>
           <!--
     <p class="text-muted" ><a href="#"  class="btn custom-btn1">Read More</a></p> 
           -->
       
               <p class="text-muted" style="text-align: end; "><i class="far fa-clock"></i> <?php echo $blog_posts_item['timestamp'] ?></p>
             
          </div>
        </div>
       
      </div>
    </div>
   <?php } ?>
  </div>



<?php include "common/footer.php"; include "common/script.php" ?>
  

  


</body>
</html>