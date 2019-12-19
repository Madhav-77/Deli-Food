<?php 
include('admin_add_item.php');
include('database.php');
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
<div class="navbar-fixed">
    <nav style="background-color: #F44336;">
      <div class="nav-wrapper">
        <a href="#!" class="brand-logo white-text">Logo</a>
        <ul class="right hide-on-med-and-down">
          <li><a href="sass.html" class="white-text">Home</a></li>
          <li><a href="badges.html" class="white-text">Username</a></li>
        </ul>
      </div>
    </nav>
</div>
<div class="fixed-action-btn">
    <a href="#add_items" class="btn-floating btn-large red modal-trigger">
        <i class="large material-icons">add</i>
    </a>
</div>

<div id="add_items" class="modal" style="height: 70%; width: 40%;">
    <div class="modal-content">
        <h4 class="center">Add Item</h4>
        <div class="row">
            <form class="col s12" method="post" action="admin.php">
                <div class="row">
                    <div class="input-field col s12" style="margin-bottom: 0px;">
                        <input id="i_name" name="i_name" type="text" class="validate">
                        <label for="i_name">Item Name</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12" style="margin-bottom: 0px;">
                        <input id="i_price" name="i_price" type="text" class="validate">
                        <label for="i_price">Price</label>
                    </div>
                </div>
                <div class="file-field input-field">
                    <div class="btn">
                        <span>File</span>
                        <input type="file">
                    </div>
                    <div class="file-path-wrapper">
                        <input class="file-path validate" type="text">
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12" style="margin-bottom: 0px;">
                        <p>
                            <label style="font-size: 1rem;">Is the item:</label>
                            <label>
                                <input class="with-gap" name="type" type="radio" value="Veg" checked/>
                                <span >Vegeterian</span>
                            </label>
                            <label>
                                <input class="with-gap" name="type" type="radio" value="Non-Veg"/>
                                <span>Non-Vegeterian</span>
                            </label>
                        </p>
                    </div>
                </div>
                <div class="row">                          
                    <div class="input-field col s12" style="margin-bottom: 0px; margin-top: 0px;">
                        <button style="background-color: #F44336;" class="btn waves-effect waves-light" type="submit" name="add">Add Item
                            <i class="material-icons right">send</i>
                        </button>        
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="container" style="margin-top: 70px;">
    <h4>Items List</h4>
    <table class="striped">
        <thead>
          <tr>
              <th>#</th>
              <th>Item Name</th>
              <th>Item Price</th>
              <th>Item Type</th>
              <th>Action</th>
          </tr>
        </thead>
        <?php
            $sql = mysqli_query($db, "SELECT * FROM menu");
        ?>
        <tbody>
        <?php
        foreach($sql as $data){   ?>
        <tr>
            <td><?php $data['item_id']; ?></td>
            <td><?php $data['item_name']; ?></td>
            <td><?php $data['item_price']; ?></td>
            <td><?php $data['food_type']; ?></td>
            <td>
                <a class="breadcrums">
                    <i class="material-icons">create</i>
                </a>
                <a class="breadcrums delete">
                    <i class="material-icons">delete</i>
                </a>
            </td>
          </tr>
        <?php }?>
          <!-- <tr>
            <td>Alan</td>
            <td>Jellybean</td>
            <td>Non-Vegeterian</td>
            <td>$3.76</td>
            <td>
                <a class="breadcrums">
                    <i class="material-icons">create</i>
                </a>
                <a class="breadcrums delete">
                    <i class="material-icons">delete</i>
                </a>
            </td>
          </tr>
          <tr>
            <td>Jonathan</td>
            <td>Lollipop</td>
            <td>Non-Vegeterian</td>
            <td>$7.00</td>
            <td>
                <a class="breadcrums">
                    <i class="material-icons">create</i>
                </a>
                <a class="breadcrums delete">
                    <i class="material-icons">delete</i>
                </a>
            </td>
          </tr> -->
        </tbody>
      </table>
</div>
</body>
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="js/materialize.js"></script>
<script src="js/init.js"></script>
<script>
$(document).ready(function(){
    $('#add_items').modal();
});
</script>
</html>