 <?php
 $DATABASE_HOST = 'localhost';
 $DATABASE_USER = 'root';
 $DATABASE_PASS = '@password123';
 $DATABASE_NAME = 'complete-blog-php';

 // Create connection

 $conn = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);

 // Check connection

 if (!$conn) {
       die("Connection failed: " . mysqli_connect_error());
 }
$titolo = $_POST['title'];
$slug = $_POST['slug'];
$image = $_POST['image'];
$body = $_POST['body'];
$published = $_POST['published'];
$created_at = $_POST['created_at'];

 echo "Connected successfully";
 echo $titolo;
 echo $slug;
 echo $image;
 echo $body ;
 echo $published ;
 echo $created_at;
 




$sql = "INSERT INTO posts (title, slug, image , body, published, created_at) VALUES ('". $titolo ."', '".$slug."','". $image."', '".$body."','".$published."','".$created_at."')";
 if (mysqli_query($conn, $sql)) {
   //    echo "New record created successfully";
} else {
       echo "Error: " . $sql . "<br>" . mysqli_error($conn);
 }
 mysqli_close($conn);

 ?>
