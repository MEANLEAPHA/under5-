<?php
    include '../../root/Header.php';
    include '../../connection/conect.php';
?>
</head>
<body>
    <div class="container-fludi mt-3" style="margin-left: 10px;">
        <form action="Trdcreate.php" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col-xl-12 bg-secondary p-2">
                    <a href="Trdinterface.php" class="btn btn-success" style="margin-left: 15px;">Back</a>
                    <input type="submit" value="Save" class="btn btn-success" name='btnFTsave' id='txtsave'>
                  
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 ">
                    <label for="">Trending_Id</label>
                       <input type="text" class="form-control" name='TrendingId' id='txtid' readonly>
                </div>
                <div class="col-xl-4 ">
                    <label for="">Trending_Name</label>
                      <input type="text" class="form-control" name='TrendingName' id='txtcategory'>
                </div>
                <div class="col-xl-4 ">
                <label for="">Product_Code</label>
                <input type="text" class="form-control" name='TrendingCode' id='txtcategory'>
                </div>
                <div class="col-xl-4 ">
                    <label for="">Trending_Description</label>
                       <input type="text" class="form-control" name='TrendingDescription' id='txtbrand'>
                </div>
                <div class="col-xl-4 ">
                    <label for="">Trending_Price</label>
                       <input type="text" class="form-control" name='TrendingPrice' id='txtprice'>
                </div>
                <div class="col-xl-4">
                    <label for="">Trending-IMAGE</label>
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