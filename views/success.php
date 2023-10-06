<?php include('includes/header.php') ;?>

<div id="all">

    <div id="content">
        <div class="container">

            <div class="col-md-12">
                <ul class="breadcrumb">
                    <li><a href="#">Home</a>
                    </li>
                    <li>Text page</li>
                </ul>
            </div>

            <div class="col-md-3">
                <!-- *** PAGES MENU ***
 _________________________________________________________ -->
                <div class="panel panel-default sidebar-menu">

                    <div class="panel-heading">
                        <h3 class="panel-title">Quick Links</h3>
                    </div>

                    <div class="panel-body">
                        <ul class="nav nav-pills nav-stacked">
                            <li>
                                <a href="index.php">Home</a>
                            </li>
                            <li>
                                <a href="contact.html">Contact Us</a>
                            </li>
                            <li>
                                <a href="faq.html">FAQ</a>
                            </li>

                        </ul>

                    </div>
                </div>

                <!-- *** PAGES MENU END *** -->


                <div class="banner">
                    <a href="#">
                        <img src="img/banner.jpg" alt="sales 2014" class="img-responsive">
                    </a>
                </div>
            </div>

            <div class="col-md-9">

                <div class="box" id="text-page">


                    <h1>Your Lising was submitted successfully!</h1>



                    <h2>
                        <?php echo $singleProduct->name ;?>

                    </h2>



                    <blockquote>
                        <p>

                            <?php echo $singleProduct->discription ;?>
                        </p>
                    </blockquote>



                    <hr>

                    <!-- <h2>lorem ipsum</h2> -->

                    <div class="row">

                        <div class="col-md-4">
                            <p class="text-center">
                                <img src="<?php echo BASE_URI;?>views/img/<?php echo $singleProduct->image?>"
                                    class="img-thumbnail  img-responsive" alt="">
                            </p>
                            <p class="text-center">

                                price = <?php echo $singleProduct->price ;?>
                            </p>
                        </div>

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


</div>
<!-- /#all -->




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