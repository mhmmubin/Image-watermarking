 <?php
 include ('core/init_inc.php');
 
 if(isset($_FILES['image'])){
		$image_name = 'images/'. microtime(true) . '.png'; 			// for naming saved files.
		
		watermark_image($_FILES['image']['tmp_name'],$image_name);
	}
 ?>
 
 <!DOCTYPE html>
 
 <html lang = "en">
 
 <head>
 <meta charset="utf-8">
 </head>
 
 <body>
 <div>
 <?php
 if (isset($image_name)){
	 echo '<img src = "',$image_name,'" alt = "" />';
 }
 ?>
 </div>
 
 <div>
 <form method = "post" enctype = "multipart/form-data">
 <p>
 <input type = "file" name = "image"/>
 <input type = "submit" value = "Upload">
 </p>
 
 </form>
 </div>
 </body>
 </html>