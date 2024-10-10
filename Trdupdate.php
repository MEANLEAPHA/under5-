<?php
    include '../../root/Header.php';
    include '../../connection/conect.php';

$idU=$_GET['id'];
if($idU!=null){
    $select="SELECT * FROM `tbl_trending` WHERE Trending_Id =$idU";
    $shSelect=$con->query($select);
                    $willShSl=$shSelect->fetch_assoc();
           $pName=$willShSl['Trending_Name'];
           $pCode=$willShSl['Product_Code'];
      $pDescription=$willShSl['Trending_Description'];
                $pPrice=$willShSl['Treding_Price'];
               $Img=$willShSl['Trending_Image'];
   
           if($Img==null || $Img==""){
               $Img='https://t4.ftcdn.net/jpg/04/96/47/13/360_F_496471319_DbtjoUvKqyy2e9OfgBnK5mm2AXhKpa9m.jpg';
           }
           else{
               $Img='../../Upload/TrendingPRD/'.$Img;
   
           }
   
       
};
?>
</head>
<body>
    <div class="container-fludi mt-3" style="margin-left: 10px;">
        <form action="Trdcreate.php" method="post">
            <div class="row">
                <div class="col-xl-12 bg-secondary p-2">
                    <a href="Trdindex.php" class="btn btn-success" style="margin-left: 15px;">Back</a>
                    <input type="submit" value="UPDATE" class="btn btn-success" name='btnFTupdate' id='txtupdate'>
                  
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 ">
                    <label for="">Trending_Id</label>
                       <input type="text" class="form-control" name='TrendingId' id='txtid' readonly value='<?php echo $idU ?>'>
                </div>
                <div class="col-xl-4 ">
                    <label for="">Trending_Name</label>
                      <input type="text" class="form-control" name='TrendingName' id='txtcategory' value='<?php echo $pName ?>'>
                </div>
                <div class="col-xl-4 ">
                <label for="">Trending_Name</label>
                <input type="text" class="form-control" name='TrendingCode' id='txtcategory' value='<?php echo $pCode ?>'>
                </div>
                <div class="col-xl-4 ">
                    <label for="">Trending_Description</label>
                       <input type="text" class="form-control" name='TrendingDescription' id='txtbrand' value='<?php echo $pDescription ?>'>
                </div>
                <div class="col-xl-4 ">
                    <label for="">Trending_Price</label>
                       <input type="text" class="form-control" name='TrendingPrice' id='txtprice' value='<?php echo $pPrice ?>'>
                </div>
                <div class="col-xl-4">
                    <label for="">Trending_IMAGE</label>
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
