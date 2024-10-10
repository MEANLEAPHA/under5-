<?php
    include '../../connection/conect.php';


    if(isset($_POST['btnDissave'])){
$DProductName=$_POST['NewName'];
$DProductCode=$_POST['NewCode'];
$DDescription=$_POST['NewDescription'];
$DPrice=$_POST['NewPrice'];
$img_name=$_FILES['upload']['name'];
$tmp=$_FILES['upload']['tmp_name'];
$path='../../Upload/NewPrd/';
move_uploaded_file($tmp,$path.$img_name);

$DQL="INSERT INTO `tbl_new`(`New_Id`, `New_Name`, `Product_Code`, `New_Description`, `New_Price`,`New_Image`)
 VALUES (Null,'$DProductName','$DProductCode', '$DDescription','$DPrice','$img_name')";
$res=$con->query($DQL);
header('location:NewInterface.php');
    };


    if(isset($_GET['action'])=='delete'){
$idD=$_GET['id'];
$delete="DELETE FROM `tbl_new` WHERE `New_Id` = $idD ";
$show=$con->query($delete);
header('location:NewInterface.php');
    };


    if(isset($_POST['btnDisupdate'])){
        $DisId=$_POST['NewId'];
        $DisProductName=$_POST['NewName'];
        $DisProductCode=$_POST['NewCode'];
        $DisDescription=$_POST['NewDescription'];
        $DisPrice=$_POST['NewPrice'];
        $Image=$_POST['upload'];
        $update="UPDATE `tbl_new` SET `New_Name`='$DisProductName', `Product_Code`='$DisProductCode', `New_Description`='$DisDescription',
        `New_Price`='$DisPrice',`New_Image`='$Image'
         WHERE  `New_Id`=$DisId";
        $excute=$con->query($update);
        header('location:NewInterface.php');}


?>