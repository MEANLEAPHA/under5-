<?php
    include '../../root/Header.php';
    include '../../connection/conect.php';

$DisId=$_GET['id'];
if($DisId!=null){
    $select="SELECT * FROM `tbl_discount` WHERE Discount_Id =$DisId";
    $shSelect=$con->query($select);
                    $willShSl=$shSelect->fetch_assoc();
           $DName=$willShSl['Discount_Name'];
           $DCode=$willShSl['Product_Code'];
      $DDescription=$willShSl['Discount_Description'];
                $DPrice=$willShSl['Discount_Price'];
               $Img=$willShSl['Discount_Image'];
   
           if($Img==null || $Img==""){
               $Img='https://t4.ftcdn.net/jpg/04/96/47/13/360_F_496471319_DbtjoUvKqyy2e9OfgBnK5mm2AXhKpa9m.jpg';
           }
           else{
               $Img='../../Upload/DiscountPrd/'.$Img;
   
           }
   
       
};
?>
</head>
<body>
    <div class="container-fludi mt-3" style="margin-left: 10px;">
        <form action="DisCreate.php" method="post">
            <div class="row">
                <div class="col-xl-12 bg-secondary p-2">
                    <a href="DisInterface.php" class="btn btn-success" style="margin-left: 15px;">Back</a>
                    <input type="submit" value="UPDATE" class="btn btn-success" name='btnDisupdate' >
                  
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 ">
                    <label for="">Discount_Id</label>
                       <input type="text" class="form-control" name='DisId'  readonly value='<?php echo $DisId ?>'>
                </div>
                <div class="col-xl-4 ">
                    <label for="">Discount_Name</label>
                      <input type="text" class="form-control" name='DisName'  value='<?php echo $DName ?>'>
                </div>
                <div class="col-xl-4 ">
                <label for="">Product_Code</label>
                <input type="text" class="form-control" name='DisCode'  value='<?php echo $DCode ?>'>
                </div>
                <div class="col-xl-4 ">
                    <label for="">Discount_Description</label>
                       <input type="text" class="form-control" name='DisDescription'  value='<?php echo $DDescription ?>'>
                </div>
                <div class="col-xl-4 ">
                    <label for="">Discount_Price</label>
                       <input type="text" class="form-control" name='DisPrice'  value='<?php echo $DPrice ?>'>
                </div>
                <div class="col-xl-4">
                    <label for="">Discount_Image</label>
                    <input type="file" name="upload" class="form-control" id="photo">
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
