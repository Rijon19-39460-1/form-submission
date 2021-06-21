<!DOCTYPE html>
<html>
<head>
    <title>WEB_TECH</title>
</head>
<body>
    
         <?php  
// define variables to empty values  
$fnameErr = $lnameErr = $genderErr = $dobErr = $religionErr = $emailErr = $usernameErr = $passwordErr = "";  
$fname = $lname = $gender = $dob = $religion = $praddress = $peaddress = $web =$phone = $email = $username = $password = "";  
$flag = false;
  
//Input fields validation  
if ($_SERVER["REQUEST_METHOD"] == "POST") {  
      
//String Validation  
    if (empty($_POST["fname"])) 
    {  
        $fnameErr = " first Name is required"; 
        $flag = True;
    } 
  
    
    if (empty($_POST["lname"])) 
    {  
        $lnameErr = " Last Name is required";
        $flag = True;  
    } 
     
    
    if (empty($_POST["gender"])) 
    {  
        $genderErr = " Gender is required";
        $flag = True;  
    } 
      

    if (empty($_POST["dob"])) 
    {  
        $dobErr = " Date of birth is required";
        $flag = True;  
    }  

    if (empty($_POST["religion"])) 
    {  
        $religionErr = " Religion is required";
        $flag = True;  
    } 


    if (empty($_POST["email"])) 
    {  
       $emailErr = " Email is required";
       $flag = True;  
    } 

    if (empty($_POST["username"])) 
    {  
       $usernameErr = " Username is required";
       $flag = True;  
    } 

    if (empty($_POST["password"])) 
    {  
       $passwordErr = " Password is required";
       $flag = True;  
    } 

    
    if(!$flag) 
    {
      $fname = input_data($_POST["fname"]);
      $lname = input_data($_POST["lname"]);
      $dob = input_data($_POST["dob"]);
      $religion = input_data($_POST["religion"]);
      $praddress = input_data($_POST["Praddress"]);
      $peaddress = input_data($_POST["Peaddress"]);
      $email = input_data($_POST["email"]);
      $phone = input_data($_POST["phone"]);
      $web = input_data($_POST["Web"]);
      $username = input_data($_POST["username"]);
      $password = input_data($_POST["password"]);

      echo "<h1>Your Information</h1>";

      echo "Your First name:" . $fname; echo "<br>";
      echo "Your Last name:" . $lname; echo "<br>";
      if(isset($_POST['gender']))
       {
       echo "You have selected :".$_POST['gender'];  //  Displaying Selected Value
       }
      echo "<br>";
      echo "Your Date of birth:" . $dob; echo "<br>";
      echo "Your Religion:" . $religion; echo "<br>";
      echo "Your Present Address:" . $praddress; echo "<br>";
      echo "Your Permanent Address:" . $peaddress; echo "<br>";
      echo "Your Phone:" . $phone; echo "<br>";
      echo "Your Email:" . $email; echo "<br>";
      echo "Your Website:" . $web; echo "<br>";
      echo "Your Username:" . $username; echo "<br>";
      echo "Your Password:" . $password; echo "<br>";
    }
  
}  
function input_data($data) {  
  $data = trim($data);  
  $data = stripslashes($data);  
  $data = htmlspecialchars($data);  
  return $data;  
}  
?> 
<h1>Registration form</h1>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">
  <fieldset>
    <legend>Basic Information</legend>
    <span style="color: red">*</span><label for="fname">Enter your first name:</label>
    <input type="text" id="fname" name="fname">
    <span style="color: red"><?php echo $fnameErr; ?> </span> <br><br>
    <span style="color: red">*</span><label for="lname">Enter your Last name:</label>
    <input type="text" id="lname" name="lname">
    <span style="color: red"><?php echo $lnameErr; ?> </span><br><br>
    <span style="color: red">*</span><label for="gender">Gender :</label>
    <input type="radio" name="gender"<?php if (isset($gender) && $gender=="Male") echo "checked";?>value="male">
    <label for="Male">Male</label>
    <input type="radio" name="gender" <?php if (isset($gender) && $gender=="Female") echo "checked";?> value="female">
    <label for="Female">Female</label><br>
    <span style="color: red"><?php echo $genderErr; ?> </span><br>
    <span style="color: red">*</span><label for="DOB">Date of birth:</label>
    <input type="date" id="dob" name="dob"><br>
    <span style="color: red"><?php echo $dobErr; ?> </span><br>
    <span style="color: red">*</span><label for="religion">Choose your Religion:</label>
    <select name="religion" id="religion">
    <option></option>
    <option value="Muslim">Muslim</option>
    <option value="Hindu">Hindu</option>
    <option value="Christian">Christian</option>
    </select>
    <span style="color: red"><?php echo $religionErr; ?> </span><br>
    
  </fieldset>
  <fieldset>
    <legend>Contact Information</legend>
    <label for="Praddress">Enter your Present Address:</label>
    <textarea name="Praddress" rows="3" cols="30"></textarea><br><br>
    <label for="Peaddress">Enter your Permanent Address:</label>
    <textarea name="Peaddress" rows="3" cols="30"></textarea><br><br>
    <label for="phone">Enter your phone number:</label>
    <input type="tel" id="phone" name="phone" ><br><br>
    <span style="color: red">*</span><label for="email">Enter your Email:</label>
    <input type="email" id="email" name="email">
    <span style="color: red"><?php echo $emailErr; ?> </span><br><br>
    <label for="Web">Enter your Personal Website link:</label>
    <input type="url" id="Web" name="Web">
  </fieldset>
    <fieldset>
    <legend>Account Information</legend>
    <span style="color: red">*</span><label for="username">Enter your Username:</label>
    <input type="text" id="username" name="username">
    <span style="color: red"><?php echo $usernameErr; ?> </span><br><br>
    <span style="color: red">*</span><label for="password">Enter your Password:</label>
    <input type="password" id="password" name="password">
    <span style="color: red"><?php echo $passwordErr; ?> </span><br><br>
  </fieldset>
  <br><br><input type="submit" value="Submit">
</form>
</body>
</html>