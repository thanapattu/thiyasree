<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css" />
<meta name="viewport" content="width=device-width, initial-scale=1">
 </head>
<script src="regvalidation.js"></script>
<body>
 <form action="register.php" method="post"> 
  <div class="container">
    <h1>Register</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>
    <label for="name"><b>Name</b></label>
    <input type="text" pattern="[A-Za-z]+" title="enter alphabets" placeholder="Enter Name" name="name" id="name" required>
    
    <label for="college name"><b>College name</b></label>
    <input type="text" pattern="[A-Za-z]+" title="enter alphabets" placeholder="Enter College name" name="collegename" id="collegename" required>
    
    <label for="degree"><b>Degree</b></label>
    <input type="text"pattern="[A-Za-z]+" title="enter alphabets" placeholder="Enter Degree" name="degree" id="degree"required>
    
    <label for="register number"><b>Register number</b></label>
    <input type="text" pattern="[0-9]+" title="enter number" placeholder="Enter Register number" name="registernumber" id="registernumber" required>
     
    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" id="email" required>
     <label for="password"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" id="password" required>
     <label for="repeat password"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="repeatpassword" id="repeatpassword" required>
    <hr>
    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
     <button type="submit" class="registerbtn" onclick="validateForm()">Register</button>
  </div>
  
  <div class="container signin">
    <p>Already have an account? <a href="#">Sign in</a>.</p>
  </div>
</form>
</body>
</html>
