<?php
    include '../../root/Header.php';
    include '../../connection/conect.php';
    
    ?>
    <style>
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
                <a href="NewAdd.php" class="btn btn-success mx-4">Add</a>
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <table id="example" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>New-Id</th>
                    <th>New-Name</th>
                    <th>Product_Code</th>
                    <th>New-Description</th>
                    <th>New-Price</th>
                    <th>New_Image</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            <?php 
            $sql="SELECT * FROM tbl_new";
    $id=1;
$excute=$con->query($sql);
while($show=$excute->fetch_assoc()){?>
       <tr>
                        <td><?php echo $id++ ?></td>
                        <td><?php echo $show['New_Name'] ?></td>
                        <td><?php echo $show['Product_Code'] ?></td>
                        <td><?php echo $show['New_Description']?></td>
                        <td><?php echo $show['New_Price']?></td>
                      <td> <img  src="../../Upload/NewPrd/<?php echo $show['New_Image'] ?>"  width="50px" height="60px"></td> 
                        <td>
                       <a href="NewUpdate.php?id=<?php echo $show['New_Id']?>"><i class="fa-regular fa-pen-to-square" ></i></a> 
                       <a href="NewCreate.php?id=<?php echo $show['New_Id']?>&&action=delete"><i class="fa-solid fa-trash"></i></a> 
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
