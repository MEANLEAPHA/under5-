<?php
 session_start();
    $con=  new mysqli('localhost','root','','online_shop');
    if(!$con)
    {
        die('Connection Failed..!');
    }
    $idU=$_GET['id'];
if($idU!=null){
    $select="SELECT * FROM `tbl_home` WHERE Product_Id =$idU";
    $shSelect=$con->query($select);
                    $willShSl=$shSelect->fetch_assoc();
           $pName=$willShSl['Product_Name'];
           $pCode=$willShSl['Product_Code'];
      $pDescription=$willShSl['Product_Description'];
                $pPrice=$willShSl['Product_Price'];
               $Img=$willShSl['Product_Image'];
   
         
   
       
};?>
    
    
    
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=h1, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<img src="img/<?php echo $Img ?>" alt="img">
<h1><?php echo $pName ?></h1>
<p><?php echo $pDescription ?></p>
<p><?php echo $pPrice ?></p>


   
    
    
    
    
    
    
    
    
    
</body>
</html>