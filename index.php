<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Еко лофт</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Ретро-дошка в вашому інтер'єрі - це дошка з характером і історією. Виразна фактура, глибина кольору, запах сонця - саме за це цінуються природно постарілі дошки. Наша компанія пропунує великий вибір екологічно чистої продукції з масиву старого дерева. Ви впізнаєте цей тип природиної, а не людиною зістареної деревини за особливою виразною фактурою і глибиною кольором. Такого ефекту не можливо домогтися в жодні майстерні, навіть використовуючи дороге обладнання.">
  <script src="https://kit.fontawesome.com/afd6ea30d4.js"></script> 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <meta name="google-site-verification" content="IvkZZ2ljLsRdhOML_wMG0cei82xapbCM_QItLFLLBoc" />
  <link href="https://fonts.googleapis.com/css?family=Lobster&display=swap&subset=cyrillic" rel="stylesheet">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <link rel="icon" href="img/icon.png">
  <link href="https://fonts.googleapis.com/css2?family=Lora&display=swap" rel="stylesheet">
  <meta name="Keywords" content="Ретро дошка, Амбарна дошка, дошка, декоративна дошка, декоративна, Панно, меблі з дерева, полиці, дезайн, дерево, брусок, брус, декор деревом, Модерн, вінтажне дерево"> 
  <?php include "db.php"; 
  $category = $db->query("SELECT title FROM category");
  ?>

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
            foreach ($category as  $value) { 
?>
            <a class="dropdown-item" href="#<?php echo "bar_bord".$key2;?>"><?php echo $value["title"]; ?></a><?php  $key2++;} ?>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#footer">Контакти</a>
        </li>
      </ul>
    </div>
  </nav>
</head>
<body>
  <div class="slider ">
    <div class="item item-1">
      <span>Амбарні дошки</span>
      <div class="block">
        <h2>Амбарні дошки</h2>
        <p>Унікальний обробний матеріал для створення неповторних інтер'єрів в стилі:  лофт, Сканді, Рустик, Шале, Індастріал, Ретро, Еко, Кантрі, Модерн, Грандж. Високий контроль якості, широка палітра відтінків. Амбарні дошки не називаються старими 
          <a href="#bar_bord1" class="item-iakir">дальше...</a> 
        </p>
      </div>
    </div>
    <div class="item item-2"><span >Панно</span> 
      <div class="block">
        <h2>Панно</h2>
          <p>Старе дерево в іетер'єрі - актуальна тема, яка надихає дизайнерів у всьому світі.  
          Сьогодні у вас є можливість замовити найоригінальніші декоративні панелі з амбарної і ратро-дошки.
          Декоративні панелі:
          -заміняють штукатуркуі шпалери;
          -зберігають
          <a href="#bar_bord2"  class="item-iakir">дальше...</a></p>
      </div>
    </div>
    <div class="item item-3">
      <span>Лофт меблі</span> 
      <div class="block">
        <h2>Лофт меблі</h2>
        <p>Меблі з вінтажного дерева - краще в стилі Лофт Рустик і Кантрі Розширюючи столярний напрямок ми почали виробляти меблі в стилі Лофт. Брутальне поєднання старого дерева і металу - знахідка 
          <a href="#bar_bord3"  class="item-iakir">дальше...</a>
        </p>
      </div>
    </div>
    <div class="item item-4 " >
      <span>Обладнання інтерєру старим деревом</span> 
      <div class="block">
        <h2>Обладнання інтерєру старим деревом</h2>
        <p>Ретро-дошка в вашому інтер'єрі - це дошка з характером і історією. Виразна фактура, глибина кольору, запах сонця - саме за це цінуються природно постарілі дошки. Наша компанія пропунує великий вибір екологічно чистої продукції з масиву старого дерева.</p>
      </div>
    </div>
    <div class="item item-5">
      <span>Інші вироби</span> 
      <div class="block">
        <h2>Інші вироби</h2>
        <p>Меблі з вінтажного дерева - краще в стилі лофт, рустик і кантрі! Розширюючи столярний напрям, ми почали виробляти меблі в стилі лофт. Брутальне поєднання старого дерева і металу - знахідка для будь-якого тематичного інтер'єру. Столи , стільниці, табуретки, стелажі і багато інших інтер'єрних фантазії готові втілити в життя наші столяри і зварювальники. 
        </p>
      </div>
    </div>
  </div>
  <!---------------------------------------------------------------------------------->
  <?php 
        $category = $db->query("SELECT * FROM category");
  $key=1;
  foreach ($category as  $value) {
    ?>
  <div class="container">
    <div id="<?php echo "bar_bord".$key;?>">
      <div class="heder_article" ><h1 class="title_article"><?php echo $value["title"]; ?></h1></div>
    </div>
      <div class="row">
        <div class="col-sm-6 mt-4 content ">
          <p>
            <?php echo $value["text"];?>
          </p> 
        </div>
        <div class="col-sm-6 mt-4">
          <ul class="categoris">
             <?php 
            $subcategory = $db->query("SELECT * FROM subcategory where id_category='{$value["id"]}'");
           
            foreach ($subcategory as $value) {?>
               <li class="categori" style="background-image: url('<?php echo $value["img"];?>'); " ><a href="page.php?id=<?php echo $value["id"];?>"><span class="text"><?php echo $value["title"];?></span></a></li>

          <?php  } ?>
          </ul>
        </div>
      </div>
  </div>
   <?php $key++;}?>
  <!---------------------------------------------------------------------------------->
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

    <div  class="col-sm-6 mt-4 grid form_format">
        <div class="form">
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
</footer>
</html>