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
    .breadcrums, .basket { 
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
            <li><a class="white-text order" href="#basket">View Basket</a>
            <li><a class="dropdown-trigger white-text" href="#!" data-target="user_drop"><?= $_SESSION['username']; ?><i class="material-icons right">arrow_drop_down</i></a>
          <?php } ?>
        
        </ul>
      </div>
    </nav>
</div>
<div class="container" style="margin-top: 70px;">
<div class="row">
    <?php
        if($id == 1){
            $user = $_SESSION['username'];
            $pref_query = mysqli_query($db, "SELECT preference from user_master WHERE u_name = '$user'");
            $preference = mysqli_fetch_assoc($pref_query);
            $food_type = $preference['preference'];
            if($food_type != 'Both'){
                $sql = mysqli_query($db, "SELECT * FROM menu WHERE food_type = '$food_type'");
            }else{
                $sql = mysqli_query($db, "SELECT * FROM menu");
            }
        }else{
            $sql = mysqli_query($db, "SELECT * FROM menu");
        }
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
            <?php if($id == 1) {?>
            <div class="card-action">
                <a class="breadcrums">
                    <i class="minus material-icons">remove</i>
                </a>
                <a class="breadcrums">
                    <i class="plus material-icons" >add</i>
                </a>
                <span class="counter" name="counter">0</span>
            </div>
            <div class="card-action basket" style="height: 30px; background: #F44336; border: 0px; padding-top: 4px; text-align: center;">
                <span class="white-text">Add to Basket</span>
            </div>
            <?php } ?>
      </div>
    </div>
    <?php 
        }
    ?>
    </div>
    <div class="row">
        <div class="col s6 m3" style="float: right;">
            
        <?php if($id == 0) {?>
        <a href="#login" id="order" class="btn waves-effect waves-light modal-trigger" style="height: 30px; background: #F44336; border: 0px; padding-top: 4px; text-align: center;" type="submit" name="order">Order Food
            <i class="material-icons right">send</i>
        </a>
        <?php }?>

        
        </div>
    </div>

<?php if($id == 1) {?>
<h5 class="hide basket-ord" id="basket"><?= $_SESSION['username']; ?>'s Basket</h5>
<form id="tests" method="POST">
    <input id="u_id" type="hidden" name="u_id" value="<?= $_SESSION['id']; ?>">
</form>

<div class="order-place"> </div>

<a href="#!" class="basket-ord hide btn waves-effect waves-light" id="submit_basket" type="submit" style="background: #F44336; float: right; margin: 13px;">Place Order
    <i class="material-icons right">shopping_basket</i>
</a>
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
<footer id="contactUs" class="page-footer grey darken-4">
    <div class="container">
        <div class="row">
            <h3 class="white-text">Contact Us</h3>
            <div class="col l6 s12">
                <p class="grey-text text-lighten-4">
                    <div id="map-container-google-11" class="z-depth-1-half map-container-6" style="height: 400px">
                        <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d60532.572656792436!2d73.81509!3d18.515983!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x771e89770c4697a3!2sMIT+School+of+Management!5e0!3m2!1sen!2sin!4v1561132760347!5m2!1sen!2sin" 
                        width="450" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </p>
            </div>
            <div class="col l3 s12">
                <h5 class="white-text">Address</h5>
                <p>
                    <address>
                        RAJESH ENGINEERING WORK'S
                        5 Patel Nagar , 
                        80 Feet Road 
                        Rajkot - 360002 
                        (Gujarat - India)
                    </address>
                </p>
                <br>
                <h5 class="white-text">Contact</h5>
                <ul>
                    <li><a class="white-text" href="madhavtrivedi.77@gmail.com">madhavtrivedi.77@gmail.com</a></li>
                    <li><a class="white-text" href="tel:+091 9106655362">+091 9106655362</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-copyright black">
        <div class="container">
            Made by <a class="brown-text text-lighten-3" href="http://materializecss.com">Materialize</a>
        </div>
    </div>
</footer>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="lib/jquery/jquery.min.js"></script>
<script src="lib/jquery/jquery-migrate.min.js"></script>
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
    var counter = $n.text();
    counter++;
    $n.text(counter);
});

var test=[];
var sum;
$('.basket').on('click', function(){
    var name = $(this).siblings('.card-content').find('p:nth-child(1)').text();
    var price = $(this).siblings('.card-content').find('p:nth-child(3)').text();
    var count = $(this).siblings('.card-action').find('.counter').text();
    var total = count*price;
    if(count!=0){
        test.push({name: name, price: price, count: count, total: total});
        $(this).siblings('.card-action').remove();
        $(this).children('span').text('Basket Ready');
        $('.basket-ord').removeClass('hide');
        var html = "<table><thead><tr><th>Item Name</th><th>Item Price</th><th>Quantity</th><th>Total</th></tr></thead><tbody>";
        var i;
        var g_total = 0;
        for(i=0; i<test.length; i++){
            g_total+=test[i].total;
            html+="<tr>";
            html+="<td>"+test[i].name+"</td>";
            html+="<td>"+test[i].price+"</td>";
            html+="<td>"+test[i].count+"</td>";
            html+="<td>"+test[i].total+"</td>";
            html+="</tr>";
        }
        html+="<tr><td></td><td></td><td><b>Grand Total</b></td><td>"+g_total+"</td></tr></tbody></table>";
        $(".order-place").html(html);
        sum=g_total;
        }
});

$('#submit_basket').on('click', function(e){
    e.preventDefault();
    var user_id = $('#u_id').val();
    var orders = JSON.stringify(test);
    var total = sum;
    console.log(user_id);
    $.ajax({
        url: "basket.php",
        type: "POST",
        data: {
            user_id: user_id,
            orders: orders,
            total: total
        },
        success: function(response) {
            alert("data sent response is "+response);
            },
        error : function(e) {
            alert("data not sent"+e)
            }
        
    });
});


$('#login').modal();

$('#signup').modal();
        
$(".dropdown-trigger").dropdown();
</script>
</html>