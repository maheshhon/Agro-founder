<?php
 session_start();
 if(isset($_SESSION['user']))
 {

 }
 else{
  echo"<script>location.href='index.html'</script>";
 }
?>
    
    

<!doctype html>
<html>
<head>
        <title> FPO Listed Successfully</title>
        <style>
@import url("css/header.css");
@import url("css/footer.css");
@import url("css/reg.css");
          
  body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
  background: white;
}



</style>    
</head>
<body>
            <div class="topnav">
            
            <a href="index.html">WefoundingFarmers</a>
            
          </div>
   <form >
       <button type="submit" formaction="index.html" style="margin:15px;height: 40px;width: 100px;
       border-radius:15px;
border: 3px solid  yellow;background-color: green;color:yellow;font-size:15px;cursor:pointer;">back</button>
</form> 

<form action="listed.php" method="post" >
<?php
if(isset($_POST["submit"]))
{
// define variables and set to empty values
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fpo";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//echo "  CONNECTION ESTABLISHED \r\n";
//echo "  INSERTION IN PROCESS";
  $fname = $_POST["fname"];
  $oname= $_POST["oname"];
  $mail = $_POST["mail"];
  $add = $_POST["add"];
 $city = $_POST["city"];
 $state = $_POST["state"];
 $phone = $_POST["phone"];
  $pin = $_POST["pin"];
 $description = $_POST["description"];




$sql = "INSERT INTO fpos(c_fname,c_oname,c_mail,c_add,c_city,c_state,c_phone,c_pin,c_description)
VALUES ('$fname','$oname','$mail','$add','$city','$state','$phone','$pin','$description')";
if ($conn->query($sql) == TRUE) {
  echo'<div>
  <h1 style="color:green;font-size:20px; font-family: "Roboto", sans-serif;margin:auto;">new fpo name
'.$fname. ' inserted successfully</h1>
     </div>';
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}
?>

    
<div class="footer">
<div class="footer-text-left">
    <a href="index.html" class="menu">home</a>
    <a href="https://css.sammy-codes.com/about.html" class="menu">about</a> 
    <a href="https://css.sammy-codes.com/credits.html" class="menu">credits</a>
  

<div class="footer-content-right">
<a href="https://www.linkedin.com/DigitalOcean"><img src="images/linked_in.webp" class="icon-style" alt="limkedin icon"></a>
<a href="https://www.whatsapp.com/DigitalOcean"><img src="images/whatsapp.webp" class="icon-style" alt="whatsapp icon"></a>
  <a href="https://www.instagram.com"><img src="images/instagram.webp" class="icon-style" alt="instagram"></a>
  <a href="https://github.com/digitalocean"><img src="images/github.webp" class="icon-style" alt="Github icon"></a>
  <a href="https://www.twitter.com/DigitalOcean"><img src="images/twitter.webp" class="icon-style" alt="Twitter icon"></a>
  <a href="https://www.email.com"><img src="images/email.webp" class="icon-style" alt="Emailicon"></a>
  </div>
</div>  
    
    
</body>

</html>