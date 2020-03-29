<?php
session_start();

$count = 0;

$title = "Index";
  require_once "./template/header.php";
  require_once "./functions/database_functions.php";
  $conn = db_connect();
  $row = getSenior($conn);
  
?>



<div class="container">

  <div class="row">
    <?php foreach($row as $allpets) { ?>
                   <div class="col-md-3 col-sm-6">
                       <div  class="thumbnail">
                           <a href="young.php?ID=<?php echo $young['ID']; ?>">
                    <img class="img-responsive img-thumbnail" src="./img/<?php echo $allpets['image']; ?>">
                    </a>
                    
            
                           <center>
                                <div class="caption">
                                        <p id="autoResize"><?php echo $allpets['name']; ?></p>
                                        <p><?php echo $allpets['address']; ?></p>
                                </div>
                           </center>
                       </div>
                   </div>
               <?php } ?>
  
  </div>

</div>