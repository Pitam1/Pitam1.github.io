
<?php
include "common/dbConnect.php";
if(isset($_POST["feedback"])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['feedback'];
    $sendmessageq = "INSERT INTO `feedbacks` (`name`, `email`, `phone`, `message`) VALUES ( '$name' , '$email' , '$phone', '$message');";
    $sendmessage = mysqli_query($connected , $sendmessageq);
}
?>
    <div style="background-color: rgba(0, 0, 0, 0.753); ">
      <div class="container" style="padding-bottom: 20px;">
        <div class="row">
       <div class="col-md-4" style="margin: 80px 0px;">
              <h5 style="color: white; ">Contact Me</h5>
              <img style="margin-top: 25px; width: 80px; height: 80px; border-radius: 5%;" src="images/admin.jpg" class="img-fluid" alt="">
             <h6 style="margin-top: 30px; color: white;"><i class="fas fa-map-marker-alt"></i>&nbsp;&nbsp;&nbsp;&nbsp;Saipu Ramechhap</h6>
             <h6 style="margin-top: 30px; color: white;"><i class="fas fa-phone"></i>&nbsp;&nbsp;&nbsp;&nbsp;9841307947</h6>
             <h6 style="margin-top: 30px; color: white;"><i class="fas fa-envelope"></i>&nbsp;&nbsp;&nbsp;&nbsp;admin@pitampoudel.com.np</h6>
      
             <h5 style="color: white; margin-top: 60px; margin-bottom: 30px; ">Connect with me on</h5>
            <div class="row" >
            
              <a href="https://www.facebook.com/pitampoudel" target="_blank" style=" margin-left: 20px; border-radius: 50%; border: 0px; background-color:  #3b5998; " class="btn btn-primary"><i class="fab fa-facebook-f"></i></a>
         
            </div>
          </div>
          <div class="col-md-4" style="margin: 80px 0px; ">
            <h5 style="color: white; margin-bottom: 25px;">Quick Links</h5>
          
           <a href="index.php"  style=" color: white;">Home</a>
           <hr style="background-color: white;">
           
           <a href="about.php" style=" color: white;">About</a>
           <hr style="background-color: white;">
           <a href="contact.php"  style=" color: white;">Contact</a>
           <hr style="background-color: white;">
           <a href="blogs.php" style=" color: white;">Blogs</a>
           
          </div>
          <div class="col-md-4" style="margin: 80px 0px; ">
            <h5  style="color: white; margin-bottom: 25px;">Message Me</h5>
         <form method="POST"  class="form">
           <input type="name" name="name" required placeholder="FULL NAME"  style="color: white; width: 100%; padding: 12px; margin-bottom: 25px; border: 2px white solid; background-color: rgba(0, 0, 0, 0);">
           <input type="email" name="email" required placeholder="EMAIL"  style="color: white; width: 100%; margin-bottom: 25px; padding: 12px; border: 2px white solid; background-color: rgba(0, 0, 0, 0);">
           <input type="phone" name="phone" required placeholder="PHONE NUMBER"  style="color: white; width: 100%; margin-bottom: 25px; padding: 12px; border: 2px white solid; background-color: rgba(0, 0, 0, 0);">
           <textarea placeholder="MESSAGE" required name="feedback" style=" padding: 12px;  color: white; width: 100%; margin-bottom: 25px;  border: 2px white solid; background-color: rgba(0, 0, 0, 0);"></textarea>
         <input type="submit" class="btn btn-primary" style="border-radius: 0px;  background-color: #007bff7c; padding: 10px 20px;"  value="Submit">
         </form>
          </div>
        </div>
      

        <br>
        <hr style="  border-top: 2px solid white;">
        <h6 style="color: white; text-align: center; ">Copyright © 2020 Pitam Poudel</h6>
      </div>
    </div>