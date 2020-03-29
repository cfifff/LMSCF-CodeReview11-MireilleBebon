<?php
session_start();

$count = 0;

$title = "Index";
  require_once "./template/header.php";
  require_once "./functions/database_functions.php";
  $conn = db_connect();
  $row3 = getSenior($conn);
  
?>



<div class="container">

<div class="row">
    <?php foreach($row3 as $allpets) { ?>
                   <div class="col-md-3 col-sm-6">
                       <div  class="thumbnail">
                           
                    <img class="img-responsive img-thumbnail" src="./img/<?php echo $allpets['image']; ?>">
                    
                    
            
                           <center>
                                <div class="caption">

                                        <p id="autoResize"><?php echo $allpets['name']; ?></p>
                                        <p><?php echo $allpets['age']; ?></p>
                                        <p><?php echo $allpets['address']; ?></p>
                                </div>
                           </center>
                       </div>
                   </div>
               <?php } ?>
  
  </div>

</div>