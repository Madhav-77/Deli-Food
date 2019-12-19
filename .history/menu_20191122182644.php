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
                
  <a class="btn-floating btn-large waves-effect waves-light red"><i class="minus material-icons">remove</i></a>
                <i class="plus material-icons" >add</i>
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
                <i class="material-icons">remove</i>
                <i class="material-icons" >add</i>
                <span class="counter">0</span>
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
                <i class="material-icons">remove</i>
                <i class="material-icons" >add</i>
                <span class="counter">0</span>
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
                <i class="material-icons">remove</i>
                <i class="material-icons" >add</i>
                <span class="counter">0</span>
            </div>
        </div>
    </div>
</div>
</div>
</body>
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="js/materialize.js"></script>
<script src="js/init.js"></script>
<script>
$('.minus').on('click', function(){
    var cnt = 10;
    var counter =  $(this).next("span.counter").text(cnt);
    console.log(counter);
    
});
</script>
</html>