<?php
  session_start();  
  include('connectDB.php'); 

try {
  
// set the PDO error mode to exception
    $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// prepare sql and bind parameters
    $stmt = $connect->prepare("INSERT INTO `Natural_Parks` (Article_Title, Article_Image, Author,Description, Posted_Date) 
VALUES (:Article_Title, :Article_Image, :Author, :Description, :Posted_Date)");
    $stmt->bindParam(':Article_Title', $title);
    $stmt->bindParam(':Article_Image', $img);
    $stmt->bindParam(':Author', $author);
    $stmt->bindParam(':Description', $description);
    $stmt->bindParam(':Posted_Date', $date);


// insert a row
    $title = $_POST["title"];
    $img = $_POST["img"];
    $author = $_POST["author"];
    $description = $_POST["description"];
    $date = date("Y/m/d");

    $stmt->execute();


    echo "<div style='text-align:center;'> ✅ تم اضافة المقال بنجاح  <div>";
}
catch(PDOException $e)
{
    echo "Error: " . $e->getMessage();
}
$connect = null;
?>
