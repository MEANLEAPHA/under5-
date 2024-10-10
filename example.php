<?php 
include 'header.php'

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .menu{
    width: 100%;
}
.menu ul{
    list-style-type: none ;
    padding: 0;
    margin: 0;
}
.menu ul li a{
    padding: 10px 20px;
    display: block;
    text-decoration: none;
    color: wheat;

}
.menu ul li a:hover{
    background-color: rgb(255, 255, 255);

}
#forProfile{
display: grid;
margin: 0%;
padding: 0%;
}
</style>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RickTheAdminis</title>
    <link rel="icon" href="img.png">
</head>
    <frameset rows="8%,*" frameborder="0" border="0" >
        <frame src="navbar.php" name="">
        <frameset cols="15%,*">
            <frame src="slide1.php" name="menu">
            <frame src="content.php" name="content">
        </frameset>
    </frameset>
</html>
    
</body>
</html>