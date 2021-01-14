<html>
<head>
<title>Blog: inserimento news</title>
</head>
<body>
<h1>Inserisci un articolo</h1>
<?


@include "config.php";


if(isset($_POST['submit'])){
  if(isset($_POST['titolo'])){
    $titolo = addslashes($_POST['titolo']);
  }
  if(isset($_POST['articolo'])){
    $articolo = addslashes($_POST['articolo']);
  }

  $sql = "INSERT INTO articoli (titolo, contenuto, data_pubblicazione) VALUES ( '$titolo', '$articolo', now())";

 
  if (@mysql_query($sql) or die (mysql_error())){
    echo "Articolo inserito con successo.";
  }
}else{
 
  ?>
<form action="insert_post.php" method="post">
Autore:<br>
<input name="autore" type="text" size="20"><br>
Titolo:<br>
<input name="titolo" type="text" size="30"><br>
Articolo:<br>
<textarea name="articolo" cols="40" rows="10"></textarea><br>
<input name="submit" type="submit" value="Invia">
</form>
  <?
}
?>
</body>
</html>
