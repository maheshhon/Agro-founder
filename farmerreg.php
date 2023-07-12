<?php
 session_start();
 if(isset($_SESSION['user']))
 {

 }
 else{
  echo"<script>location.href='joinfpo.php'</script>";
 }
?>
    
    

<!doctype html>
<html>
<head>
        <title>Farmer's Registration</title>
        <style>
@import url("css/header.css");
@import url("css/footer.css");
@import url("css/reg.css");
          
  body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
  background: white;
}


fieldset { 
  background: #FAFAFA;
	padding: 10px;
   margin:auto;
   max-width:500px;
	box-shadow: 1px 1px 25px rgba(0, 0, 0, 0.35);
	border-radius: 10px;
	border: 6px solid yellow;


}
</style>    
</head>
<body>
            <div class="topnav">
            
            <a href="index.html">WefoundingFarmers</a>
            
          </div>
   <form >
       <button type="submit" formaction="joinfpo.php" style="margin:15px;height: 40px;width: 100px;
       border-radius:15px;
border: 3px solid  yellow;background-color: green;color:yellow;font-size:15px;cursor:pointer;">back</button>
</form> 
<h3>Farmer's Registration</h3>
<form action="farmerreg.php" method="post" >
<script type="text/javascript">
function ValidateForm(frm) {
if (frm.Name.value == "") { alert('FPO name is required.'); frm.FPO_Name.focus(); return false; }
if (frm.Owner_Name.value == "") { alert('Owner name is required.'); frm.Owner_Name.focus(); return false; }
if (frm.ComapnyEmail_Address.value == "") { alert('CompanyEmail address is required.'); frm.CompanyEmail_Address.focus(); return false; }
if (frm.Email_Address.value.indexOf("@") < 1 || frm.Email_Address.value.indexOf(".") < 1) { alert('Please enter a valid email address.'); frm.CompanyEmail_Address.focus(); return false; }
if (frm.Position.value == "") { alert('Position is required.'); frm.Position.focus(); return false; }
if (frm.mobile.value == "") { alert('Phone is required.'); frm.Phone.focus(); return false; }
return true; }
</script>
<fieldset>
<label for="Name"><b>Name *</b></label><br />
<input name="name" type="text" maxlength="50" style="width:100%;max-width: 260px" /><br />
<label for="Mobile"><b>Mobile No. *</b></label><br />
<input name="mobile" type="text" maxlength="10" style="width:100%;max-width: 260px" /><br />
<label for="Email_Address"><b>E-Mail Address *</b></label><br />
<input name="email" type="text" maxlength="100" style="width:100%;max-width: 390px" /><br />
<label for="Address"><b>Address *</b></label><br />
<input name="address" type="text" maxlength="100" style="width:100%;max-width: 390px" /><br />
<label for="City"><b>City</b></label><br /> <input name="city" type="text" maxlength="50" style="width:100%;max-width: 260px" /> <br />
<label for="State"><b>State</b></label><br />
<input name="state" type="text" maxlength="50" style="width:100%;max-width: 260px" /><br />
<label for="Pin Code"><b>Pin Code *</b></label><br />
<input name="pin" type="text" maxlength="6" style="width:100%;max-width: 260px" /><br />


<input name="submit" type="submit" value="Submit" />


</fieldset>
</form>
</body>
</html>
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
  $name = $_POST["name"];
  $mobile= $_POST["mobile"];
  $email = $_POST["email"];
  $address = $_POST["address"];
 $city = $_POST["city"];
 $state = $_POST["state"];
  $pin = $_POST["pin"];





$sql = "INSERT INTO farmers(name,mobile,email,address,city,state,pin)
VALUES ('$name','$mobile','$email','$address','$city','$state','$pin')";
if ($conn->query($sql) == TRUE) {
  echo'<div>
  <h1 style="color:green;font-size:20px; font-family: "Roboto", sans-serif;margin:auto;">hello 
'.$name. ' you have joined the fpo</h1>
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
<a href="#"><img src="images/linked_in.webp" class="icon-style" alt="limkedin icon"></a>
<a href="#"><img src="images/whatsapp.webp" class="icon-style" alt="whatsapp icon"></a>
  <a href="#"><img src="images/instagram.webp" class="icon-style" alt="instagram"></a>
  <a href="#"><img src="images/github.webp" class="icon-style" alt="Github icon"></a>
  <a href="#"><img src="images/twitter.webp" class="icon-style" alt="Twitter icon"></a>
  <a href=""#<img src="images/email.webp" class="icon-style" alt="Emailicon"></a>
  </div>
</div>  
    
    
</body>

</html>