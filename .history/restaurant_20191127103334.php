<?php include('server.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <title>Restaurants</title>

    <!--title bar icons-->
    <link href="images/image1.jpg" rel="icon">

    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
    <style>
    .card { 
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
        <h4>Resaturants</h4>
        <div class="row">
            <?php
                /* showing user restaurants according to his preference */
                if($id == 1){
                    $user = $_SESSION['username'];
                    $pref_query = mysqli_query($db, "SELECT preference from user_master WHERE u_name = '$user'");
                    $preference = mysqli_fetch_assoc($pref_query);
                    $food_type = $preference['preference'];
                    if($food_type != 'Both'){
                        $sql = mysqli_query($db, "SELECT * FROM user_master WHERE food_type = '$food_type' AND user_type = 'Restaurant'");
                    }else{
                        $sql = mysqli_query($db, "SELECT * FROM user_master WHERE user_type = 'Restaurant'");
                    }
                }else{
                    $sql = mysqli_query($db, "SELECT * FROM user_master WHERE user_type = 'Restaurant'");
                }
                foreach($sql as $data){ 
            ?>
            <div class="col s6 m3">
                <div class="card">
                    <div class="card-image">
                        <img src="images/image1.jpg">
                    </div>
                    <div class="card-content center">
                        <p id="<?= $data['user_id'];?>" class="card-title"><?= $data['u_name'];?></p>
                        <div class="card-action">
                            <p style="float:left;"><?= $data['preference'];?></p>
                            <p style="float:right;"><?= $data['u_city'];?></p>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
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
<script>

/* opening restaurants food items on click event */
$('.card').on('click', function(e){
    e.preventDefault();
    var user_id = $(this).find('.card-content').children('p').attr('id');
    $.ajax({
        url: "menu.php?restaurant_id="+user_id,
        type: "GET",
        data: { user_id: user_id },
        success: function(response) {
            console.log(user_id);
            window.open('menu.php?user_id='+user_id);
        }
    });
});
        
$(".dropdown-trigger").dropdown({
    coverTrigger: false
}); 
</script>
</html>