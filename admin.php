<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Ретро дошка</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://kit.fontawesome.com/afd6ea30d4.js"></script> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap&subset=cyrillic,cyrillic-ext" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="img/icon.png">
    <link href="https://fonts.googleapis.com/css?family=Lobster&display=swap&subset=cyrillic" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap&subset=cyrillic,cyrillic-ext" rel="stylesheet">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <?php include "db.php"; ?>
<nav class="navbar navbar-expand-sm  ">
  <!-- Brand -->
 <a class="navbar-brand " href="index.php">
    <img src="img/logo.png" class="logo_img" alt="">
    </a>

</nav>
</head>
<body class="robot">
 
<div class="containes">
  <div class="row">
    <div class="col-sm-4  site_bar" >
      <h2 class="text_adminn ">Підкатегорії</h2>
      <ul class="categoris_admin">
        <?php 
        $category = $db->query("SELECT * FROM category");   
        $key=1;
        foreach ($category as  $cat) {
        ?>
        <li class="list_admin">
          <span class="text">
            <a data-toggle="collapse" data-target="#demos<?php echo"$key";?>"><?php echo $cat["title"]; ?></a>
          </span>
          <div id="demos<?php echo"$key";?>" class="collapse">
            <ul>
              <?php 
                $subcategory = $db->query("SELECT * FROM subcategory where id_category='{$cat["id"]}'");
                foreach ($subcategory as $value) {?>
                  <li class="list_admin"><a href="admin.php?id=<?php echo $value["id"];?>"><span class="text"><?php echo $value["title"];?></span></a></li>
                  <?php  } ?>
                  <li class="list_add"><a href="admin.php?add=add_new_subcategory_<?php echo $cat["id"] ;?>"><span class="text">Додати нову підкатегорію</span></a></li>
            </ul>
          </div>
        </li>
        <?php $key++;} ?>
      </ul>
      <h2 class="text_adminn ">Категорія</h2>
      <ul class="categoris_admin">
        <?php 
        $category = $db->query("SELECT * FROM category");   
        $key=1;
        foreach ($category as  $cat) {
        ?>
        <li class="list_admin">
          <span class="text">
            <a href="admin.php?id_category=<?php echo $cat["id"];?>"><?php echo $cat["title"]; ?></a>
          </span>
         
        </li>
        <?php $key++;} ?>
        <li class="list_add"><a href="admin.php?add=add_new_post"><span class="text">Додати нову категорію</span></a></li>
      </ul>
    </div>
    <div class="col-sm-8 mt-4 ">
      <?php 
        $subcategory = $db->query("SELECT * FROM subcategory where id='{$_GET["id"]}'")->fetch();
         $category = $db->query("SELECT * FROM category where id = '{$_GET["id_category"]}'")->fetch();   
        $variable;
        if (isset($_GET["add"])) {
           $variable = "Додати:";
         } else{
            $variable = "Редагувати:";
         }
      ?>

      <h1 class="text_adminn"><?php echo "$variable";?></h1>
      <form action="action.php?id=<?php if(isset($_GET["id"])) {echo $_GET["id"];}elseif(isset($_GET["id_category"])){echo $_GET["id_category"];} else{echo $_GET["add"];}?>" class="form_admin" method="post" enctype="multipart/form-data">
        <input type="text" name="text" class="input_admin" value="<?php if (isset($_GET["id"])){
          echo "$subcategory[2]";
          }elseif (isset($_GET["id_category"]))
          {
            echo trim($category[1]);
            
        }else{
          echo "";}?>">
        <br>
        <br>
        <textarea name="description_admin" class="description_admin"  cols="30" rows="10"><?php if (isset($_GET["id"])){
            echo "$subcategory[3]"; 
          }elseif (isset($_GET["id_category"]))
          {
            echo $category[2];
          }
          else{
          echo "";}?></textarea>
        <br>
        <br>
        <?php if(isset($_GET["id_category"])){}else{ ?>
        <input type="text" name="price" class="input_admin" value="<?php if (isset($_GET["id"])){
          echo "$subcategory[5]"; 
        }else{
          echo "";}?>">
        <?php  }?><br>
        <br>
        <?php if(isset($_GET["id_category"])){}else{ ?>
        <div class="input__wrapper">
          <input  type="file" name="fileToUpload[]" id="input__file" class="input input__file" multiple>
            <label for="input__file" class="input__file-button">
            <span class="input__file-icon-wrapper"><img class="input__file-icon" src="./img/add.svg" alt="Выбрать файл" width="25"></span>
            <span class="input__file-button-text">Додати зображення</span>
            </label>
        </div>
        
        <br> 
        <?php  }?>
        <?php 
        $img = $db->query("SELECT img FROM img where id_subcategory='{$_GET["id"]}'")->fetchAll();
        foreach ($img as $key => $value) {?>
          <ul>
            <li class="img_subcategori"><?php echo mb_substr($value["img"], 0,50, 'UTF-8')."...";?>  <a class="a_subcategori" href="action.php?delete_img=<?php echo $value["img"]; ?>&&id=<?php echo $_GET["id"]; ?> "> &#10060</a></li>
          </ul>
          <?php

        }
        echo "<br>";
        if (isset($_GET["id"])){ ?>
        <input type="submit" name="edit" class="form_buttons" value="Редагувати"></input>
        <br>
        <br>
        <input type="submit" name="delete" class="form_buttons" value="Видалити"></input>
        <br><?php } ?>
        <?php 
          if (isset($_GET["add"])){?>
            <input type="submit" name="add" class="form_buttons" value="Додати"></input>
          <?php }
          if (isset($_GET["id_category"])){ ?>
        <input type="submit" name="edit_categori" class="form_buttons" value="Редагувати"></input>
        <br>
        <br><?php } ?>
      </form>
    </div>
  </div>
</div>
</body>
</html>