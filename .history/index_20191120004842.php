<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<style>
    #sidebar-wrapper{
  z-index:1;
  position: absolute;
  width:0;
  height:100%;
  overflow-y:hidden;
  background: black;
  opacity:0.9;
	transition:all .5s;
	display:flex;
	align-items:center;
}

/* Main Content */
#page-content-wrapper{
  width: 100%;	
  position: absolute;
  padding:15px;
	transition:all .5s;
}

#menu-toggle{
	transition:all .3s;
	font-size:2em;
}
/* Change the width of the sidebar to display it*/
#wrapper.menuDisplayed #sidebar-wrapper{
  width:250px;
}

#wrapper.menuDisplayed #page-content-wrapper{
  padding-left:250px;
}

/* Sidebar styling */
.sidebar-nav{
  padding:0;
  list-style:none; 
	transition:all .5s;
	width:100%;
	text-align:right;
}

.sidebar-nav li{
  line-height:40px;  
	width:100%;
	transition:all .3s;
	padding:10px;
}

.sidebar-nav li a {
  display:block;
  text-decoration:none;
  color:#ddd;
}

.sidebar-nav li:hover{
  background:#7f7f7f;
}
.fancy-fonts {
  font: 400 20px/1.5 'Pacifico', Helvetica, sans-serif;
  color: #2b2b2b;
  text-shadow: 3px 3px 0px rgba(0,0,0,0.1), 7px 7px 0px rgba(0,0,0,0.05);
}
</style>
</head>
<body>
<div class="container">
  <div id="wrapper">
    <!-- Sidebar -->
    <div id="sidebar-wrapper">
      <ul class="sidebar-nav fancy-fonts">
        <li><a href="#">Home</a></li>
        <li><a href="#">Menu</a></li>
        <li><a href="#">About Us</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
    </div>
    
    <!-- Page Content -->
    <!-- <div id="page-content-wrapper">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <a style="color: black; padding: 0px;" href="#" class="btn" id="menu-toggle"><span class="glyphicon glyphicon-menu-hamburger"></span></a>
            <h1 class="text-center">Bootstrap Sidebar</h1>
            <h2 class="small text-center">Second Header</h2>
            <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium perferendis maiores velit ad id delectus nisi eligendi doloremque officia necessitatibus, repellendus alias omnis, natus nam voluptates dolor vel minus ab?</p>
          </div>
        </div>
      </div>
    </div> -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="images/image1.jpg" alt="Los Angeles" style="width:100%;">
      </div>

      <div class="item">
        <img src="images/image3.jpg" alt="Chicago" style="width:100%;">
      </div>
    
      <div class="item">
        <img src="images/image2.jpg" alt="New york" style="width:100%;">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  </div>
  </div>
</body>
<script>
$(document).ready(function(){
  $("#menu-toggle").click(function(e){
    e.preventDefault();
    $("#wrapper").toggleClass("menuDisplayed");
  });
});
</script>
</html>

