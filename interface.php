<?php
    include '../../root/Header.php';
    include '../../connection/conect.php';
    
    ?>
    <style>
        body{
            
        }
        .fa-pen-to-square{
            color:blue;
              margin-left:20px;
            
        }
        .fa-trash{
            color:red;
            margin-left:20px;
        }

    </style>
<body>
    <div class="container-fludi mt-3">
        <div class="row">
            <div class="col-xl-12 bg-secondary p-2">
                <a href="FTindex.php" class="btn btn-success mx-4">Add</a>
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <table id="example" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>Product-Id</th>
                    <th>Product-Name</th>
                    <th>Product-Code</th>
                    <th>Product-Description</th>
                    <th>Product-Price</th>
                    <th>IMAGE</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            <?php 
            $sql="SELECT * FROM tbl_home";
    $id=1;
$excute=$con->query($sql);
while($show=$excute->fetch_assoc()){?>
       <tr>
                        <td><?php echo $id++ ?></td>
                        <td><?php echo $show['Product_Name'] ?></td>
                        <td><?php echo $show['Product_Code'] ?></td>
                        <td><?php echo $show['Product_Description']?></td>
                        <td><?php echo $show['Product_Price']?></td>
                      <td> <img  src="../../Upload//FeaturedPRD/<?php echo $show['Product_Image'] ?>"  width="50px" height="60px"></td> 
                        <td>
                       <a href="FTupdate.php?id=<?php echo $show['Product_Id']?>"><i class="fa-regular fa-pen-to-square" ></i></a> 
                       <a href="FTcreate.php?id=<?php echo $show['Product_Id']?>&&action=delete"><i class="fa-solid fa-trash"></i></a> 
                        </td>
                    </tr>
<?php
}
    ?>

            </tbody>

        </table>
    </div>
    
    </body>
   
<?php 
  include '../../root/DataTable.php';
  ?>
</html>
