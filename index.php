<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Register & Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container" id="signUp" style="display: none;">
        <h1 class="form-title">Register</h1>
        <form action="register.php" method="post">
           <div class="input-group">
              <i class="fas fa-user"></i>
              <input type="text" class="fName" id="fName" name="fName" placeholder="First Name" required>
              <label for="fName">first Name</label>
           </div>
           <div class="input-group">
            <i class="fas fa-user"></i>
            <input type="text" class="lName" id="lName" name="lName"placeholder="Last Name" required>
            <label for="lName">Last Name</label>
         </div> 
         <div class="input-group">
            <i class="fas fa-envelope"></i>
            <input type="email" class="email" id="email" name="email" placeholder="Email" required>
            <label for="email">Email</label>
         </div>
         <div class="input-group">
            <i class="fas fa-lock"></i>
            <input type="password" class="password" id="password" name="password" placeholder="password" required>
            <label for="password">Password</label>
         </div>  
        <input type="submit" class="btn" value="Sign Up" name="signUp">

        </form>
        <p class="or">
            _______or_______
        </p>
        <div class="icons">
            <i class="fab fa-google"></i>
            <i class="fab fa-facebook"></i>
        </div>
        <div class="links">
            <p>Already Have Account</p>
            <button id="signInButton">Sign In</button>

        </div>
    </div>



    <div class="container" id="signIn" style="display: block;">
        <h1 class="form-title">Sign In</h1>
        <form action="register.php" method="post">
           
         <div class="input-group">
            <i class="fas fa-envelope"></i>
            <input type="email" class="email" id="email" placeholder="Email" name="email" required>
            <label for="email">Email</label>
         </div>
         <div class="input-group">
            <i class="fas fa-lock"></i>
            <input type="password" class="password" id="password" name="password" placeholder="password" required>
            <label for="password">Password</label>
         </div>
         <a href="#">Recover Password</a>  

        <input type="submit" class="btn" value="Sign Up" name="signIn">

        </form>
        <p class="or">
            _______or_______
        </p>
        <div class="icons">
            <i class="fab fa-google"></i>
            <i class="fab fa-facebook"></i>
        </div>
        <div class="links">
            <p>Don't Have Account Yet</p>
            <button id="signUpButton">Sign Up</button>

        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>