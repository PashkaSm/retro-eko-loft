<?php include "db.php";
#Редагування категорії
 if($_POST["edit"]){
	$title=$_POST["text"];
	$text=$_POST["description_admin"];
	$id = $_GET["id"];
	$price = $_POST["price"];
	if (empty($title)||empty($text)||$_FILES["fileToUpload"]["name"][0]==""){
		$news=$db->query("UPDATE subcategory SET title='$title',text='$text',price='$price'  where id=$id;");
	}else{
	$target_dir = "img/img/";
	$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"][0]);
	$uploadOk = 1;
	$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
	if (file_exists($target_file)) {
	    $uploadOk = 0;
	}
			// Check file size
	if ($_FILES["fileToUpload"]["size"] > 5000000000000) {
	    $uploadOk = 0;
	}
	// Allow certain file formats
	if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
	&& $imageFileType != "gif" ) {
   		$error[]= "Вибачте, тільки файли типу JPG, JPEG, PNG & GIF.";
	    $uploadOk = 0;
	}
	// Check if $uploadOk is set to 0 by an error
	if ($uploadOk == 0) {
	} else {
	    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)){
	        $true= "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
	    
	    } else {
	        $error[]= "Вибачте, Помилка завантаження.";
	    }
	}
	$title = str_replace("'", "\'", "$title");
	$title = str_replace("\"", "\"", "$title");
	$text= str_replace("\"", "\"", "$text");
	$text= str_replace("'", "\'", "$text");
	foreach($_FILES['fileToUpload'] as $key => $value) {
	    foreach($value as $k => $v) {
	        $_FILES['fileToUpload'][$k][$key] = $v;
	    }
	    // Удалим старые ключи
	    unset($_FILES['fileToUpload'][$key]);
	}
	foreach ($_FILES['fileToUpload'] as $k => $v) {
			    $name=$_FILES['fileToUpload'][$k]['name'];
			    move_uploaded_file( $_FILES['fileToUpload'][$k]['tmp_name'], $target_dir.
			    $_FILES['fileToUpload'][$k]['name']);
			    $sw=$db->prepare("INSERT INTO img (img,id_subcategory,price) VALUES ('$name','$id','0');");
			    $sw->execute();
				$sw->closeCursor();
			}
	$news=$db->query("UPDATE subcategory SET title='$title',text='$text',img='$target_file',price='$price'  where id=$id;");
	}
	echo"Відредаговано";
	?>
	<a href="admin.php?id=<?php echo $id ?>">Назад</a>
	<?php
}

#Видалення категорій
if($_POST["delete"]){
	$id = $_GET["id"];
	$db->query("DELETE FROM subcategory WHERE id=$id;");
	header('Location: admin.php');
}

#Додавання категорій
if($_POST["add"]){
	$title=$_POST["text"];
	$text=$_POST["description_admin"];
	$id = $_GET["id"];
	$price = $_POST["price"];
	if (empty($title)||empty($text)||empty($_FILES["fileToUpload"]["name"])){
		header('Location: admin.php');
	}else{
	$target_dir = "img/img/";
	$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"][0]);
	$uploadOk = 1;
	$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
			// Check if file already exists
	if (file_exists($target_file)) {
		$target_file=$target_dir . basename($_FILES["fileToUpload"]["name"]);
	}
			// Check file size
	if ($_FILES["fileToUpload"]["size"] > 5000000000000) {
	    $uploadOk = 0;
	}
	// Allow certain file formats
	if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
	&& $imageFileType != "gif" ) {
   		$error[]= "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
	    $uploadOk = 0;
	}
	// Check if $uploadOk is set to 0 by an error
	if ($uploadOk == 0) {
	} else {
	    if (true){
	    } else {
	        $error[]= "Sorry, there was an error uploading your file.";
	    }
	}
	
	$category = $db->query("SELECT id FROM category")->fetchAll();
	foreach($_FILES['fileToUpload'] as $key => $value) {
	    foreach($value as $k => $v) {
	        $_FILES['fileToUpload'][$k][$key] = $v;
	    }
	    // Удалим старые ключи
	    unset($_FILES['fileToUpload'][$key]);
	}


	$key=0;
	$id_test='add_new_subcategory_';
	foreach ($category as  $value) {
		if ($id==$id_test.$value['id']){
			$news=$db->prepare("INSERT INTO subcategory (id_category,title,text,img,price) VALUES ($value[0],'$title','$text','$target_file','$price');");
			$news->execute();
			$news->closeCursor();
			$idss =  $db->query("SELECT id FROM subcategory where title ='$title' ")->fetch();
			var_dump();
			foreach ($_FILES['fileToUpload'] as $k => $v) {
			    $name=$_FILES['fileToUpload'][$k]['name'];
			    move_uploaded_file(  $_FILES['fileToUpload'][$k]['tmp_name'], $target_dir.
			    $_FILES['fileToUpload'][$k]['name']);
			    $sw=$db->prepare("INSERT INTO img (img,id_subcategory,price) VALUES ('$name','{$idss["id"]}','0');");
			    $sw->execute();
				$sw->closeCursor();
			}
			break;
			
		}
		$key++;
	}
	if ($id=='add_new_post'){
		$news=$db->query("INSERT INTO category (title,text)VALUES ('$title','$text'); ");
	}
	echo"Додано";
	?>
	<a href="admin.php">Назад</a>
	<?php
}	
}
#Видалення картинок
if (isset($_GET["delete_img"])) {
	$db->query("DELETE FROM img WHERE id_subcategory='{$_GET["id"]}' and img='{$_GET["delete_img"]}';");
	header('Location:admin.php?id=$_GET["delete_img"]');
}
if (isset($_POST["edit_categori"])) {
	$id = $_GET["id"];
	$title=$_POST["text"];
	$description_admin = $_POST["description_admin"];
	$news=$db->query("UPDATE category SET title='$title',text='$description_admin'  where id=$id;");
	echo"Відредаговано";
	?>
	<a href="admin.php">Назад</a>
	<?php
}
?>