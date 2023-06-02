<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link  rel="stylesheet" href="login.css"/>
</head>
<body >
   <div class="containerLogin">
    <h1>Login</h1>
    <form method="post" action="server.php">
       
        <div class="text_field">
            <input type="Email" name="email" required>
            <span></span>
            <label>Email</label>
        </div>
        <div class="text_field">
            <input type="password"  name="password" required>
            <span></span>
            <label>Password</label>
        </div>
        <div class="Pass">
        Forgot Password
        </div><br>
        <input type="submit" name="submit" value="submit">
        <div class="signup_link">
            Not a member<a href="register.php">Signup</a>
        </div>

    </form>

   </div>
    
</body>
</html>