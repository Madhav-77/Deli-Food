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
    <h4>Items List</h4>
    <a class="btn-floating btn-large waves-effect waves-light red"><i class="material-icons">add</i></a>
    <table class="striped">
        <thead>
          <tr>
              <th>#</th>
              <th>Item Name</th>
              <th>Item Price</th>
              <th>Action</th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td>Alvin</td>
            <td>Eclair</td>
            <td>$0.87</td>
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
            <td>Alan</td>
            <td>Jellybean</td>
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
            <td>$7.00</td>
            <td>
                <a class="breadcrums">
                    <i class="material-icons">create</i>
                </a>
                <a class="breadcrums delete">
                    <i class="material-icons">delete</i>
                </a>
            </td>
          </tr>
        </tbody>
      </table>
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

</script>
</html>