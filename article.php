<?php

include 'connectDB.php'; 
$results=array();
if(isset($_GET['ID']))
{
    $ID=$_GET['ID'];
$stmt = $connect->prepare("SELECT * FROM Natural_Parks WHERE ID=$ID");
$stmt->execute();
 $results=$stmt->fetchAll(PDO::FETCH_ASSOC);
 $conn=null;
}     


?>

<!DOCTYPE html>
<html lang="en" dir="rtl">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Cairo&family=El+Messiri&display=swap"
      rel="stylesheet"
    />
    <!-- style sheets -->
    <link rel="stylesheet" href="styles.css" />
    <link rel="shortcut icon" type="image/png" href="img/favicon.ico" />
    <!-- font awesome -->
    <script
      src="https://kit.fontawesome.com/1c9ad4b785.js"
      crossorigin="anonymous"
    ></script>
    <!-- 🌼🌲 -->
    <title><?php echo $results[0]['Article_Title'] ;?></title>
  </head>
  <body>

    <article class="post" dir="rtl">
   
      <div>
        <div
          class="absolute-bg"
          style="background-image: url('<?php echo $results[0]['Article_Image']?>')"
        ></div>
      </div>
      <div class="post__container">
        <span class="post__category"><?php echo $results[0]['Author'] ;?></span>

        <div class="post__content">
          <header>
            <time class="post__time"><?php echo $results[0]['Posted_Date'] ;?></time>
            <h1 class="post__header">
              <span><?php echo $results[0]['Article_Title'] ;?></span>
            </h1>
          </header>

          <p class="post__text">
          <?php echo $results[0]['Description'] ;?>
          </p>
        </div>
        <div class="post__link">
          <a href="home.html">العودة</a>
        </div>
      </div>
    </article>

   
  </body>
</html>