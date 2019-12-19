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
<div class="container" style="margin-top: 70px;">
<div class="row">
    <div class="col s6 m3">
        <div class="card">
            <div class="card-image">
                <img src="images/sample-1.jpg">
                <span class="card-title">Card Title</span>
            </div>
            <div class="card-content">
                <p>I am convenient because I require little markup to use effectively.</p>
            </div>
            <div class="card-action">
                <a class="breadcrums">
                    <i class="minus material-icons">remove</i>
                </a>
                <a class="breadcrums">
                    <i class="plus material-icons" >add</i>
                </a>
                <span class="counter">2</span>
            </div>
      </div>
    </div>
    <div class="col s6 m3">
        <div class="card">
            <div class="card-image">
                <img src="images/sample-1.jpg">
                <span class="card-title">Card Title</span>
            </div>
            <div class="card-content">
                <p>I am convenient because I require little markup to use effectively.</p>
            </div>
            <div class="card-action">
                <a class="breadcrums">
                    <i class="minus material-icons">remove</i>
                </a>
                <a class="breadcrums">
                    <i class="plus material-icons" >add</i>
                </a>
                <span class="counter">2</span>
            </div>
        </div>
    </div>
    <div class="col s6 m3">
        <div class="card">
            <div class="card-image">
                <img src="images/sample-1.jpg">
                <span class="card-title">Card Title</span>
            </div>
            <div class="card-content">
                <p>I am convenient because I require little markup to use effectively.</p>
            </div>
            <div class="card-action">
                <a class="breadcrums">
                    <i class="minus material-icons">remove</i>
                </a>
                <a class="breadcrums">
                    <i class="plus material-icons" >add</i>
                </a>
                <span class="counter">2</span>
            </div>
        </div>
    </div>
    <div class="col s6 m3">
        <div class="card">
            <div class="card-image">
                <img src="images/sample-1.jpg">
                <span class="card-title">Card Title</span>
            </div>
            <div class="card-content">
                <p>I am convenient because I require little markup to use effectively.</p>
            </div>
            <div class="card-action">
                <a class="breadcrums">
                    <i class="minus material-icons">remove</i>
                </a>
                <a class="breadcrums">
                    <i class="plus material-icons" >add</i>
                </a>
                <span class="counter">2</span>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col s6 m3">
            <button id="order" class="btn waves-effect waves-light modal-trigger" type="submit" name="order">Order Food
                <i class="material-icons right">send</i>
            </button>
        </div>
    </div>
</div>
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
    var counter = $n.text();
    counter++;
    $n.text(counter);
});

$('#order').on('click', function(){
            $('#login').modal();
        });

</script>
</html>