<?php
    include '../../root/Header.php';
    include '../../connection/conect.php';
?>
</head>
<body>
    <div class="container-fludi mt-3" style="margin-left: 10px;">
        <form action="FTcreate.php" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col-xl-12 bg-secondary p-2">
                    <a href="index.php" class="btn btn-success" style="margin-left: 15px;">Back</a>
                    <input type="submit" value="Save" class="btn btn-success" name='btnFTsave' id='txtsave'>
                  
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 ">
                    <label for="">Product_Id</label>
                       <input type="text" class="form-control" name='pId' id='txtid' readonly>
                </div>
                <div class="col-xl-4 ">
                    <label for="">Product_Name</label>
                      <input type="text" class="form-control" name='pName' id='txtcategory'>
                </div>
                <div class="col-xl-4 ">
                <label for="">Product_Code</label>
                <input type="text" class="form-control" name='pCode' id='txtcode'>
                </div>
                <div class="col-xl-4 ">
                    <label for="">Product_Description</label>
                       <input type="text" class="form-control" name='pDescription' id='txtbrand'>
                </div>
                <div class="col-xl-4 ">
                    <label for="">Product_Price</label>
                       <input type="text" class="form-control" name='pPrice' id='txtprice'>
                </div>
                <div class="col-xl-4">
                    <label for="">INSERT IMAGE</label>
                    <input type="file" name="upload" class="form-control" id="photo">
                </div>
                <div class="col-xl-4">
                    <img src="https://t4.ftcdn.net/jpg/04/96/47/13/360_F_496471319_DbtjoUvKqyy2e9OfgBnK5mm2AXhKpa9m.jpg" alt="" width="100%" height="100%" id="previewIMG">
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
</html>