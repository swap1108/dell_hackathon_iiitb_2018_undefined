<?php error_reporting(0); ?>
<?php include('server.php'); ?>
 
<!DOCTYPE html>
<html lang="en">
<head>
  
  <title>DELL</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<link rel="stylesheet" type="text/css" href="style.css">
<link rel="icon"  href="./images/logo1.png" />
 <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Encode+Sans+Expanded" rel="stylesheet">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> 
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
      <a class="navbar-brand" href="#"><img src="./images/log3.png"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#about" " >ABOUT</a></li>
        <li><a href="#services">SERVICES</a></li>
        <li><a href="#contact">CONTACT</a></li>
        <li><a href="analysis.php">ANALYSIS</a></li>
        <li><a href="dataselect.php">DATASETS</a></li>
         
      </ul>
    </div>
  </div>
</nav>
<!-- 
<div class="jumbotron text-center">
  <h2 style="color: white;" >Smart Library at IIIT </h2> 
  <p>Use the library in a smart way !</p> 
</div> -->

<!-- Container (About Section) -->

<br><br><br><br>
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="./images/car3.jpg" alt="Chania">
      <div class="carousel-caption">
       
        <!-- <h3 style="color: #2E8DCC;">Best performance laptops</h3> -->
      </div>
    </div>

    <div class="item">
      <img src="./images/car2.jpg" alt="Chicago">
      <div class="carousel-caption">
       <!--  <h3>The power to do more!</h3> -->
        <p></p>
      </div>
    </div>

    <div class="item">
      <img src="./images/car1.jpg" alt="New York">
      <div class="carousel-caption">
<!--         <h3  style="color: #2E8DCC;">Best performance laptops</h3> -->
      </div>
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<br><br>

<div id="about" class="container-fluid text-center">
  <br><br> <span class="glyphicon glyphicon-briefcase logo-small"></span><br><br>
<h2 style="color: grey">OUR PRODUCT</h2>
    


<div class="container-fluid bg-grey">
  <div class="row">
    <div class="col-sm-6">
      <span class=" slideanim"><img src="./images/img1.jpg"></span>
    </div>
    <div class="col-sm-6">
      
      <h4 style="font-size: 20px;font-family: 'Raleway', sans-serif;">
       <center> <strong style="color: #2E8DCC;font-size: 30px">VISION:</strong></center>
         </h4><br>
  <!--     <p style="font-size: 20px;font-family: 'Raleway', sans-serif;"><strong>VISION:</strong> We have worked our best to reduce human efforst for handling the records on pen and paper. Rather we have a vision to provide a perfect library with computerised efforts. This will not only reduce human efforts but will also help the users. </p> -->
      <ul style="font-size: 28px;font-family: 'Raleway', sans-serif;">
        <li>
          Forecast the volumes ( global / region ) Factors 
        </li><br>
        <li>Simplify your efforts by our visual sales prediction</li><br>
        <li>Increase your upcoming revenue opportunities</li><br>
      </ul>
      
    </div>
  </div>
</div>
   </div>





<!-- Container (Services Section) -->
<div id="services" class="container-fluid text-center">
  <h2>SERVICES</h2>
  <h4>What we offer</h4>
  <br>
  <div class="row slideanim">
    <div class="col-sm-4">
     <a href="analysis.php"> <span class="glyphicon glyphicon-signal logo-small"></span>
      <h4>ANALYSIS</h4>
      <span></span>
      <p>Get ananlysis of products</p></a>
    </div>

    <div class="col-sm-4">
       <a href="dataselect.php"> <span class=" glyphicon glyphicon-tasks logo-small"></span>
      <h4>DATASETS</h4>
      <p>Review of complete datasets</p></a>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-check logo-small"></span>
      <h4 style="color:#303030;">SERVICE</h4>
      <p>Uninterrupted Service </p>
    </div>
   
  </div>
  <br><br>
  <div class="row slideanim">
    <a href="location.php"><div class="col-sm-4">
      <span class="glyphicon glyphicon-screenshot logo-small"></span>
      <h4>LOCATION</h4>
      <p> Location based analysis</p></a>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-hourglass logo-small"></span>
      <h4>TIME ANALYSIS</h4>
      <p>Gives analysis over a timespan</p>
    </div>
     <div class="col-sm-4">
      <span class=" glyphicon glyphicon-wrench logo-small"></span>
      <h4>WORK</h4>
      <p>Smart Work for revenue analysis</p>
    </div>
  </div>
<br><br>
</div>


<!-- Container (Contact Section) -->
<div id="contact" class="container-fluid bg-grey">
  <h2 class="text-center">CONTACT</h2>
  <div class="row">
    <div class="col-sm-5">
      <p>Contact us </p>
      <p><span class="glyphicon glyphicon-map-marker"></span> Placement Cell, IIIT Bhubaneswar</p>
      <p><span class="glyphicon glyphicon-phone"></span> +0091 9938088008</p>
      <p><span class="glyphicon glyphicon-envelope"></span> pcell@iiit-bh.ac.in</p>
    </div>
    <div class="col-sm-7 slideanim">
      
    </div>
  </div>
  <!-- Add Google Maps -->
<div id="map" style="height:400px;width:100%;"></div><br>
  
</div>







<footer class="container-fluid text-center">
  <a href="#myPage" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
  <p> Top</p>
</footer>




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
 <script>
      function initMap() {
        var uluru = {lat: 20.295911,  lng: 85.744299};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 17,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    </script>
    <script async defer
  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDv6IEKAmN3qcwvDyEa9V54HwuMdZE6b8Q&callback=initMap">
</script>

 <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   <!--  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>
