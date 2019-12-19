<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

<div >
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="images/image1.jpg" alt="Tandoori" style="max-height: 100vh; width: 100%;">
      </div>

      <div class="item">
        <img src="images/image2.jpg" alt="Pizza" style="max-height: 100vh; width: 100%;">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" style="margin-left: -80px;"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" style="margin-right: -80px;"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<div class="section" id="about_us">
    <div class="container" style="width:30%;">
        <h1><span style="float:right">Why</span><br><span style="float:right">Choose</span><br><span style="float:right">Us?</span></h1>
    </div>
    <div class="container" style="width:70%; float:right; margin-top: 80px; margin-bottom: 100px; padding-left:70px; padding-right:140px;">
        <p style="text-align:justify;">Rajesh engineering work is creative furniture hardware manufacturing company based in rajkot (gujarat).
                Founded in 1994 REW has worked on creating various designer products. 
                From the choice of steel, zamak or alluminium of the highest quality to the packaging of the finished handle, 
                the entire production is followed with the utmost care and dedication.
                Over the years we have established a range of products manufactured on inhouse facility to maintain quality at it's peak.</p>
    </div>
</div>

</body>
</html>
