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
    </style>
</head>
    <body>
        <!-- Navbar -->
        <div class="navbar-wrapper">
            <div class="navbar-static">
                <nav class="nav" style="background:transparent; -webkit-box-shadow:0 0px 0px 0 rgba(0, 0, 0, 0), 0 0px 0px 0px rgba(0, 0, 0, 0), 0 0px 0px 0 rgba(0, 0, 0, 0); 
                box-shadow:0 0px 0px 0 rgba(0, 0, 0, 0), 0 0px 0px 0px rgba(0, 0, 0, 0), 0 0px 0px 0 rgba(0, 0, 0, 0);">
                    <a href="#" class="brand-logo">Logo</a>
                    <ul id="nav-mobile" class="right hide-on-med-and-down">
                        <li><a href="#home">Home</a></li>
                        <li><a class='dropdown-trigger' href='#' data-target='products_list'>Gallery</a></li>
                            <ul id='products_list' class='dropdown-content grey'>
                                <li><a class="white-text dropdown-button2 d" href="#!" data-target='door'>Vegiterian Food</a></li>
                                <li><a class="white-text dropdown-button2 d" href="#!" data-target='furniture'>Non-Vegiterian Food</a></li>
                            </ul>
                            <!-- submenus -->
                            
                        <li><a href="#about_us">About Us</a></li>
                        <li><a href="#contact_us">Contact Us</a></li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- Carousel -->
        <div class="head carousel carousel-slider">
            <a class="carousel-item" href="#one!"><img class="img-carousel" src="images\image1.jpg"></a>
            <a class="carousel-item" href="#two!"><img class="img-carousel" src="images\image2.jpg"></a>
            <a class="carousel-item" href="#three!"><img class="img-carousel" src="images\image3.jpg"></a>
            <a class="carousel-item" href="#four!"><img class="img-carousel" src="images\image4.jpg"></a>
        </div>

        <!-- About us -->
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

        <!-- paralax -->
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

        <!-- products showcase -->
        <div class="section">
            <div class="container" style="width:70%; float:left; padding-right:70px; padding-left:100px;">
                <div class="carousel" style="height:300px;  margin-bottom:70px;">
                    <a class="carousel-item" href="#one!"><img src="images\02d4d344336067481a8445d1eb75437a.jpg"></a>
                    <a class="carousel-item" href="#two!"><img src="images\3908c6607770cc1d78e02ac57a76f4c9.jpg"></a>
                    <a class="carousel-item" href="#four!"><img src="images\786a00601a7b36ccf847f1e7a06de77b.jpg"></a>
                    <a class="carousel-item" href="#one!"><img src="images\02d4d344336067481a8445d1eb75437a.jpg"></a>
                    <a class="carousel-item" href="#two!"><img src="images\3908c6607770cc1d78e02ac57a76f4c9.jpg"></a>
                    <a class="carousel-item" href="#four!"><img src="images\786a00601a7b36ccf847f1e7a06de77b.jpg"></a>
                </div>
            </div>
            <div class="container" style="width:30%; float:right; margin-top:30px;">
                <h1><span style="float:left">Our</span><br><span style="float:left">New</span><br><span style="float:left">Products</span></h1>
            </div>
        </div>
        
        <!-- paralax 2 -->
        <div class="parallax-container valign-wrapper" style="width:100%;">
            <div class="section no-pad-bot">
                <div class="container">
                    <div class="row center">
                        <h5 class="header col s12 light">A modern responsive front-end framework based on Material Design</h5>
                    </div>
                </div>
            </div>
            <div class="parallax"><img src="images\3908c6607770cc1d78e02ac57a76f4c9.jpg" alt="Unsplashed background img 3"></div>
        </div>
    
        <!-- contact us -->
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
                        <button class="grey darken-3 btn waves-effect waves-light" type="submit" name="action">Submit
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
        <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script src="js/materialize.js"></script>
        <script src="js/init.js"></script>
        <script>
        $(".nav li").click(function() {
            if ($(".nav li").removeClass("active")) {
                $(this).removeClass("active");
            }
            $(this).addClass("active");
        });
        /* carousel initialization */
        $('.carousel.carousel-slider').carousel({
            fullWidth: true,
            indicators: true,
            duration: 200,
            autoplay:true    
        });
        $('.dropdown-trigger').dropdown({
            coverTrigger: false,
            constrainWidth: false
        });
        $('.dropdown-button2').dropdown({
            coverTrigger: false,
            inDuration: 300,
            outDuration: 225,
            constrain_width: false, // Does not change width of dropdown to that of the activator
            hover: true, // Activate on hover
            gutter: ($('.dropdown-content').width()*3)/2.5 + 5, // Spacing from edge
            alignment: 'right' // Displays dropdown with edge aligned to the left of button
            }
        );
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
        $(document).ready(function () {
            $(document).on("scroll", onScroll);
            
            //smoothscroll
            $('a[href^="#"]').on('click', function (e) {
                e.preventDefault();
                $(document).off("scroll");
                
                $('a').each(function () {
                    $(this).removeClass('active');
                })
                $(this).addClass('active');
              
                var target = this.hash,
                    menu = target;
                $target = $(target);
                $('html, body').stop().animate({
                    'scrollTop': $target.offset().top+2
                }, 500, 'swing', function () {
                    window.location.hash = target;
                    $(document).on("scroll", onScroll);
                });
            });
        });

        function onScroll(event){
            var scrollPos = $(document).scrollTop();
            $('#menu a').each(function () {
                var currLink = $(this);
                var refElement = $(currLink.attr("href"));
                if (refElement.position().top <= scrollPos && refElement.position().top + refElement.height() > scrollPos) {
                    $('#menu ul li a').removeClass("active");
                    currLink.addClass("active");
                }
                else{
                    currLink.removeClass("active");
                }
            });
        }
        </script>
    </body>
</html>