
<?php
$passwordUser = $_POST['passwordUser'];
$adminname=$_POST['username'];
    if (isset($_POST['action'])) {
        switch ($_POST['action']) {
            case 'insert':
                insert($passwordUser,$username);
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

    function insert($passwordUser,$username) {
      $pwd = "admin";
      $usn="admin"
      if($pwd == $passwordUser && $usn == $username )
      {
        echo "OK";
      }
      else {
        echo "KO";
      }
        exit;
    }
?>
