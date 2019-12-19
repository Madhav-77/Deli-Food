<?php include('server.php'); ?>
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
    </style>
</head>

<body>
<ul id="user_drop" class="dropdown-content">
  <li><a href="logout.php">Logout</a></li>
</ul>
<div class="navbar-fixed">
    <nav style="background-color: #F44336;">
      <div class="nav-wrapper">
        <a href="index.php" class="brand-logo white-text">Logo</a>
        <ul class="right hide-on-med-and-down">
          <?php if($id == 1) {?>
            <li><a class="dropdown-trigger white-text" href="#!" data-target="user_drop"><?= $_SESSION['username']; ?><i class="material-icons right">arrow_drop_down</i></a>
          <?php } ?>
        
        </ul>
      </div>
    </nav>
</div>
<div class="container" style="margin-top: 70px;">
<div class="row">
    <?php
        $sql = mysqli_query($db, "SELECT * FROM menu");
    ?>
    <?php
        foreach($sql as $data){ 
    ?>
    <div class="col s6 m3">
        <div class="card">
            <div class="card-image">
                <img src="images/image1.jpg">
            </div>
            <div class="card-content">
                <p id="<?= $data['item_id'];?>" class="card-title"><?= $data['item_name'];?></p>
                <p style="float:left;"><?= $data['food_type'];?></p>
                <p style="float:right;"><?= $data['item_price'];?></p>
            </div>
            </br>
            <div class="card-action">
                <a class="breadcrums">
                    <i class="minus material-icons">remove</i>
                </a>
                <a class="breadcrums">
                    <i class="plus material-icons" >add</i>
                </a>
                <span class="counter" name="counter">0</span>
            </div>
      </div>
    </div>
    <?php 
        }
    ?>
    <div class="row">
        <div class="col s6 m3">
            
        <?php if($id == 0) {?>
        <a href="#login" id="order" class="btn waves-effect waves-light modal-trigger" type="submit" name="order">Order Food
            <i class="material-icons right">send</i>
        </a>
        <?php }else{?>
            <a href="add_order.php" class="btn waves-effect waves-light" type="submit" name="order">Order Food
                <i class="material-icons right">send</i>
            </a>
        <?php }?>
        
        </div>
    </div>
</div>

<?php if($id == 1) {?>
<h5><?php $_SESSION['username'];?>'s Order</h5>
<table>
    <thead>
        <tr>
            <th>Item Name</th>
            <th>Item Price</th>
            <th>Quantity</th>
            <th>Total</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
    </tbody>
</table>
<?php }?>
<div id="login" class="modal modal-fixed-footer" style="height: 70%; width: 40%;">
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
<div id="signup" class="modal modal-fixed-footer" style="height: 70%; width: 40%;">
    <div class="modal-content">
        <h4 class="center">Signup</h4>
        <div class="row">
            <form class="col s12" method="post" action="index.php">
                <?php include('errors.php'); ?>
                <div class="row">
                    <div class="input-field col s12" style="margin-bottom: 0px;">
                        <input id="username" name="username" type="text" class="validate">
                        <label for="username">Username</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12" style="margin-bottom: 0px;">
                        <input id="email" name="email" type="email" class="validate">
                        <label for="username">Email</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12" style="margin-bottom: 0px;">
                            <input id="password" name="password" type="password" class="validate">
                            <label for="password">Password</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12" style="margin-bottom: 0px;">
                            <input id="c_password" name="c_password" type="password" class="validate">
                            <label for="c_password">Confirm Password</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12" style="margin-bottom: 0px;">
                            <input id="contact" name="contact" type="text" class="validate">
                            <label for="contact">Contact</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12" style="margin-bottom: 0px;">
                            <input id="city" name="city" type="text" class="validate">
                            <label for="city">City</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12" style="margin-bottom: 0px;">
                        <p>
                            <label style="font-size: 1rem;">Preference:</label>
                            <label>
                                <input class="with-gap" name="pref" type="radio" value="Veg" checked/>
                                <span >Vegeterian</span>
                            </label>
                            <label>
                                <input class="with-gap" name="pref" type="radio" value="Non-Veg"/>
                                <span>Non-Vegeterian</span>
                            </label>
                            <label>
                                <input class="with-gap" name="pref" type="radio" value="Both"/>
                                <span>Both</span>
                            </label>
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12" style="margin-bottom: 0px;">
                        <p>
                            <label style="font-size: 1rem;">Are you a: </label>
                            <label>
                                <input class="with-gap" name="type" type="radio" value="Customer" checked/>
                                <span >Customer?</span>
                            </label>
                            <label>
                                <input class="with-gap" name="type" type="radio" value="Restaurant"/>
                                <span>Restaurant?</span>
                            </label>
                        </p>
                    </div>
                </div>
                
                <div class="row">                          
                    <div class="input-field col s12" style="margin-bottom: 0px; margin-top: 0px;">
                        <button style="background-color: #F44336;" class="btn waves-effect waves-light" type="submit" name="reg_user">Submit
                            <i class="material-icons right">send</i>
                        </button>        
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="modal-footer center">
        <a href="#login" class="modal-trigger modal-close waves-effect waves-green btn-flat">Already a member?</a>
    </div>
</div>
</div>
</body>
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="js/materialize.js"></script>
<script src="js/init.js"></script>
<script>
$('.minus').on('click', function(){
    var $n = $(this).parent('.breadcrums').parent('.card-action').find('.counter');
    var counter = $n.text();
    if(counter!=0){
        counter--;
    }
    $n.text(counter);
});

$('.plus').on('click', function(){
    var $n = $(this).parent('.breadcrums').parent('.card-action').find('.counter');
    counter++;
    var counter = $n.text();
    $n.text(counter);
});

$('.counter').on('change', function(){
        /* var $n = $(this).parent('.breadcrums').parent('.card-action').find('.counter');
        var qty = $n.text();
        var id = $("div p:first-child").id;
        var name = $("div p:first-child").text();
        var price = $("div p:last-child").text(); */
        console.log('name');
    });

$('#login').modal();

$('#signup').modal();
        
$(".dropdown-trigger").dropdown();
</script>
</html>