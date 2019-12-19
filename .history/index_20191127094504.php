<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <title>Welcome to Deli-Food</title>

    <!--title bar icons-->
    <link href="images/image1.jpg" rel="icon">
    <link href="images/image1.jpg" rel="apple-touch-icon">
    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
    <style>
        .img-carousel, .head{
            height: 650px !important;
        }
        .navbar-wrapper {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            z-index: 10;
        }
        .nav{
            padding-left: 15px;
            padding-right: 15px;
        }
        .dropdown-content{
        overflow: visible !important;
        }
        .input-field input[type=text]:focus{
            border-bottom: 1px solid #424242 !important;
            box-shadow: 0 1px 0 0 #424242 !important;
        }
        label.active{
            color: #424242 !important;
        }
        .center-text-img {
            position: relative;
            text-align: center;
            color: white;
        }
        .centered {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
        h2 {
            font: 400 100px/1.5 'Pacifico', Helvetica, sans-serif;
            color: #2b2b2b;
            text-shadow: 3px 3px 0px rgba(0,0,0,0.1), 7px 7px 0px rgba(0,0,0,0.05);
            font-size: 72px;;
        }

    </style>
</head>
    <body>
        <div class="fixed-action-btn">
            <a class="btn-floating btn-large red">
                <i class="large material-icons">menu</i>
            </a>
            <ul>
                <li><a href="restaurant.php" class="btn-floating yellow darken-1"><i class="material-icons">library_books</i></a></li>
                <li><a href="#login" class="btn-floating red modal-trigger"><i class="material-icons">supervisor_account</i></a></li>
                <li><a class="btn-floating green"><i class="material-icons">info_outline</i></a></li>
                <li><a class="btn-floating blue"><i class="material-icons">call</i></a></li>
            </ul>
        </div>
        <!-- Login modal -->
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
        <!-- ### -->
        <!-- Signup modal -->
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
        <!-- ### -->
        <!-- image carousel slideshow -->
        <div class="head carousel carousel-slider">
            <a class="carousel-item center-text-img" href="#one!">
                <img class="img-carousel" src="images\image1.jpg">
                <div class="centered">
                    <h2 style="font-size: 102px;" class="white-text">Centered</h2>
                </div>
            </a>
            <a class="carousel-item" href="#two!">
                <img class="img-carousel" src="images\image2.jpg">
                <div class="centered">
                    <h2 style="font-size: 102px;" class="white-text">Centered</h2>
                </div>
            </a>
        </div>
        
        <div class="section" id="about_us">
            <div class="container" style="width:30%; float:left; margin-top:20px; margin-bottom:50px;">
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
        <div class="parallax-container valign-wrapper" style="width:100%;">
            <div class="section no-pad-bot">
                <div class="container">
                    <div class="row center">
                        <h5 class="header col s12 light">A modern responsive front-end framework based on Material Design</h5>
                    </div>
                </div>
            </div>
            <div class="parallax"><img src="images\image4.jpg" alt="Unsplashed background img 3"></div>
        </div>
        <div class="section">
            <div class="container" style="width:70%; float:left; padding-right:70px; padding-left:100px;">
                <div class="carousel" style="height:300px;  margin-bottom:70px;">
                    <a class="carousel-item" href="#one!"><img src="images\image4.jpg"></a>
                    <a class="carousel-item" href="#two!"><img src="images\image5.jpg"></a>
                </div>
            </div>
            <div class="container" style="width:30%; float:right; margin-top:30px;">
                <h1><span style="float:left">Our</span><br><span style="float:left">New</span><br><span style="float:left">Products</span></h1>
            </div>
        </div>
        <div class="parallax-container valign-wrapper" style="width:100%;">
            <div class="section no-pad-bot">
                <div class="container">
                    <div class="row center">
                        <h5 class="header col s12 light">A modern responsive front-end framework based on Material Design</h5>
                    </div>
                </div>
            </div>
            <div class="parallax"><img src="images\image5.jpg" alt="Unsplashed background img 3"></div>
        </div>
        <div class="section row" id="contact_us">
            <div class="container col s6" style="width:30%; float:left; margin-top:30px; margin-bottom:50px;">
                <h1><span style="float:right">Get</span><br><span style="float:right">In</span><br><span style="float:right">Touch</span></h1>
            </div>
            <div class="container col s6" style="width:70%; margin-top: 60px; margin-bottom: 100px; padding-left:70px; padding-right:140px;">
                <div class="row">
                    <form class="">
                        <div class="input-field col s12">
                            <i class="material-icons prefix grey-text text-darken-3">account_circle</i>
                            <input id="icon_prefix" type="text" class="validate">
                            <label for="icon_prefix">First Name</label>
                        </div>
                        <div class="input-field col s12">
                            <i class="material-icons prefix grey-text text-darken-3">phone</i>
                            <input id="icon_telephone" type="text" class="validate">
                            <label for="icon_telephone">Telephone</label>
                        </div>
                        <div class="input-field col s12">
                            <i class="material-icons prefix grey-text text-darken-3">email</i>
                            <input id="icon_telephone" type="text" class="validate">
                            <label for="icon_telephone">Email</label>
                        </div>
                        <button class="grey darken-3 btn waves-effect waves-light" type="submit" id="mail_send">Submit
                            <i class="material-icons right">send</i>
                        </button>
                    </form>
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
                                Flat no. 34/3, Wing A,
                                Gopinath Nagar, 
                                DP Road, Kothrud 
                                Pune - 411029 
                                (Maharashtra - India)
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
                    Made by <a class="brown-text text-lighten-3" href="https://www.linkedin.com/in/madhavpt/">Materialize</a>
                </div>
            </div>
        </footer>
        <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script src="js/materialize.js"></script>
        <script src="js/init.js"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script>
        /* carousel initialization */
        $('.carousel.carousel-slider').carousel({
            fullWidth: true,
            indicators: true,
            duration: 200,
            autoplay:true    
        });
        /* parallax initialization */
        $(document).ready(function(){
            $('.parallax').parallax();
        });
        $(document).ready(function(){
            $('.carousel').carousel({
                numVisible: 5,
                shift: 10,
                padding: 10,
                noWrap: false,
                dist: -100
            });
        });
        
        /* Fixed button initialization */
        $(document).ready(function(){
            $('.fixed-action-btn').floatingActionButton();
        });
        
        /* Login modal initialization */
        $(document).ready(function(){
            $('#login').modal();
        });

        /* Signup modal initialization */
        $(document).ready(function(){
            $('#signup').modal();
        });
        
        $('#mail_send').on('click', function(){
            swal("Error!", "Sorry for the inconvenience caused!","error");
        });
        </script>
    </body>
</html>