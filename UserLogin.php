<?php
 
    $con=  new mysqli('localhost','root','','online_shop');
    if(!$con)
    {
        die('Connection Failed..!');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RICKIE</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&family=Great+Vibes&family=Sacramento&display=swap" rel="stylesheet">
    <link href="photo_2024-03-17_21-47-06.jpg" rel="icon">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://kit.fontawesome.com/ec7a51a641.js" crossorigin="anonymous"></script>
</head>
<style>
    #login{
        margin: auto;
        margin-top:190px;
        width: 400px;
        height: auto;
        background-color: rgb(240, 240, 240);
        border-radius: 10px;
        
        padding: 10px;
    }
    #email{
        margin: auto;
    }
    #login #join{
        width: 100%;
        height: auto;
        display: flex;
        flex-direction: row;
        justify-content: center;
        padding: 0;
        margin: 0;
        gap: 5px;
    }
    #Register{
        margin: auto;
        margin-top:190px;
        width: 400px;
        height: auto;
        background-color: rgb(240, 240, 240);
        border-radius: 10px;
       
        padding: 10px;
        display: none;
    }
    .fa-chevron-down{
        color:rgb(5, 151, 255);
    }
    #email{
        border-radius: 7px;
        padding:2px;
    }
    #password{
        border-radius: 7px;
        padding:2px;
    }
    #togglePassword{
        width:15px;
        height:15px;
        transform: translate(5px,4px);
    }
    #togglePasswords{
        width:15px;
        height:15px;
        transform: translate(5px,4px);
    }
    
    #userLogin{
        background-color: rgb(5, 151, 255);
         width: 50px;
         height: 20px;
         border:none;
        border-radius: 5px; 
        padding:0;
        color:white;
        font-weight:bold;
    }
    #userLogin:hover{
        transform: scale(1.1);
        transition:1s;
        
    }
    #asQuest:hover{
        transform: scale(1.1);
        transition:1s;
    }
    #username{
        border-radius: 7px;
        padding:2px; 
    }
    #created{
        background-color: rgb(5, 151, 255);
         width: 50px;
         height: 20px;
         border:none;
        border-radius: 5px; 
        padding:0;
        color:white;
        font-weight:bold;
    }
    #created:hover{
        transform: scale(1.1);
        transition:1s;
    }
</style>
<body>
    <div id="login">
    <form method="POST" action="createlogin.php">
        <h1  style="text-align: center;">Welcome Back!</h1>
        <h2 for="" style="text-align: center; color: rgb(5, 151, 255)">Sign in </h2>
        <label for="email" style='font-weight:bold'>Email  <i class="fa-solid fa-chevron-down"></i></label><br>
        <input type="email" id="email" name="email" required ><br><br>
        <label for="password"  style='font-weight:bold'>Password <i class="fa-solid fa-chevron-down"></i></label><br>
        <input type="password" id="passwordL" name="password" required><i class="fa-regular fa-eye-slash" id='togglePasswords'></i><br><br>
        <hr style='width:50%'>
        <div id="join">
    <input type="submit" value="Login" name='btnDislogin' id='userLogin' >
        <span>|</span>
        <a href="index.php" id='asQuest'> As Guest </a>
        
        </div>
        <br>
       <label for="">Don't have an account? <span id="create" style="cursor: pointer;color:black;font-weight:bold"><u>Sign up</u> </span></label>
    </form>
</div>
<div id="Register">
    <form method="POST" action="createlogin.php">
        <h2 for="" style="text-align: center;">Create an Account</h2>
        <P style="background-color:rgb(5, 151, 255);text-align: center;"><i class="fa-solid fa-circle-exclamation" style='color:yellow'></i> Please insert your random password, not email password<span style='color:yellow'>!</span></P>
        <label for="username" style='font-weight:bold' >Fullname <i class="fa-solid fa-chevron-down"></i></label><br>
        <input type="text" id="username" name="username" required ><br><br>
        <label for="email"  style='font-weight:bold'>Email <i class="fa-solid fa-chevron-down"></i></label><br>
        <input type="email" id="emailC" name="emails" required ><br><br>
        <label for="password"  style='font-weight:bold'>Password <i class="fa-solid fa-chevron-down"></i></label><br>
        <input type="password" id="passwordC" name="passwords" required><i class="fa-regular fa-eye-slash" id='togglePassword'></i><br><br>
        <hr style='width:50%'>
        <div id="join">
        <input type="submit" value="Create" id='created' name='btnDissave'>
        </div>
     
    </form>
</div>
</body>
<script>
    const login = document.getElementById("login");
    const register = document.getElementById('Register');
    const create = document.getElementById('create');
    create.addEventListener('click',()=>{
        register.style.display='block';
        login.style.display='none';
    });
    const passwordField = document.getElementById('passwordC');
const togglePassword = document.getElementById('togglePassword');

// Add event listener to the eye icon
togglePassword.addEventListener('click', function () {
    // Check the current type of the password field
    if (passwordField.type === 'password') {
        passwordField.type = 'text';  // Show the password
        this.classList.remove('fa-eye-slash');
        this.classList.add('fa-eye');  // Switch to eye icon
    } else {
        passwordField.type = 'password';  // Hide the password
        this.classList.remove('fa-eye');
        this.classList.add('fa-eye-slash');  // Switch back to eye-slash icon
    }
});
const passwordFields = document.getElementById('passwordL');
const togglePasswords = document.getElementById('togglePasswords');

// Add event listener to the eye icon
togglePasswords.addEventListener('click', function () {
    // Check the current type of the password field
    if (passwordFields.type === 'password') {
        passwordFields.type = 'text';  // Show the password
        this.classList.remove('fa-eye-slash');
        this.classList.add('fa-eye');  // Switch to eye icon
    } else {
        passwordFields.type = 'password';  // Hide the password
        this.classList.remove('fa-eye');
        this.classList.add('fa-eye-slash');  // Switch back to eye-slash icon
    }
});
</script>
</html>