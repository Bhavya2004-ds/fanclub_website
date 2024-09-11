<?php
if(isset($_POST['submit'])){
    $name = $_POST["Name"];
    $number = $_POST["Mobile_no"];
    $email = $_POST["E-mail"];
    $message = $_POST["Message"];


    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $dbname ='communication'; 
 
    $conn = mysqli_connect($host,$user,$pass,$dbname);

    $sql = "INSERT INTO information(Name,MobileNo,Email,Message) values('$name','$number','$email','$message')";
    mysqli_query($conn,$sql);
}
?>
<!DOCTYPE html>
<head>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">

    <link href="connect.css" rel="stylesheet"/>
<title>Contact Us</title>   
</head>
<body>
<div class="container">
<h1 >Help center</h1>
<form action="#" method="post">
 <table cellpadding="20">
    <tr>
<td>Name:</td>
<td><input type="text" placeholder="Name" required name="Name"></td>
    </tr>
    <tr>
<td>Mobile No.:</td>
<td><input type="number" placeholder="Mobile Number" required name="Mobile_no"></td>
    </tr>
    <tr>
<td>Email:</td>
<td><input type="email" placeholder="E-mail address" required name="E-mail"></td>
    </tr>
    <tr>
<td>Your Message:</td>
<td><textarea  required name="Message" placeholder="Your message to us...">
</textarea></td>
</tr>
<tr>
<td colspan="2"><input type="submit" name="submit" value="Submit" onclick="alert('submitted')"></td>
</tr>
</form>  
</table>     
</div>
</body>
</html>