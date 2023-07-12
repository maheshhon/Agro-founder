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
        <title>list FPO</title>
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
       <button type="submit" formaction="index.html" style="margin:15px;height: 40px;width: 100px;
       border-radius:15px;
border: 3px solid  yellow;background-color: green;color:yellow;font-size:15px;cursor:pointer;">back</button>
</form> 
<h3> List Your FPO</h3>
<form action="listfpo.php" method="post" >
<script type="text/javascript">
function ValidateForm(frm) {
if (frm.FPO_Name.value == "") { alert('FPO name is required.'); frm.FPO_Name.focus(); return false; }
if (frm.Owner_Name.value == "") { alert('Owner name is required.'); frm.Owner_Name.focus(); return false; }
if (frm.ComapnyEmail_Address.value == "") { alert('CompanyEmail address is required.'); frm.CompanyEmail_Address.focus(); return false; }
if (frm.Email_Address.value.indexOf("@") < 1 || frm.Email_Address.value.indexOf(".") < 1) { alert('Please enter a valid email address.'); frm.CompanyEmail_Address.focus(); return false; }
if (frm.Position.value == "") { alert('Position is required.'); frm.Position.focus(); return false; }
if (frm.Phone.value == "") { alert('Phone is required.'); frm.Phone.focus(); return false; }
return true; }
</script>
<fieldset>
<label for="FPO_Name"><b>FPO name *</b></label><br />
<input name="fname" type="text" maxlength="50" style="width:100%;max-width: 260px" /><br />
<label for="owner_Name"><b>Owner name *</b></label><br />
<input name="oname" type="text" maxlength="50" style="width:100%;max-width: 260px" /><br />
<label for="CompanyEmail_Address"><b>Company Mail *</b></label><br />
<input name="mail" type="text" maxlength="100" style="width:100%;max-width: 390px" /><br />
<label for="Address"><b>Company Address *</b></label><br />
<input name="add" type="text" maxlength="100" style="width:100%;max-width: 390px" /><br />
<label for="City"><b>City</b></label><br /> <input name="city" type="text" maxlength="50" style="width:100%;max-width: 260px" /> <br />
<label for="State"><b>State</b></label><br />
<input name="state" type="text" maxlength="50" style="width:100%;max-width: 260px" /><br />
<label for="Phone"><b>Phone *</b></label><br />
<input name="phone" type="text" maxlength="50" style="width:100%;max-width: 260px" /><br />

<label for="Pin Code"><b>Pin Code *</b></label><br />
<input name="pin" type="text" maxlength="50" style="width:100%;max-width: 260px" /><br />



<label for="Reference"><b>Description About Your FPO</b></label><br />
<textarea name="description" rows="7" cols="40" style="width:100%;max-width: 535px"></textarea><br />

<input name="submit" type="submit" value="List FPO" />


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
<a href="#"><img src="images/linked_in.webp" class="icon-style" alt="limkedin icon"></a>
<a href="#"><img src="images/whatsapp.webp" class="icon-style" alt="whatsapp icon"></a>
  <a href="#"><img src="images/instagram.webp" class="icon-style" alt="instagram"></a>
  <a href="#"><img src="images/github.webp" class="icon-style" alt="Github icon"></a>
  <a href="#"><img src="images/twitter.webp" class="icon-style" alt="Twitter icon"></a>
  <a href="#" class="icon-style" alt="Emailicon"></a>
  </div>
</div>  
    
    
</body>

</html>