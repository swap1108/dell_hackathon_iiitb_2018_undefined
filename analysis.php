
<?php include('server.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>DELL Analytics</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="style.css">
 <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Encode+Sans+Expanded" rel="stylesheet">
<link rel="icon"  href="./images/logo1.png" />
 


</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="index.php"><img src="./images/log3.png"></a>
    </div>
     <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="index.php" >ABOUT</a></li>
         <li><a href="index.php">SERVICES</a></li>
         
        <li><a href="index.php">CONTACT</a></li>

        <li class="active" ><a href="#" >ANALYSIS</a></li>
         <li><a href="dataselect.php">DATASETS</a></li>
      </ul>
    </div>
  </div>
</nav>
<br><br><br><br><br><br>
<center><h3 style="color: grey " >ASSET AND PRODUCT ANALYSIS</h3> </center>
  

<!-- Container ( issue) -->

<br><br>
<div id="issue" class="container-fluid" style="padding-left: 10%;padding-right: 10%">
   <div class="text-center">
 
  <ul class="nav nav-pills nav-justified" style="width: 100%">
  <li class="active"><a data-toggle="pill" href="#M1" style="font-weight: bold;font-size: 15px;font-family: 'Raleway'">REGIONAL WISE STATISTICS  <span class="glyphicon glyphicon-map-marker " ></span></a></li>
  <li><a data-toggle="pill" href="#M2" style="font-weight: bold;font-size: 15px;font-family: 'Raleway'">GLOBAL WISE STATISTICS  <span class="glyphicon glyphicon-globe " ></span> </a></li>
 
</ul> 

<br>
<div class="tab-content" >
    <div id="M1" class="tab-pane fade in active"><br>
          

          <div class="container" style="padding-left: 20%;padding-right: 20%"> 
        <div class="panel panel-default">
      <div class="panel-heading" style="font-size: 30px"> Regional Analysis  <span style="font-size: 20px" class="glyphicon glyphicon-signal"></div>
      <div class="panel-body">

                <form method="post">
       
        
        <div class="form-group"  style="font-size: 20px">
          <label for="inputState" style="font-family:  Montserrat, sans-serif">Country</label>
          <select id="inputState" name='regcountry' class="form-control"  style="font-size: 18px">
            <option selected style="font-family:  Montserrat, sans-serif" value="USA">USA</option>
            <option value="India">India</option>
            <option value="UAE">UAE</option>
            <option value="China">China</option>
            <option value="UK">UK</option>
            <option value="Brazil">Brazil</option>
            <option value="Australia">Australia</option>
            
          </select>
         </div>

          <div class="form-group"  style="font-size: 20px">
          <label for="inputState" style="font-family:  Montserrat, sans-serif">Product</label>
          <select id="inputState" name='regproduct' class="form-control" style="font-size: 18px">
            <option selected style="font-family:  Montserrat, sans-serif" value="XPS Series">XPS Series</option>
            <option value="G Series" >G Series</option>
            <option value="Alienware">Alienware</option>
            <option value="Chromebook">Chromebook</option>
            <option value="Latitude Series">Latitude Series</option>
            <option value="OptiPlex">OptiPlex</option>
            <option value="Inspiron Series">Inspiron Series</option>
            <option value="Routers">Routers</option>
            <option value="PC Accessories">PC Accessories</option>
            <option value="Monitors">Monitors</option>
            <option value="Printers">Printers</option>
            <option value="Keyboards and mouse">Keyboards and mouse</option>
            
          </select>
         </div>
        <center><button type="submit" name="regsubmit"  class="btn btn-primary btn-space" style="font-size: 15px">Search <span class="glyphicon glyphicon-search"></span>   </button>
        </center>  
        
         
        
        
      </form>
      
      
        </div>
      </div>    
    </div>


   
</div> <!-- this is for div id home -->
    


<div id="M2" class="tab-pane fade"><br>
     
     
          <div class="container" style="padding-left: 20%;padding-right: 20%"> 
        <div class="panel panel-default">
      <div class="panel-heading" style="font-size: 30px"> Global Analysis  <span style="font-size: 20px" class="glyphicon glyphicon-signal"></div>
      <div class="panel-body">

                <form method="post">
       
        
        <div class="form-group" style="font-size: 20px">
          <label for="inputState" style="font-family:  Montserrat, sans-serif">Year</label>
          <select id="inputState" name='globyear' class="form-control" style="font-size: 18px">
            <option selected style="font-family:  Montserrat, sans-serif" value="2010" >2010</option>
            <option value="2011">2011</option>
            <option value="2012">2012</option>
            <option value="2013">2013</option>
            <option value="2014">2014</option>
         
            
          </select>
         </div>

          <div class="form-group" style="font-size: 20px">
          <label for="inputState" style="font-family:  Montserrat, sans-serif" style="font-size: 18px">Product</label>
          <select id="inputState" name='globproduct' class="form-control" style="font-size: 18px">
            <option selected style="font-family:  Montserrat, sans-serif" value="XPS Series">XPS Series</option>
            <option value="G Series" >G Series</option>
            <option value="Alienware">Alienware</option>
            <option value="Chromebook">Chromebook</option>
            <option value="Latitude Series">Latitude Series</option>
            <option value="OptiPlex">OptiPlex</option>
            <option value="Inspiron Series">Inspiron Series</option>
            <option value="Routers">Routers</option>
            <option value="PC Accessories">PC Accessories</option>
            <option value="Monitors">Monitors</option>
            <option value="Printers">Printers</option>
            <option value="Keyboards and mouse">Keyboards and mouse</option>
            
          </select>
         </div>
        <center>
        
          <button type="submit" name="globalsubmit" onclick="location.href='india.html'" class="btn btn-primary btn-space" style="font-size: 15px">Search <span class="glyphicon glyphicon-search"></span>   </button> </center>  
        
      </form>
      
      
      </div>
    </div>        
  </div>


  <br><br>
  
</div> <!-- m2 div -->
 
</div>

      
    

<!-- <footer class="container-fluid text-center">
  <a href="#myPage" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
  <p> Made By Swapnil</a></p>
</footer>
 -->
<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
  
  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
})
</script>


</body>
</html>
