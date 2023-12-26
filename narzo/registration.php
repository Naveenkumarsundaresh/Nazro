
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Registration</title>
    <link rel="stylesheet" href="style.css">
  
</head>
<body>
<div class="regi">

<div class="icon">
    <h1 class="logo">Nazro</h1>
</div>

<div class="h">
<h1>Register</h1>
</div>


<form method="POST" action="connect.php">
<br><br>

<label for="name">NAME :</label>
<input type="text" size="40" placeholder="" name="name" required />
<br><br>
<label for="age">Age :</label>
<input type="number" name="age" />
<br><br>
<label for="dob">DOB :</label>
<input type="date" name="dob" />
<br><br>
<label for="gender">Gender :</label>
<input type="radio" name="gender"  value="M"/> Male
<input type="radio" name="gender"  value="F"/> Female
<br><br>
<label for="dept">Dept :</label>
<input type="text" name="dept" />
<br><br>
<label for="email">Email :</label>
<input type="email" size="40" placeholder="" name="email" required />
<br><br>

<label for="password">Password :</label>
<input type="password"  name="pass"  min="4" maxlength="8" required />
<br><br>
<input class="btn3" type="submit" value="Register" />
<input class="btn3" type="reset" value="Reset" />

</form>
</div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/firebase/7.14.1-0/firebase.js"></script>
<script src="./connect.js"></script>
</body>
</html>
