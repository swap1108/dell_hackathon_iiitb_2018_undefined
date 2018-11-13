<?php
  session_start();
  $countryproduct="";
  //$messagebook="";


  // $errors=array();
  // $db=mysqli_connect('localhost','root','1234','library');//database is connected
  
  

  if(isset($_POST['regsubmit']))//using regsubmit only takes registeration button response
  {
    
    $regcountry=$_POST['regcountry'];
    $regproduct=$_POST['regproduct'];
    $countryproduct= $regcountry.'_'.$regproduct;
    $_SESSION['countryproduct']=  $countryproduct;
    $_SESSION['product']=  $regproduct;
    $_SESSION['country']=  $regcountry;
    $_SESSION['value']="regional";
    $_SESSION['file1']='./images/graphs/'.$countryproduct.'.html';
     header("location:statsregional.php");
    
     
  }
   if(isset($_POST['globalsubmit']))//using regsubmit only takes registeration button response
  {
   
    $globyear=$_POST['globyear'];
    $globproduct=$_POST['globproduct'];
    $countryproduct= $globproduct.'_'.$globyear;
    $_SESSION['countryproduct2']=  $countryproduct;
    $_SESSION['year2']=  $globyear;
    $_SESSION['product2']=  $globproduct;
    $_SESSION['value2']="global";
    $_SESSION['file2']='./images/pie images/'.$countryproduct.'.svg';
    header("location:statsglobal.php");
    
     
  }

   
  if(isset($_POST['datasubmit']))//using regsubmit only takes registeration button response
  {
   
    $datacountry=$_POST['datacountry'];
    $dataproduct=$_POST['dataproduct'];
    $countryproduct= $datacountry.'_'.$dataproduct;
    $_SESSION['countryproduct3']=  $countryproduct;
    $_SESSION['product3']=  $dataproduct;
    $_SESSION['country3']=  $datacountry;
    $_SESSION['value3']="data";
    $_SESSION['file3']='./datasets/'.$countryproduct.'.csv';
     header("location:datasets.php");
     
  }


?>
