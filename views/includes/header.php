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
        Bid Now : Auction Marketplace
    </title>

    <meta name="keywords" content="">

    <link href='http://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100' rel='stylesheet' type='text/css'>

    <!-- styles -->
    <link href="<?php echo BASE_URI; ?>views/css/font-awesome.css" rel="stylesheet">
    <link href="<?php echo BASE_URI; ?>views/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo BASE_URI; ?>views/css/animate.min.css" rel="stylesheet">
    <link href="<?php echo BASE_URI; ?>views/css/owl.carousel.css" rel="stylesheet">
    <link href="<?php echo BASE_URI; ?>views/css/owl.theme.css" rel="stylesheet">

    <!-- theme stylesheet -->
    <link href="<?php echo BASE_URI; ?>views/css/style.default.css" rel="stylesheet" id="theme-stylesheet">

    <!-- your stylesheet with modifications -->
    <link href="<?php echo BASE_URI; ?>views/css/custom.css" rel="stylesheet">

    <script src="<?php echo BASE_URI; ?>views/js/respond.min.js"></script>

    <link rel="shortcut icon" href="favicon.png">



</head>

<body>

    <!-- *** TOPBAR ***
         _________________________________________________________ -->
    <div id="top">
        <div class="container">
            <div class="col-md-6 offer" data-animate="fadeInDown">

            </div>
            <div class="col-md-6" data-animate="fadeInDown">
                <ul class="menu">
                    <?php if(isLoggedIn()):?>
                        <li><a href="register.php?logout">Logout</a></li>
                        <?php else:?>
                            <li><a href="register.php">Login</a></li>
                            <li><a href="register.php">Register</a></li>
                    <?php endif;?>
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
                    <img height="50px" src="<?php echo BASE_URI; ?>views/img/logo.png" alt="Obaju logo" class="hidden-xs">
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

                    <?php foreach ($categories as $cateory) : ?>
                        <li class="inactive"><a href="<?php echo BASE_URI; ?>category.php?id=<?php echo $cateory->id; ?>">
                                <?php echo $cateory->name; ?>
                            </a>
                        </li>
                    <?php endforeach; ?>


                </ul>

            </div>
            <!--/.nav-collapse -->

            <div class="navbar-buttons">
                <?php if(isLoggedIn()):?>
                <div class="navbar-collapse collapse right ms-2" style="margin-left: 25px;" id="basket-overview">
                    <a href="userItems.php" class="btn btn-primary navbar-btn"><span class="hidden-sm">Your products / Bids</span></a>
                </div>
                <?php endif;?>
                
                <div class="navbar-collapse collapse right" id="basket-overview">
                    <a href="addlisting.php" class="btn btn-primary navbar-btn"><span class="hidden-sm">Add
                            Listing</span></a>
                </div>
                <!--/.nav-collapse -->

                <div class="navbar-collapse collapse right" id="search-not-mobile">
                    <button type="button" class="btn navbar-btn btn-primary" data-toggle="collapse" data-target="#search">
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

                            <button type="submit" name="searchBtn" class="btn btn-primary"><i class="fa fa-search"></i></button>

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
    <?php displayMessage();?>