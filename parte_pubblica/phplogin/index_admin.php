
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="style2.css">
      <link rel="stylesheet" href="css.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="https://kit.fontawesome.com/35da95f355.js" crossorigin="anonymous"></script>
<link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Open+Sans'>
  </head>
  <body>
  <header>

      <nav class="navbar navbar-expand-lg">
          <div class="container-fluid">
              <div class="navbar-header">
                  <ul class="nav navbar-nav ">
                      <a class="navbar-brand" rel="home" href="#" title="The blond caramel">
                          <img style="max-width:200px; margin-top: -70px;" src="logo.png">

    <li><a href="../logout.php"><span class="fas fa-sign-out-alt"></span> Logout</a></li>
              </div>
          </div>
            </nav>
        </div>
  </header>
  <!---->
  <main>
  <div class="container my-5">
         <div class="card-body text-center">
      <h4 class="card-title">ADMIN DASHBORD</h4>
      <p class="card-text">Qui l'admin ha la possibilita di creare, moddificare e eliminare i post</p>
    </div>
      <div class="card">
          <button id="add__new__art" type="button" class="btn btn-success position-absolute" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="fas fa-plus"></i> Aggiungi Post</button>
          <table class="table table-hover" style="white">
              <thead>
                <tr>
                  <th scope="col">ID</th>
                  <th scope="col">titolo</th>
                  <th scope="col">contenuto</th>
                  <th scope="col">autore </th>
                  <th scope="col">data</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>beauty trcks</td>
                  <td>lorem ipsummmmmmmmm</td>
                    <td>laura</td>
                      <td>29/11/2020</td>
                  <td>
                      <a class="btn btn-sm btn-primary" href="#"><i class="far fa-edit"></i> edit</a>
                      <a class="btn btn-sm btn-danger" href="#"><i class="fas fa-trash-alt"></i> delete</a>
                  </td>
                  <td><a class="btn btn-sm btn-info" href="#"><i class="fas fa-info-circle"></i> Details</a> </td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>beauty trcks</td>
                  <td>lorem ipsummmmmmmmm</td>
                    <td>laura</td>
                      <td>29/11/2020</td>
                  <td>
                      <a class="btn btn-sm btn-primary" href="#"><i class="far fa-edit"></i> edit</a>
                      <a class="btn btn-sm btn-danger" href="#"><i class="fas fa-trash-alt"></i> delete</a>
                  </td>
                  <td><a class="btn btn-sm btn-info" href="#"><i class="fas fa-info-circle"></i> Details</a> </td>
                  <tr>
                    <th scope="row">3</th>
                    <td>beauty trcks</td>
                    <td>lorem ipsummmmmmmmm</td>
                      <td>laura</td>
                        <td>29/11/2020</td>
                    <td>
                        <a class="btn btn-sm btn-primary" href="#"><i class="far fa-edit"></i> edit</a>
                        <a class="btn btn-sm btn-danger" href="#"><i class="fas fa-trash-alt"></i> delete</a>
                    </td>
                    <td><a class="btn btn-sm btn-info" href="#"><i class="fas fa-info-circle"></i> Details</a> </td>
                  </tr>
              </tbody>
            </table>
      </div>
<form action="insert.php" method="POST">
    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
              <div class="card-body text-center">
                <h4 class="card-title">Aggiunggi Post</h4>
              </div>
                <div class=" card col-8 offset-2 my-2 p-3">
              <form>
                <div class="input-group">
                  <label for="listname">Titolo</label>
                  <input type="text" class="form-control" name="titolo" id="listname" placeholder="Inserisci il titolo">
                </div>
                <div class="input-group">
                  <label for="datepicker">Contenuto</label>
                  <input  type="text" class="form-control" name="contenuto" id="datepicker" placeholder="Inserisci il contenuto">
                </div>
                <div class="input-group">
                                        <label for="datepicker">Autore</label>
                    <div class="input-group">

                      <input type="text" class="form-control" name="Autore" placeholder="Inserisci l'autore">
                    </div>
                    <div class="input-group">
                                            <label for="datepicker">Data</label>
                        <div class="input-group">

                          <input type="text" class="form-control" name="Data" placeholder="Inserisci la data">
                        </div>
                  </div>
               <div class="form-group text-center">
                 <input type="submit" class="btn btn-block btn-primary">Aggiungi</button>
              </div>
            </form>
        </div>
        </div>
      </div>
    </div>
    </div>
  </form>
    </main>
    <!---->

    <!---->
    <footer >
      <div class="container bg-info p-5">

    	</div>
    </footer>
  </body>
</html>
<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: index.html');
	exit;
}
?>
