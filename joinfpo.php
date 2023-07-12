<?php
 session_start();
 if(isset($_SESSION['user']))
 {

 }
 else{
  echo"<script>location.href='index.html'</script>";
 }
?>
     <html>       
    <head>
        <title>Join FPO </title>
        <style>
@import url("css/header.css");
@import url("css/footer.css");

            body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
  background: white;
}

table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
   
    width: 97%;
    height: 130px;
    margin:30px ;
    background: #FAFAFA;
}
h1 { 
     font-size: 40px; 
   }


}

</style>    
</head>
<body>
<div class="topnav">
            
            <a href="index.html">WefoundingFarmers</a>
            
          </div>
         
    <?php
   
$con = mysqli_connect("localhost","root","","fpo");
if(!$con)
{ 
die("could not connect".mysql_error());
}
$var=mysqli_query($con,"select * from fpos ");


if(mysqli_num_rows($var)>0){
  
    while($arr=mysqli_fetch_row($var))
    { 
echo "<table>";
echo "<tr>
    <td><h1>$arr[0]</h1></td>
	    <td><h3>$arr[1]</h3></td></tr><tr>
    <td>$arr[4]</td></tr><tr>
    <td>$arr[5]</td></tr><tr>
    <td>$arr[6]</td></tr><tr>

    <td>$arr[8]</td>
    
    </tr>" ;

echo "<tr><td><form method='POST' action='farmerreg.php'>
    <center><button >Join</button></center>
  </form></td></tr><br>";

echo"</table>";

echo "<hr>";
}
    

    
    mysqli_free_result($var);

}

mysqli_close($con);
    
    
?>


</body>
    
    <div class="footer" >
<div class="footer-text-left">
    <a href="index.html" class="menu">home</a>
    <a href="https://css.sammy-codes.com/about.html" class="menu">about</a> 
    <a href="https://css.sammy-codes.com/credits.html" class="menu">credits</a>
  

<div class="footer-content-right">
<a href=""><img src="images/linked_in.webp" class="icon-style" alt="limkedin icon"></a>
<a href="#"><img src="images/whatsapp.webp" class="icon-style" alt="whatsapp icon"></a>
  <a href="#"><img src="images/instagram.webp" class="icon-style" alt="instagram"></a>
  <a href="#"><img src="images/github.webp" class="icon-style" alt="Github icon"></a>
  <a href="#"><img src="images/twitter.webp" class="icon-style" alt="Twitter icon"></a>
  <a href="#"><img src="images/email.webp" class="icon-style" alt="Emailicon"></a>
  </div>
</div> 
    
</body>

</html>