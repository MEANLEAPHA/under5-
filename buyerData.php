<?php 
   $con=  new mysqli('localhost','root','','online_shop');
   if(!$con)
   {
       die('Connection Failed..!');
   }
   if(isset($_POST['buyNow'])){
    $buyerName=$_POST['buyerName'];
    $buyerEmail=$_POST['buyerEmail'];
    $buyerTelephone=$_POST['buyerTelephone'];
    $buyerImage=$_POST['buyerImage'];
    $buyerState=$_POST['buyerState'];
    $buyerApartment=$_POST['buyerApartment'];
    $buyerOrdernote=$_POST['buyerOrderNote'];
    $buyerStuff=$_POST['buyerStuff'];
    $buyerTotalPro=$_POST['buyerProductCost'];
    $buyerShipCost=$_POST['buyerProductShip'];
    $buyerTotalCost=$_POST['buyerProductTotal'];
    $DQL="INSERT INTO `tbl_customer`(`buyer-fullname`, `buyer-email`, `buyer-telephone`, `buyer-image`, `buyer-state`, `buyer-apartment`, `buyer-orderNote`, `buyer-stuff`, `buyer-totalPro`, `buyer-shipCost`, `buyer-totalCost`) 
    VALUES ('$buyerName','$buyerEmail','$buyerTelephone','$buyerImage','$buyerState',
    '$buyerApartment','$buyerOrdernote','$buyerStuff','$buyerTotalPro','$buyerShipCost','$buyerTotalCost')";
    $res=$con->query($DQL);
    header('location:index.php');
        };   
?>