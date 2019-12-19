<?php 
include('database.php');
include('server.php');

if(!isset($_SESSION['id']))
{
   header('Location:index.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <title>Parallax Template - Materialize</title>

    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
    <style>
    .counter{
        float: right;
        font-weight: bold;
    }
    .breadcrums { 
        cursor: pointer; 
    }
    h4 {
        font: 400 100px/1.5 'Pacifico', Helvetica, sans-serif;
        color: #2b2b2b;
        text-shadow: 3px 3px 0px rgba(0,0,0,0.1), 7px 7px 0px rgba(0,0,0,0.05);
        font-size: 24px;
        text-align: center;
    }
    .delete{
        color: #F44336;
    }
    .row{
        margin-bottom: 0px;
    }
    </style>
</head>

<body>
<ul id="admin_drop" class="dropdown-content">
    <li><a href="admin.php">Home</a></li>
  <li><a href="logout.php">Logout</a></li>
</ul>
<div class="navbar-fixed">
    <nav style="background-color: #F44336;">
      <div class="nav-wrapper">
        <a href="#!" class="brand-logo white-text">Logo</a>
        <ul class="right hide-on-med-and-down">
            <li><a class="dropdown-trigger white-text" href="#!" data-target="admin_drop"><?= $_SESSION['username']; ?><i class="material-icons right">arrow_drop_down</i></a>
        </ul>
      </div>
    </nav>
</div>

<div class="container" style="margin-top: 70px;">
    <h4>Orders List</h4>
    <table class="striped">
        <thead>
          <tr>
              <th>#</th>
              <th>Username</th>
              <th>Total</th>
              <th>Action</th>
          </tr>
        </thead>
        <?php
            $sql = mysqli_query($db, "SELECT * FROM orders");
        ?>
        <tbody>
        <?php
            foreach($sql as $data){ 
                $id = $data['user_id'];
                $u_name = mysqli_query($db, "SELECT u_name from user_master WHERE user_id = $id");
                $user = mysqli_fetch_assoc($u_name);
        ?>
        <tr id="<?= $data['order_id'];?>">
            <td><?= $data['order_id']; ?></td>
            <td><?= $user['u_name']; ?></td>
            <td><?= $data['total']; ?></td>
            <td>
                <a href=".order" class="breadcrums modal-trigger">
                    <i class="material-icons">visibility</i>
                </a>
            </td>
          </tr>
        <?php 
            }
        ?>
        </tbody>
      </table>
</div>
<div class="order modal modal-fixed-footer" style="height: 70%; width: 40%;">
    <div class="modal-content">
        <h4 class="center">Login</h4>
        <div class="row">
            <form class="col s12" method="post" action="index.php">
                <div class="row">
                    <div class="input-field col s12" style="margin-bottom: 0px;">
                        <input id="username" name="username" type="text" class="validate">
                        <label for="username">Username</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12" style="margin-bottom: 0px;">
                            <input id="password" name="password" type="password" class="validate">
                            <label for="password">Password</label>
                        </div>
                    </div>
                <div class="row">                          
                    <div class="input-field col s12" style="margin-bottom: 0px; margin-top: 0px;">
                        <button style="background-color: #F44336;" class="btn waves-effect waves-light" type="submit" name="login">Submit
                            <i class="material-icons right">send</i>
                        </button>        
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="modal-footer center">
        <a href="#signup" class="modal-close modal-trigger waves-effect waves-green btn-flat">Not a member yet?</a>
    </div>
</div>

</body>
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="js/materialize.js"></script>
<script src="js/init.js"></script>
<script>

$(".dropdown-trigger").dropdown();
//$(".dropdown-trigger").dropdown('coverTrigger', false);
$('.order').modal();


</script>
</html>