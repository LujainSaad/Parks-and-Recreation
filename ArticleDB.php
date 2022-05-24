<?php 
session_start();  
include('connectDB.php'); 
?>

<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>قائمة المقالات</title>
     <!-- fonts -->
     <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Cairo&family=El+Messiri&display=swap"
      rel="stylesheet"
    />
    <!-- style sheets -->
    <link rel="stylesheet" href="./styles.css" />
    <link rel="shortcut icon" type="image/png" href="img/favicon.ico" />
    <!-- font awesome -->
    <script
      src="https://kit.fontawesome.com/1c9ad4b785.js"
      crossorigin="anonymous"
    ></script>
</head>
<body>



<?php if(isset($_SESSION['message'])) : ?>
<h5 class="alert"><em><?= $_SESSION['message']; ?></em> </h5>
<?php 
unset($_SESSION['message']);
endif; ?> 

  <div class="center-text">
    <h2 class="heading-secondary"> قائمة المقالات </h2>
  </div>


<div class="wrapper">
  
  <div class="table">
    
    <div class="row head">
      <div class="cell">
        ID
      </div>
      <div class="cell">
      Article Title
      </div>
      <div class="cell">
      Article Image
      </div>
      <div class="cell">
      Posted Date	
      </div>
      <div class="cell">
      Author
      </div>
      <div class="cell">
      Description	
      </div>
    </div>
<?php
    $query = "SELECT * FROM `Natural_Parks`";
    $d=$connect->query ($query); 

  

   
  foreach($d as $data)   //for(int i ;)
 {
     

      ?>

      <div class="row">
      <div class="cell" data-title="ID">
      <?php echo $data['ID']; ?> 
      </div>
      <div class="cell" data-title="Article Title">
      <?php echo $data['Article_Title']; ?>
      </div>
      <div class="cell cell-img" data-title="Article Image">
      <div class="table-img">
      <img src="<?php echo $data['Article_Image']?>" >
      </div>
      </div>
      <div class="cell" data-title="Posted Date	">
      <?php echo $data['Posted_Date']; ?> 
      </div>
      <div class="cell" data-title="Author">
      <?php echo $data['Author']; ?> 
      </div>
      <div class="cell" data-title="Description	">
      <?php echo $data['Description']; ?>
      </div>
      </div>

      <?php
 }

    ?>
   

    </div>
</div>
 <div class="btns">
 <button href="" id="add" onclick="show()" class="btn btn--green">إضافة مقال</button>

<a href="home.html" class="btn btn--green">العودة للصفحة الرئيسية</a>
 </div>

 <div id="popup">
  <form id="form" action="insert.php" method="post">
    <button type="button" id="close" onclick="hide()">X</button>
    <div class="form-header">
		<!-- <h2>اضف مقال</h2> -->
	</div>
    <div class="form-control">
    <input id="title" name="title" type="text" placeholder="العنوان "/>
			<i class="fas fa-check-circle"></i>
			<i class="fas fa-exclamation-circle"></i>
			<small>Error message</small>
		</div>
    <div class="form-control">
    <input id="img" name="img" type="text" placeholder="رابط الصورة "/>
			<i class="fas fa-check-circle"></i>
			<i class="fas fa-exclamation-circle"></i>
			<small>Error message</small>
		</div>
    <div class="form-control">
    <input id="author" name="author" type="text" placeholder="الكاتب"/>
			<i class="fas fa-check-circle"></i>
			<i class="fas fa-exclamation-circle"></i>
			<small>Error message</small>
		</div>
    <div class="form-control">
    <textarea id="description" name="description" placeholder="الوصف" cols="30" rows="10"></textarea>
			<i class="fas fa-check-circle"></i>
			<i class="fas fa-exclamation-circle"></i>
			<small>Error message</small>
		</div>
    <button type="submit"  id="btnSubmit" >اضافة</button>
    
   </form>
</div>



<script src="./script.js"></script>

</body>
</html>

