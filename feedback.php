<?php 
 session_start();
$con=  new mysqli('localhost','root','','online_shop');
    if(!$con)
    {
        die('Connection Failed..!');
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
     <!-- Bootstrap CSS CDN -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
     <!-- Our Custom CSS -->
     <!-- Scrollbar Custom CSS -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
     <!-- Data Table -->
     <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
     <!-- Font Awesome JS -->
     <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
     <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
     <!-- jquery -->
     <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!-- font family -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Battambang:wght@100;300;400;700;900&display=swap" rel="stylesheet">

</head>
<style>
 #comment-form{
        width: 100%;
        height: auto;
        margin-top:auto;
        display:flex;
        position: absolute;
        justify-content: center;
        bottom: 10px;
        

    }
    #comment-form .fa-paper-plane{
        margin:0;
        padding:14px;
        background-color:rgb(14, 160, 238);
        color:white;
    }
#comment-form #text-comment{
   
        padding: 8px;
        width: 80%;
font-size:medium;
    }
    button{
        border:none;
        background-color:rgb(14, 160, 238);
    }
</style>
<body>
  
<table id="example" class="table table-striped table-bordered" style="width:100%">
      <thead>
                <tr>
                    <th style="width:15%">customer</th>
                    <th>comment</th>
                    
                </tr>
            </thead>
            <tbody>
            <?php 
        $sql="SELECT * FROM tbl_feedback";
$excute=$con->query($sql);
while($show=$excute->fetch_assoc()){
    if (isset($_SESSION['user_email'])) :
        $userEmail =$show['Customer'];
        $firstLetter = strtoupper(substr($userEmail, 0, 1));?>
       <tr>
                        <td style='border:none;display: flex;background-color:white;gap:5px'>
                        <div style='width: 30px; height: 30px;border: 1px rgb(12, 197, 59) solid ;text-decoration: none;color: white;border-radius: 50%;background-color:rgb(12, 197, 59);font-size: larger;text-align: center;padding:0;'>
            <a href="#"  style='color:white;text-decoration: none;' ><?php echo $firstLetter; ?></a>
            </div><?php echo $show['Customer'] ?></td>
            <?php else:  ?><td style='border:none;display: flex;background-color:white;gap:5px'>
                        <div style='width: 30px; height: 30px;border: 1px rgb(12, 197, 59) solid ;text-decoration: none;color: white;border-radius: 50%;background-color: rgb(12, 197, 59);font-size: larger;text-align: center;padding:0;'>
            <a href="#"  style='color:white;text-decoration: none;' >G</a>
            </div><?php echo $show['Customer'] ?></td>
            <?php endif; ?>
                        <td><?php echo $show['Comment'] ?></td>
                       
                       
                    </tr><?php
}
    ?>

            </tbody>
            <div id='comment-form'>
<form action="actionFeedback.php" method='POST' >
<?php if (isset($_SESSION['user_email'])) :
    $userEmail = $_SESSION['user_email'];
   ?>
        <input type="text" placeholder='nickname or annymous' name="username" style="display: none;" value='<?php echo $userEmail ?>'>
        <?php else :  
        ?><input type="text" placeholder='nickname or annymous' name="username" style="display: none;" value='Guest'>
        <?php endif; ?>
      <input type="text" name="comment" placeholder="type the comment" id='text-comment'>
      <button type="submit"  name='insert'><i class="fa-regular fa-paper-plane" name='insert'  ></i></button>
   
      
    </form>
    </div>
        </table> 

   
          

</body>
</html>





<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script>
    $(document).ready(function() {
        $('#example').DataTable();
      

       
    });
    $(document).ready(function() {
        $('#btnupdate').click(function(){
            $('#txtUpdate').show();
            $('#txtsave').hide();
         
        })
    });
    
</script>