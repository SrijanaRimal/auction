<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="robots" content="all,follow">
    <meta name="googlebot" content="index,follow,snippet,archive">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Obaju e-commerce template">
    <meta name="author" content="Ondrej Svestka | ondrejsvestka.cz">
    <meta name="keywords" content="">

    <title>
        Obaju : e-commerce template
    </title>

    <meta name="keywords" content="">

    <link href='http://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100' rel='stylesheet' type='text/css'>

    <!-- styles -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/owl.theme.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">

    <!-- theme stylesheet -->
    <link href="css/style.default.css" rel="stylesheet" id="theme-stylesheet">

    <!-- your stylesheet with modifications -->
    <link href="css/custom.css" rel="stylesheet">

    <script src="js/respond.min.js"></script>

    <link rel="shortcut icon" href="favicon.png">







</head>

<body onload="countdown(year,month,day,hour,minute)">
    <!-- *** TOPBAR ***
         _________________________________________________________ -->
    <div id="top">
        <div class="container">
            <div class="col-md-6 offer" data-animate="fadeInDown">

            </div>
            <div class="col-md-6" data-animate="fadeInDown">
                <ul class="menu">
                    <li><a href="register.php">Login</a></li>
                    <li><a href="register.php">Register</a></li>
                </ul>
            </div>
        </div>

    </div>

    <!-- *** TOP BAR END *** -->

    <!-- *** NAVBAR ***
         _________________________________________________________ -->

    <div class="navbar navbar-default yamm" role="navigation" id="navbar">
        <div class="container">
            <div class="navbar-header">

                <a class="navbar-brand home" href="index.php" data-animate-hover="bounce">
                    <img height="50px" src="img/logo.png" alt="Obaju logo" class="hidden-xs">
                    <img src="img/logo-small.png" alt="Obaju logo" class="visible-xs"><span class="sr-only">Obaju - go
                        to
                        homepage</span>
                </a>
                <div class="navbar-buttons">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
                        <span class="sr-only">Toggle navigation</span>
                        <i class="fa fa-align-justify"></i>
                    </button>
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#search">
                        <span class="sr-only">Toggle search</span>
                        <i class="fa fa-search"></i>
                    </button>





                </div>
            </div>
            <!--/.navbar-header -->

            <div class="navbar-collapse collapse" id="navigation">

                <ul class="nav navbar-nav navbar-left">



                    <li class="inactive"><a href="category.php?CategoryID=1">
                            Lorem Ipsum
                        </a>
                    </li>

                </ul>

            </div>
            <!--/.nav-collapse -->

            <div class="navbar-buttons">


                <div class="navbar-collapse collapse right" id="basket-overview">
                    <a href="addlisting.php" class="btn btn-primary navbar-btn"><span class="hidden-sm">Add
                            Listing</span></a>
                </div>
                <!--/.nav-collapse -->

                <div class="navbar-collapse collapse right" id="search-not-mobile">
                    <button type="button" class="btn navbar-btn btn-primary" data-toggle="collapse"
                        data-target="#search">
                        <span class="sr-only">Toggle search</span>
                        <i class="fa fa-search"></i>
                    </button>
                </div>

            </div>

            <div class="collapse clearfix" id="search">

                <form class="navbar-form" role="search" action="results.php" method="POST">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search" name="keyword">
                        <span class="input-group-btn">

                            <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>

                        </span>
                    </div>
                </form>

            </div>
            <!--/.nav-collapse -->

        </div>
        <!-- /.container -->
    </div>
    <!-- /#navbar -->

    <!-- *** NAVBAR END *** -->

    <div id="all">

        <div id="content">
            <div class="container">

                <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li><a href="#">Home</a>
                        </li>


                        <li>Lorem Ipsum</li>
                    </ul>

                </div>

                <div class="col-md-3">
                    <!-- *** MENUS AND FILTERS ***
 _________________________________________________________ -->
                    <div class="panel panel-default sidebar-menu">

                        <div class="panel-heading">
                            <h3 class="panel-title">Categories</h3>
                        </div>

                        <div class="panel-body">
                            <ul class="nav nav-pills nav-stacked category-menu">


                                <li>

                                    <a href="category.html">

                                        Lorem Ipsum
                                    </a>

                                </li>




                            </ul>

                        </div>
                    </div>




                    <!-- *** MENUS AND FILTERS END *** -->



                    <div class="banner">
                        <a href="#">
                            <img src="img/banner.jpg" alt="sales 2014" class="img-responsive">
                        </a>
                    </div>
                </div>

                <div class="col-md-9">

                    <div class="row" id="productMain">
                        <div class="col-sm-6">
                            <div id="mainImage">

                                <img src="img/cl7.jpg" alt="" class="img-responsive">
                            </div>

                            <div class="ribbon sale">
                                <div class="theribbon">SALE</div>
                                <div class="ribbon-background"></div>
                            </div>
                            <!-- /.ribbon -->

                            <div class="ribbon new">
                                <div class="theribbon">NEW</div>
                                <div class="ribbon-background"></div>
                            </div>
                            <!-- /.ribbon -->

                        </div>
                        <div class="col-sm-6">
                            <div class="box">
                                <h1 class="text-center">

                                    Lorem Ipsum
                                </h1>
                                <p class="goToDescription"><a href="#details" class="scroll-to">Scroll to product
                                        details, material & care and sizing</a>

                                </p>

                                <p class="price">Current Bid : Rs

                                    999
                                </p>

                                <form action="" method="post" align="center">

                                    <input type="text" name="bidValue" /><br><br>


                                    <p align="center">Enter a value greater than Rs

                                        99
                                    </p>

                                    <input class="btn btn-primary" type="submit" align="center"
                                        value="Bid Now"><br /><br>
                                </form>

                                <div style="color:red" align="center">


                                </div>

                                <br>

                                <script type="text/javascript">


                                    var current = "Auction Ended !";    //-->enter what you want the script to display when the target date and time are reached, limit to 20 characters

                                    var year = 2024;    //-->Enter the count down target date YEAR

                                    var month = 6;      //-->Enter the count down target date MONTH

                                    var day = 29;       //-->Enter the count down target date DAY

                                    var hour = 11;      //-->Enter the count down target date HOUR (24 hour clock)

                                    var minute = 59;    //-->Enter the count down target date MINUTE
                                    var tz = -5;        //-->Offset for your timezone 

                                </script>


                                <table id="table" border="0">
                                    <tr>
                                        <td align="center" colspan="6">
                                            <div class="numbers" id="count2" style="padding: 5px 0 0 0; "></div>
                                        </td>
                                    </tr>
                                    <tr id="spacer1">
                                        <td align="center">
                                            <div class="numbers"></div>
                                        </td>
                                        <td align="center">
                                            <div class="numbers" id="dday"></div>
                                        </td>
                                        <td align="center">
                                            <div class="numbers" id="dhour"></div>
                                        </td>
                                        <td align="center">
                                            <div class="numbers" id="dmin"></div>
                                        </td>
                                        <td align="center">
                                            <div class="numbers" id="dsec"></div>
                                        </td>
                                        <td align="center">
                                            <div class="numbers"></div>
                                        </td>
                                    </tr>
                                    <tr id="spacer2">
                                        <td align="center">
                                            <div class="title"></div>
                                        </td>
                                        <td align="center">
                                            <div class="title" id="days">Days</div>
                                        </td>
                                        <td align="center">
                                            <div class="title" id="hours">Hours</div>
                                        </td>
                                        <td align="center">
                                            <div class="title" id="minutes">Minutes</div>
                                        </td>
                                        <td align="center">
                                            <div class="title" id="seconds">Seconds</div>
                                        </td>
                                        <td align="center">
                                            <div class="title"></div>
                                        </td>
                                    </tr>
                                </table>


                                <br>




                                <p class="text-center buttons">
                                    <a href="" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Buy now for
                                        Rs. 999
                                    </a>

                                </p>


                            </div>


                        </div>

                    </div>


                    <div class="box" id="details">

                        <p>

                        <h4>Product details</h4>
                        <p>

                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Impedit corporis necessitatibus
                            molestiae soluta, dolorum fuga? Perferendis placeat doloribus eius veritatis!
                        </p>


                        <hr>

                    </div>






                    <div class="row same-height-row">
                        <div class="col-md-3 col-sm-6">
                            <div class="box same-height">
                                <h3>You may also like these products</h3>
                            </div>
                        </div>


                        <div class="col-md-3 col-sm-6">
                            <div class="product same-height">
                                <div class="flip-container">
                                    <div class="flipper">
                                        <div class="front">

                                            <a href="detail.html">
                                                <img src="img/detailsquare.jpg" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                        <div class="back">
                                            <a href="detail.html">
                                                <img src="img/wt2.jpg" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <a href="detail.html" class="invisible">
                                    <img src="img/product2.jpg" alt="" class="img-responsive">
                                </a>
                                <div class="text">
                                    <h3>

                                        Lorem Ipsum
                                    </h3>
                                    <p class="price">Rs :

                                        999
                                    </p>
                                </div>
                            </div>
                            <!-- /.product -->
                        </div>





                    </div>



                </div>
                <!-- /.col-md-9 -->
            </div>
            <!-- /.container -->
        </div>
        <!-- /#content -->


        <!-- *** FOOTER ***
             _________________________________________________________ -->
        <div id="footer" data-animate="fadeInUp">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <h4>Pages</h4>

                        <ul>
                            <li><a href="text.html">About us</a>
                            </li>
                            <li><a href="text.html">Terms and conditions</a>
                            </li>
                            <li><a href="faq.html">FAQ</a>
                            </li>
                            <li><a href="contact.html">Contact us</a>
                            </li>
                        </ul>

                        <hr>



                        <hr class="hidden-md hidden-lg hidden-sm">

                    </div>
                    <!-- /.col-md-3 -->

                    <div class="col-md-3 col-sm-6">

                        <h4>Contact Us</h4>

                        <h5>+947772336598</h5>
                        <h5>+947772645468</h5>



                        <hr class="hidden-md hidden-lg">

                    </div>
                    <!-- /.col-md-3 -->

                    <div class="col-md-3 col-sm-6">

                        <h4>Where to find us</h4>

                        <p><strong>Bid Now</strong>
                            <br>13/25 New Avenue
                            <br>Peradeniya
                            <br>kandy
                            <br>Sri Lanka
                        </p>

                        <a href="contact.php">Go to contact page</a>

                        <hr class="hidden-md hidden-lg">

                    </div>
                    <!-- /.col-md-3 -->



                    <div class="col-md-3 col-sm-6">

                        <h4>User section</h4>

                        <ul>
                            <li><a href="#" data-toggle="modal" data-target="#login-modal">Login</a>
                            </li>
                            <li><a href="register.html">Regiter</a>
                            </li>
                        </ul>

                    </div>
                    <!-- /input-group -->
                    </form>

                    <hr>


                </div>
                <!-- /.col-md-3 -->

            </div>
            <!-- /.row -->

        </div>
        <!-- /.container -->
    </div>
    <!-- /#footer -->

    <!-- *** FOOTER END *** -->



    <!-- *** SCRIPTS TO INCLUDE ***
 _________________________________________________________ -->
    <script src="js/jquery-1.11.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.cookie.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/modernizr.js"></script>
    <script src="js/bootstrap-hover-dropdown.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/front.js"></script>






</body>

</html>