<!DOCTYPE html>
<html>
    <head>
        <title>mainPage</title>
        <link rel="stylesheet" href="mainstyle.css">
        <script src="script.js"></script>
    </head>

    <body>

      <?php include 'searchalgos.php';?>
      
      <?php

      $sql = "SELECT * FROM `data1`";
      $result = mysqli_query($conn, $sql);

      $num = mysqli_num_rows($result);
      echo "hello";

    ?>

        <div id="heading" >
         <div class="centre" >FlatMate<br></div> 
         <div class="centre1">(Rent & Go)</div>
         <div class="logo"></div>
         <div class="option"><b><a  class="one" href="login.htm">Login</a> &nbsp;&nbsp;&nbsp;&nbsp;<a class="two" href="signup.htm">Sign Up</a></b></div>
         </div>
    
         <div id="cover">
            <form method="post" action="searchalgos.php">
          <div class="tb">
          <div class="td">
          <!-- The following tag is input for the text input field which is used as a seach field on a web page -->
          <input type="text" name="Search" placeholder="Search" required></div>
                <div class="td" id="s-cover">
                  <button type="submit" onclick="showfeed()">
                    <div id="s-circle"> </div>
                    <span> </span>
                  </button>
                </div>
              </div>
            </form>
          </div>
    
    
        <div class="sidenav">
            <a href="#">About Us</a>
            <a href="#">Contact Us</a>
            <a href="#">Advertisment</a>
        </div>
    
        <div class="main">
          

          

           

            
           
            
        </div>
    </body>
    
</html>
