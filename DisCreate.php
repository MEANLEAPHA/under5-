<?php
    include '../../connection/conect.php';


    if(isset($_POST['btnDissave'])){
$DProductName=$_POST['DName'];
$DDescription=$_POST['DDescription'];
$DCode=$_POST['DCode'];
$DPrice=$_POST['DPrice'];
$img_name=$_FILES['upload']['name'];
$tmp=$_FILES['upload']['tmp_name'];
$path='../../Upload/DiscountPrd/';
move_uploaded_file($tmp,$path.$img_name);
$DQL="INSERT INTO `tbl_discount`(`Discount_Id`, `Discount_Name`, `Product_Code`, `Discount_Description`, `Discount_Price`, `Discount_Image`)
                VALUES (Null,'$DProductName','$DCode','$DDescription','$DPrice','$img_name')";
$res=$con->query($DQL);
header('location:DisInterface.php');
    };


    if(isset($_GET['action'])=='delete'){
$idD=$_GET['id'];
$delete="DELETE FROM `tbl_discount` WHERE `Discount_Id` = $idD ";
$show=$con->query($delete);
header('location:DisInterface.php');
    };


    if(isset($_POST['btnDisupdate'])){
        $DisId=$_POST['DisId'];
        $DisProductName=$_POST['DisName'];
        $DisCode=$_POST['DisCode'];
        $DisDescription=$_POST['DisDescription'];
        $DisPrice=$_POST['DisPrice'];
        $Image=$_POST['upload'];
        $update="UPDATE `tbl_discount` SET `Discount_Name`='$DisProductName',`Product_Code`='$DisCode',
        `Discount_Description`='$DisDescription',`Discount_Price`='$DisPrice',`Discount_Image`='$Image'
         WHERE `Discount_Id`=$DisId";
        $excute=$con->query($update);
        header('location:DisInterface.php');}
?>