<?php
    include '../../connection/conect.php';


    if(isset($_POST['btnFTsave'])){
$ProductName=$_POST['pName'];
$ProductCode=$_POST['pCode'];
$pDescription=$_POST['pDescription'];
$pPrice=$_POST['pPrice'];
$img_name=$_FILES['upload']['name'];
$tmp=$_FILES['upload']['tmp_name'];
$path='../../Upload/FeaturedPRD/';
move_uploaded_file($tmp,$path.$img_name);

$SQL="INSERT INTO `tbl_home`(`Product_Id`, `Product_Name`, `Product_Code`, `Product_Description`, `Product_Price`, `Product_Image`)
      VALUES (Null,'$ProductName','$ProductCode', '$pDescription','$pPrice','$img_name')";
$res=$con->query($SQL);
header('location:interface.php');
    };


    if(isset($_GET['action'])=='delete'){
$idD=$_GET['id'];
$delete="DELETE FROM `tbl_home` WHERE `Product_Id` = $idD ";
$show=$con->query($delete);
header('location:interface.php');
    };


    if(isset($_POST['btnFTupdate'])){
        $UpId=$_POST['UpId'];
        $UProductName=$_POST['UpName'];
        $UProductCode=$_POST['UpCode'];
        $UpDescription=$_POST['UpDescription'];
        $UpPrice=$_POST['UpPrice'];
        $Image=$_POST['upload'];
        $update="UPDATE `tbl_home` SET `Product_Name`='$UProductName', `Product_Code`='$UProductCode',`Product_Description`='$UpDescription',
        `Product_Price`='$UpPrice',`Product_Image`='$Image'
         WHERE `Product_Id`=$UpId";
        $excute=$con->query($update);
        header('location:interface.php');}


?>