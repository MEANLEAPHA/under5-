<?php
    include '../../root/Header.php';
    include '../../connection/conect.php';

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
   
           if($Img==null || $Img==""){
               $Img='https://t4.ftcdn.net/jpg/04/96/47/13/360_F_496471319_DbtjoUvKqyy2e9OfgBnK5mm2AXhKpa9m.jpg';
           }
           else{
               $Img='../../Upload/FeaturedPRD/'.$Img;
   
           }
   
       
};
?>
</head>
<body>
    <div class="container-fludi mt-3" style="margin-left: 10px;">
        <form action="FTcreate.php" method="post">
            <div class="row">
                <div class="col-xl-12 bg-secondary p-2">
                    <a href="index.php" class="btn btn-success" style="margin-left: 15px;">Back</a>
                    <input type="submit" value="UPDATE" class="btn btn-success" name='btnFTupdate' id='txtupdate'>
                  
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 ">
                    <label for="">Product_Id</label>
                       <input type="text" class="form-control" name='UpId' id='txtid' readonly value='<?php echo $idU ?>'>
                </div>
                <div class="col-xl-4 ">
                    <label for="">Product_Name</label>
                      <input type="text" class="form-control" name='UpName' id='txtcategory' value='<?php echo $pName ?>'>
                </div>
                <div class="col-xl-4 ">
                <label for="">Product_Code</label>
                <input type="text" class="form-control" name='UpCode' id='txtcategory' value='<?php echo $pCode ?>'>
                </div>
                <div class="col-xl-4 ">
                    <label for="">Product_Description</label>
                       <input type="text" class="form-control" name='UpDescription' id='txtbrand' value='<?php echo $pDescription ?>'>
                </div>
                <div class="col-xl-4 ">
                    <label for="">Product_Price</label>
                       <input type="text" class="form-control" name='UpPrice' id='txtprice' value='<?php echo $pPrice ?>'>
                </div>
                <div class="col-xl-4">
                    <label for="">INSERT IMAGE</label>
                    <input type="file" name="upload" class="form-control" id="photo">
                </div>
                <div class="col-xl-8">

                </div>
                <div class="col-xl-4">
                    <img src="<?php echo $Img?>" alt="" width="100%" height="100%" id="previewIMG">
                </div>
                
            </div>
        </form>
    </div>
</body>
<script>
    var file= document.getElementById('photo');
    var previewIMG= document.getElementById('previewIMG');

    file.addEventListener('change',function(){
        // catch srcfile from input 
        var srcfile= this.files[0]; 
        var reader= new FileReader();
        reader.addEventListener('load',function(){
            //link srcfile to img 
            previewIMG.src=reader.result;
        })
        //return src to dispay
        reader.readAsDataURL(srcfile);
    })
    </script>
<?php 
  include '../../root/DataTable.php';
  ?>
