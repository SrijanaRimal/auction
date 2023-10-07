<?php include('includes/header.php'); ?>


<div id="all">

    <div id="content">
        <div class="container">

            <div class="col-md-12">

                <ul class="breadcrumb">
                    <li><a href="#">Home</a>
                    </li>
                    <li>Search Results</li>
                </ul>

                <div class="box">
                    <h1>Items User Listed</h1>

                </div>


                <?php foreach ($userProducts as $product) : ?>
                    <div class="col-md-3 col-sm-4">
                        <div class="product">
                            <div class="flip-container">
                                <div class="flipper">
                                    <div class="front">

                                        <a href="detail.php?id=<?php echo $product->id;?>">
                                            <img src="<?php echo BASE_URI; ?>views/img/<?php echo $product->image ?>" alt="" class="img-responsive">
                                        </a>
                                    </div>
                                    <div class="back">

                                        <a href="detail.php?id=<?php echo $product->id;?>">
                                            <img src="<?php echo BASE_URI; ?>views/img/<?php echo $product->image ?>" alt="" class="img-responsive">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <a href="detail.php?id=<?php echo $product->id;?>" class="invisible">
                                <img src="img/product1.jpg" alt="" class="img-responsive">
                            </a>
                            <div class="text">

                                <h3><a href="detail.php?id=<?php echo $product->id;?>">

                                        <?php echo $product->name; ?>
                                    </a></h3>
                                <p align="center">Current Max Bid</p>
                                <p class="price">Rs :

                                    <?php echo $product->current_bid; ?>
                                </p>
                                <p class="buttons">

                                    <a href="detail.php?id=<?php echo $product->id;?>" class="btn btn-default">Show Listing</a>

                                </p>
                            </div>
                            <!-- /.text -->
                        </div>
                        <!-- /.product -->
                    </div>
                <?php endforeach; ?>


            </div> .
            <div class="box">
                <h1>Items User Bidding On</h1>

            </div>


            <?php foreach ($userBids as $bid) : ?>
                <div class="col-md-3 col-sm-4">
                    <div class="product">
                        <div class="flip-container">
                            <div class="flipper">
                                <div class="front">

                                    <a href="detail.php?id=<?php echo $product->id;?>">
                                        <img src="<?php echo BASE_URI; ?>views/img/<?php echo $bid->image ?>" alt="" class="img-responsive">
                                    </a>
                                </div>
                                <div class="back">

                                    <a href="detail.php?id=<?php echo $product->id;?>">
                                        <img rc="<?php echo BASE_URI; ?>views/img/<?php echo $bid->image ?>" alt="" class="img-responsive">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <a href="detail.php?id=<?php echo $product->id;?>" class="invisible">
                            <img rc="<?php echo BASE_URI; ?>views/img/<?php echo $bid->image ?>" alt="" class="img-responsive">
                        </a>
                        <div class="text">
                            <h3><a href="detail.php?id=<?php echo $product->id;?>">

                                    <?php echo $bid->name; ?>
                                </a></h3>
                            <p align="center">Your Last Bid</p>
                            <p class="price">Rs :
                                <?php echo $bid->bid_price; ?>

                            </p>
                            <p align="center">Current Max Bid</p>
                            <p class="price">Rs :

                                <?php echo $bid->current_bid; ?>
                            </p>
                            <p class="buttons">

                                <a href="detail.php?id=<?php echo $product->id;?>" class="btn btn-default">Show Listing</a>

                            </p>
                        </div>
                        <!-- /.text -->
                    </div>
                    <!-- /.product -->
                </div>
            <?php endforeach; ?>





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