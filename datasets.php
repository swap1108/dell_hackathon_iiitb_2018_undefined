
<?php include('server.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <style>
            table {
                margin-left: 36%;
                border-collapse: collapse;
                border: 2px black solid;
                font: 20px sans-serif;
                font-family: 'Raleway', sans-serif;

            }

            td {
                border: 3px black solid;
                padding: 35px;
            }
        </style>
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

        
        <li  ><a href="analysis.php">ANALYSIS</a></li>
         <li><a href="dataselect.php">DATASETS</a></li>
      
      </ul>
    </div>
  </div>
</nav>
<br><br><br><br><br><br>

  
    <div class="container-fluid">
      <center>
      <h2 style="color: grey "> Analysis of the Sales </h2>
      <h3 style="font-size: 30px"> Product: <span style="color: #2E8DCC;font-weight: bold;"><?php echo $_SESSION['product3']; ?></span>  Country: <span style="color: #2E8DCC;font-weight: bold;"><?php echo $_SESSION['country3']; ?></span> </h3>
      </center>
         


        <script src="http://d3js.org/d3.v3.min.js"></script>
        <!-- <script src="d3.min.js?v=3.2.8"></script> -->

        <script type="text/javascript"charset="utf-8">
            d3.text("<?php echo $_SESSION['file3'] ?>", function(data) {
                var parsedCSV = d3.csv.parseRows(data);

                var container = d3.select("body")
                    .append("table")

                    .selectAll("tr")
                        .data(parsedCSV).enter()
                        .append("tr")

                    .selectAll("td")
                        .data(function(d) { return d; }).enter()
                        .append("td")
                        .text(function(d) { return d; });
            });
        </script>



    </div>
<!-- Container ( issue) -->

<br><br>

      
 
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
