
<?php
$passwordUser = $_POST['passwordUser'];
    if (isset($_POST['action'])) {
        switch ($_POST['action']) {
            case 'insert':
                insert($passwordUser);
                break;
            case 'select':
                select();
                break;
        }
    }

    function select() {
        echo "The select function is called.";
        exit;
    }

    function insert($passwordUser) {
      $pwd = "admin";
      if($pwd == $passwordUser)
      {
        echo "OK";
      }
      else {
        echo "KO";
      }
        exit;
    }
?>
