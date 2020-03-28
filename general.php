<?php
session_start();

$count = 0;

$title = "Index";
  require_once "./template/header.php";
  require_once "./functions/database_functions.php";
  $conn = db_connect();
  $row = selectYoungFull($conn);
  $row1 = selectBigFull($conn);

?>

<div class="container">

  <div class="row">
    <?php foreach($row as $young) { ?>
                   <div class="col-md-3 col-sm-6">
                       <div  class="thumbnail">
                           <a href="young.php?ID=<?php echo $young['ID']; ?>">
                    <img class="img-responsive img-thumbnail" src="./img/<?php echo $young['young_image']; ?>">
                    </a>
                    <button class="favoriteBtn s-favoriteBtn_awaiting" aria-label="Add Finley to your favorites">
            
                           <center>
                                <div class="caption">
                                        <p id="autoResize"><?php echo $young['young_name']; ?></p>
                                        <p><?php echo $young['address']; ?></p>
                                </div>
                           </center>
                       </div>
                   </div>
               <?php } ?>
  
  </div>


  <div class="row">
    <?php foreach($row1 as $big) { ?>
                   <div class="col-md-3 col-sm-6">
                       <div  class="thumbnail">
                           <a href="big.php?ID=<?php echo $big['ID']; ?>">
                  <img class="img-responsive img-thumbnail" src="./img/<?php echo $big['big_image']; ?>">
                  </a>
                           <center>
                                <div class="caption">
                                        <p id="autoResize"><?php echo $big['big_name']; ?></p>
                                        <p><?php echo $big['address']; ?></p>
                                </div>
                           </center>
                       </div>
                   </div>
               <?php } ?>

  
  </div>


  
</div>
  