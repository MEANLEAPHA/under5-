<?php
include("root/header.php");
?>
<style>
    body{
        margin: 0;
        background-color:black;
    }
    .forIcon{
    width:100%;
    height: 60px;
    background-color: rgb(0, 0, 0);
    display: flex;
    flex-direction: row;  
    position: relative;
  }
  .forIcon .forShopicon{
    width: 150px;
    height: 60px;
    background-color: white;
    border-radius: 15px;
    background-image:url(img.png);
    background-size: cover;
    background-position: center;
    border: 1px solid black;
  }
  .forIcon .forCaption{
    width: auto;
    height: auto;
    margin: auto;
    position: relative;
  }
  .forIcon .forCaption .p1{
    color: white;
     text-align: center;
     font-size: large;
     font-style: bold;
      
                    
  }
  
  .forIcon .fa-user {
    color: white;
    position: relative;
    font-size: x-large;
    margin-top: 20px;
    margin-right: 20px;
    cursor: pointer;
  
  }
  .forIcon .fa-bars{
    color: rgb(255, 255, 255);
   font-size: x-large;
   position: relative;
   margin-top: 20px;
   margin-right: 15px;
   cursor: pointer;
  
  }
</style>
</head>

<body >
<div class="forIcon">
    <div class="forShopicon"></div>
        <div class="forCaption">
         <p class='p1'>RickiE.Admin</p>
        </div>
        <i class="fa-regular fa-user"></i>
         
        <i class="fa-solid fa-bars"></i>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>