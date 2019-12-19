<?php include('server.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <title>Menu</title>

    <!--title bar icons-->
    <link href="images/image1.jpg" rel="icon">

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
    h4 {
        font: 400 100px/1.5 'Pacifico', Helvetica, sans-serif;
        color: #2b2b2b;
        text-shadow: 3px 3px 0px rgba(0,0,0,0.1), 7px 7px 0px rgba(0,0,0,0.05);
        font-size: 24px;
        text-align: center;
    }
    .footer-copyright {
        position:fixed;
        bottom:0;
        width: 100%;
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
            <a href="index.php" class="brand-logo white-text" style="padding-left: 20px; padding-top: 10px;">DF</a>
                <ul class="right hide-on-med-and-down">
                    <!-- displaying elements based on session -->
                    <?php if($id == 1) {?>
                        <li><a class="white-text order" href="#basket">View Basket</a>
                        <li><a class="dropdown-trigger white-text" href="#!" data-target="user_drop"><?= $_SESSION['username']; ?><i class="material-icons right">arrow_drop_down</i></a>
                    <?php } ?>
                </ul>
            </div>
        </nav>
    </div>
<div class="container" style="margin-top: 70px;">
    <h4>Menu</h4>
    <div class="row">
        <?php
            $u_id = $_GET['user_id']; // getting the restaurant id from url
            if($id == 1){
                $user = $_SESSION['username'];
                $pref_query = mysqli_query($db, "SELECT preference from user_master WHERE u_name = '$user'");
                $preference = mysqli_fetch_assoc($pref_query);
                $food_type = $preference['preference'];
                if($food_type == 'Both'){
                    $sql = mysqli_query($db, "SELECT * FROM menu WHERE food_type = '$food_type' AND user_id = '$u_id'");
                }else{
                    $sql = mysqli_query($db, "SELECT * FROM menu WHERE user_id = '$u_id'");
                }
            }else{
                $sql = mysqli_query($db, "SELECT * FROM menu WHERE user_id = '$u_id'");
            }
            foreach($sql as $data){ 
        ?>
        <div class="col s6 m3">
            <div class="card">
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
        <?php } ?>
    </div>
    <div class="row">
        <div class="col s6 m3" style="float: right;">
            <?php if($id == 0) {?>
                <a href="#login" id="order" class="btn waves-effect waves-light modal-trigger" style="background: #F44336;" type="submit" name="order">Order Food
                    <i class="material-icons right">send</i>
                </a>
            <?php }?>
        </div>
    </div>
</div>
<?php if($id == 1) {?>
    <div class="row">
        <div class="col s6" style="float:left;">
            <!-- storing the restaurant id -->
            <input type="hidden" id="restaurant_id" name="restaurant_id" value="<?= $u_id; ?>">
            <h5 class="hide basket-ord" id="basket"><?= $_SESSION['username']; ?>'s Basket</h5>
        </div>
        <div class="col s6">
            <a href="#!" class="basket-ord hide btn waves-effect waves-light" id="submit_basket" type="submit" style="background: #F44336; float: right;">Place Order
                <i class="material-icons right">shopping_basket</i>
            </a>
        </div>
    </div>
    <!-- storing the user id -->
    <form id="tests" method="POST">
        <input id="u_id" type="hidden" name="u_id" value="<?= $_SESSION['id']; ?>">
    </form>
    
    <!-- div element to display the food items added to basket -->
    <div class="order-place" style="margin-bottom: 50px;"> </div>
<?php }?>

<!-- login modal -->
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
<!-- signup modal -->
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
<div class="footer-copyright black">
    <div class="container white-text">
        Made by <a class="white-text text-lighten-3" href="https://www.linkedin.com/in/madhavpt/">Madhav Trivedi</a>
    </div>
</div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="lib/jquery/jquery.min.js"></script>
<script src="lib/jquery/jquery-migrate.min.js"></script>
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="js/materialize.js"></script>
<script src="js/init.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>

/* counter - */
$('.minus').on('click', function(){
    var $n = $(this).parent('.breadcrums').parent('.card-action').find('.counter');
    var counter = $n.text();
    if(counter!=0){
        counter--;
    }
    $n.text(counter);
});

/* counter + */
$('.plus').on('click', function(){
    var $n = $(this).parent('.breadcrums').parent('.card-action').find('.counter');
    var counter = $n.text();
    counter++;
    $n.text(counter);
});

/* javascript object array to store basket values */
var test=[];
var sum;
$('.basket').on('click', function(){
    var name = $(this).siblings('.card-content').find('p:nth-child(1)').text();
    var price = $(this).siblings('.card-content').find('p:nth-child(3)').text();
    var count = $(this).siblings('.card-action').find('.counter').text();
    var total = count*price;
    if(count!=0){
        test.push({name: name, price: price, count: count, total: total});
        //$(this).siblings('.card-action').remove();
        $(this).children('span').text('Basket Ready');
        $('.basket-ord').removeClass('hide');
        $(this).siblings('.card-action').children('.breadcrums').find('i').addClass('hide');
        $(this).removeClass('basket');
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
    var r_id = $('#restaurant_id').val();
    console.log(user_id);
    $.ajax({
        url: "basket.php",
        type: "POST",
        data: {
            user_id: user_id,
            orders: orders,
            total: total,
            r_id: r_id
        },
        success: function(response) {
            swal("Thank you!", "Your Order has been placed.", "success");
            },
        error : function(e) {
            swal("It's not you, it's us.", "Please try again after a while.", "error");
            }
        
    });
});


$('#login').modal();

$('#signup').modal();
        
$(".dropdown-trigger").dropdown({
    coverTrigger: false
}); 
</script>
</html>