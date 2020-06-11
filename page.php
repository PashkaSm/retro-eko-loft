<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Еко лофт</title>
  <?php include "db.php";
    $id = (int)$_GET["id"];
    if (empty($id) || is_string($id)) {
     echo '<script type="text/javascript">';
          echo 'window.location.href="index.php";';
          echo '</script>';
          echo '<noscript>';
          echo '<meta http-equiv="refresh" content="0;url=index.php" />';
          echo '</noscript>';
    } else{
        $category = $db->query("SELECT * FROM subcategory where id = $id " )->fetch();
    }
    if (empty($category)) {
      echo '<script type="text/javascript">';
      echo 'window.location.href="index.php";';
      echo '</script>';
      echo '<noscript>';
      echo '<meta http-equiv="refresh" content="0;url=index.php" />';
      echo '</noscript>';
    }
    $categorys = $db->query("SELECT title FROM category");
    ?>
  <meta name="description" content="<?php echo $category["text"]; ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://kit.fontawesome.com/afd6ea30d4.js"></script> 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link href="https://fonts.googleapis.com/css?family=Lobster&display=swap&subset=cyrillic" rel="stylesheet">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <link rel="icon" href="img/icon.png">

<nav class="navbar navbar-expand-sm  ">
  <!-- Brand -->
   <a class="navbar-brand " href="index.php">
    <img src="img/logo.png" class="logo_img" alt="">
    </a>
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
  <!-- Links -->
  <div class="collapse navbar-collapse justify-content-end mr-3" id="myNavbar">
      <ul class="navbar-nav">
          <li class="nav-item dropdown">
            <a  class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
              Наші вироби
            </a>  
            <div class="dropdown-menu">
              <?php  $key2 =1; 
            foreach ($categorys as  $value) { 
?>
            <a class="dropdown-item" href="index.php#<?php echo "bar_bord".$key2;?>"><?php echo $value["title"]; ?></a><?php  $key2++;} ?>
            </div>
          </li>
            <li class="nav-item">
              <a class="nav-link" href="#footer">Контакти</a>
            </li>
        <!-- Dropdown -->
        
      </ul>
</div>
</nav>
</head>
<body>
 <div class="content_page grid">
   <div class="right"> 
    <div class="infinity-footer">
         <div class="infinity">
                 <?php 
                 $news=$db->query("SELECT * FROM img where id_subcategory = $id;");
                 foreach ($news as $key => $value) {?>

                     <img  src="../img/img/<?php echo $value["img"];?>"class="<?php if($key!=0)echo "opacity0";    ?>" alt="">
                   <?php
                 }?>
         </div>
     <a class="prev">&#10094</a>
     <a class="next">&#10095</a>
     </div>
  
   </div>
   <div class="left">
    <h1 style="color:black;padding: 10px"><?php echo $category["title"]; ?></h1>
      <p style="color:black; padding: 40px; font-size: 1.4em;"><?php echo $category["text"]; ?></p>
      <p style="color:black; padding: 0px 40px; font-size: 1.4em;">Ціна: <?php echo $category["price"]; ?></p>


   </div>
    
 </div>
</body>
<footer id="footer">
  <div class="container">
  <div class="row">
    <div class="col-sm-6 mt-4 footer" >
      <h1>Контакти:</h1>
      <ul class="categoris  ml-4">
        <li class="mts mt-2"><img src="/img/kuiv.webp" alt=""><span class="text-contact">+38 (067) 283-48-96</span></li>
        <li class="mts mt-2"><img src="/img/lifecell.webp" alt=""><span class="text-contact">+38 (073) 165-21-67</span></li>
        <li class="mts mt-2"><img src="/img/inst.jpg" alt=""><span class="text-contact"><a href="https://instagram.com/eko.loft?igshid=nmct4dfo7if1" target="_blank">Інстаграм - eko.loft</a></span></li>
      </ul> 
      <h1>Наша адреса:</h1>
      <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2573.995153979331!2d24.145627715708823!3d49.823756279393784!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x473ac25cbe64f141%3A0xd2504aa08d48108c!2z0LLRg9C70LjRhtGPINCa0ZbQu9GM0YbQtdCy0LAsIDEsINCS0LjQvdC90LjQutC4LCDQm9GM0LLRltCy0YHRjNC60LAg0L7QsdC70LDRgdGC0YwsIDc5NDk1!5e0!3m2!1suk!2sua!4v1590669158158!5m2!1suk!2sua" width="250" height="250" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
     <h4 class="all_law ">@Всі права захищено</h4>
    </div>

    <div class="col-sm-6 mt-4 grid form_format">
        <div  class="form">
          <h3 align="center" class="forms_title">Залишіть свої контактіні дані</h3>
          <form align="center" action="//formspree.io/eko.loft2020@gmail.com" method="post">
            <input class="forms" type="text" name="Name" placeholder="Ім'я">
            <br>
            <input class="forms" type="text" name="Number" placeholder="Номер телефону">
            <br>
            <input class="forms" type="email" name="Email" placeholder="Email"> 
            <br>
            <button class="form_buttons">Надіслати</button>
          </form>
        </div>
    </div>
  </div>
</div>
<script>
    let images = document.querySelectorAll('.infinity img');
    let current = 0;
    
    function slider() {
        for (let i=0; i< images.length;i++){
            images[i].classList.add('opacity0');
        }
          images[current].classList.remove('opacity0');
    }
    
    document.querySelector('.prev').onclick = function(){
         if (current - 1 == -1){
            current = images.length - 1;                                    
        }
        else {
            current--;
        }
        slider();
    }
    document.querySelector('.next').onclick =function(){
         if (current + 1 == images.length){
            current = 0;                                    
        }
        else {
            current++;
        }
        slider();
    }
                            
</script>
</footer>
</html>