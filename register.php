<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link  rel="stylesheet" href="login.css"/>
</head>
<body >
   <div class="containerLogin">
    <h1>Register</h1>
    <form action="function.php" method="POST">
       
        <div class="text_field">
            <input type="text" name="username" required>
            <span></span>
            <label>Username</label>
        </div>
        <div class="text_field">
            <input type="email" name="email" required>
            <span></span>
            <label>Email</label>
        </div>
        <div class="text_field">
            <input type="password"  name="password" required>
            <span></span>
            <label>Password</label>
        </div>
        <div class="text_field">
            <input type="password"  name="cpassword" required>
            <span></span>
            <label>RePassword</label>
        </div>
        <div class="text_field">
            <input type="usertype"  name="usertype" required>
            <span></span>
            <label>user type</label>
        </div>
        <br>
        <input type="submit" name="submit" value="submit" required>
        <div class="signup_link">
            You have a member<a href="login.php">Login</a>
        </div>

    </form>

   </div>
    
</body>
</html>