<?php

  $page = "Dashboard";

  require '../../assets/inc/header.inc.php';
  require '../../assets/inc/classes/Collection.php';
  require '../../assets/inc/classes/Game.php';

  $gameObj = new Game();
  $collectionObj = new Collection();
  $collections = $collectionObj->getCollections();

  if(!isset($_GET["game_code"])) {

    header("Location: ../index.php");
    die();

  }

 ?>

 <div class="dashboard">

   <div class="sidenav">

     <div class="menu">

       <a href="../index.php"><i class="fas fa-home"></i></a>
       <a href="../profile.php"><i class="fas fa-user"></i></a>
       <a href="../settings.php"><i class="fas fa-cog"></i></a>
       <a href="?logout=1"><i class="fas fa-sign-out-alt"></i></a>

       <img class="logo" src="../../assets/img/icon.png" />

     </div>

   </div>

   <div class="container">

     <div class="main">

       <h1 class="title">Create game</h1>
       <h1>Edit the details of your new game</h1>

       <h1>Select collection</h1>
       <select class="select">

         <?php

            for($i = 0;$i < count($collections);$i++) {

              echo '<option value="' . $i . '">' . $collectionObj->getCollection($collections[$i]) . '</option>';

            }

          ?>

       </select>

       <h1>Game code</h1>
       <h1 class="game-code"><?php echo substr($_GET["game_code"], 0, 3) . "-" . substr($_GET["game_code"], 3, 5); ?></h1>
       <button class="add-btn" id="startGame"><i class="fas fa-paper-plane"></i> Start game</button>

     </div>

   </div>

 </div>

<?php

  require '../../assets/inc/footer.inc.php';

 ?>