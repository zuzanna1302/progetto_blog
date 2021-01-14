 <?php
 $DATABASE_HOST = 'localhost';
 $DATABASE_USER = 'root';
 $DATABASE_PASS = '@password123';
 $DATABASE_NAME = 'blog';

 // Create connection

 $conn = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);

 // Check connection

 if (!$conn) {
       die("Connection failed: " . mysqli_connect_error());
 }
$titolo = $_POST['titolo'];
$contenuto = $_POST['contenuto'];
$autore = $_POST['Autore'];
$data = $_POST['Data'];
 echo "Connected successfully";
 echo $titolo;
 echo $contenuto;
 echo $autore;
 echo $data;




$sql = "INSERT INTO post (titolo, contenuto, Autore, Data) VALUES ('". $titolo ."', '".$contenuto."','". $autore."', '".$data."')";
 if (mysqli_query($conn, $sql)) {
   //    echo "New record created successfully";
} else {
       echo "Error: " . $sql . "<br>" . mysqli_error($conn);
 }
 mysqli_close($conn);

 ?>
