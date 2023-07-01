<?php include('includes/header.php'); ?>




<div class="navbar-collapse collapse" id="navigation">

    <ul class="nav navbar-nav navbar-left">


        <?Php foreach ($categories as $category) : ?>
            <li class="inactive"><a href="category.html">
                    <?php echo $category->name; ?>
                </a>
            </li>
        <?php endforeach; ?>


    </ul>

</div>
<!--/.nav-collapse -->

<div id="all">

    <div id="content">

        <div class="container">
            <div class="col-md-12">
                <div id="main-slider">
                    <div class="item">
                        <img src="img/main-slider1.jpg" alt="" class="img-responsive">
                    </div>
                    <div class="item">
                        <img class="img-responsive" src="img/main-slider2.jpg" alt="">
                    </div>
                    <div class="item">
                        <img class="img-responsive" src="img/main-slider3.jpg" alt="">
                    </div>

                </div>
                <!-- /#main-slider -->
            </div>
        </div>

        <!-- *** ADVANTAGES HOMEPAGE ***
 _________________________________________________________ -->
        <div id="advantages">

            <div class="container">
                <div class="same-height-row">
                    <div class="col-sm-4">
                        <div class="box same-height clickable">
                            <div class="icon"><i class="fa fa-heart"></i>
                            </div>

                            <h3><a href="#">We love our customers</a></h3>
                            <p>We are known to provide best possible service ever</p>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="box same-height clickable">
                            <div class="icon"><i class="fa fa-tags"></i>
                            </div>

                            <h3><a href="#">Best prices</a></h3>
                            <p>You can check that the height of the boxes adjust when longer text like this one is
                                used in one of them.</p>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="box same-height clickable">
                            <div class="icon"><i class="fa fa-thumbs-up"></i>
                            </div>

                            <h3><a href="#">100% satisfaction guaranteed</a></h3>
                            <p>Free returns on everything for 3 months.</p>
                        </div>
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container -->

        </div>
        <!-- /#advantages -->

        <!-- *** ADVANTAGES END *** -->




        <!-- *** HOT PRODUCT SLIDESHOW ***
 _________________________________________________________ -->

        <div id="hot">

            <div class="box">
                <div class="container">
                    <div class="col-md-12">
                        <h2>Latest Products</h2>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="product-slider">
                <?php foreach ($allProducts as $product): ?>
                    <div class="item">
                        <div class="product">
                            <div class="flip-container">
                                <div class="flipper">
                                    <div class="front">

                                        <a href="detail.html">
                                        <img src="<?php echo BASE_URI; ?>views/img/<?php echo $product->image?>" alt="" class="img-responsive">
    
                                        </a>
                                    </div>
                                    <div class="back">
                                        <a href="detail.html">
                                            <img src="img/banner.jpg" alt="" class="img-responsive">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <a href="detail.html" class="invisible">
                                <img src="img/product1.jpg" alt="" class="img-responsive">
                            </a>
                            <div class="text">
                                <h3><a href="detail.html">

                                <?php echo $product->name; ?>
                                    </a></h3>
                                <p class="price">Rs :

                                <?php echo $product->price?>
                                </p>

                            </div>
                            <!-- /.text -->
                        </div>
                        <!-- /.product -->
                    </div>
                    <?php endforeach;?>
                    
                </div>
            </div>
            <!-- /.container -->
        </div>



        <div id="hot">

            <div class="box">
                <div class="container">
                    <div class="col-md-12">
                        <h2>

                            Electronic
                        </h2>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="product-slider">
            <?php foreach($electronicProducts as $electronicProduct):?>
                    <div class="item">
                        <div class="product">
                            <div class="flip-container">
                                <div class="flipper">
                                    <div class="front">

                                        <a href="detail.html">
                                            <img src="<?php echo BASE_URI; ?>views/img/<?php echo $electronicProduct->image?>" alt="" class="img-responsive">
                                        </a>
                                    </div>
                                    <!-- <div class="back">

                                        <a href="detail.html">
                                            <img src="img/blog-avatar.jpg" alt="" class="img-responsive">
                                        </a>
                                    </div> -->
                                </div>
                            </div>
                            <a href="detail.html" class="invisible">
                                <img src="img/product1.jpg" alt="" class="img-responsive">
                            </a>
                            <div class="text">
                                <h3><a href="detail.html">

                                    <?php echo $electronicProduct->name; ?>
                                    </a></h3>
                                <p class="price">Rs :

                                <?php echo $electronicProduct->price;?>
                                </p>


                            </div>
                            <!-- /.text -->
                        </div>
                        <!-- /.product -->
                    </div>
              <?php endforeach;?>      


                </div>
            </div>


            <!-- /.container -->

        </div>

        <!-- *** GET INSPIRED ***
 _________________________________________________________ -->


        <!-- *** BLOG HOMEPAGE ***
 _________________________________________________________ -->

        <div class="box text-center" data-animate="fadeInUp">
            <div class="container">
                <div class="col-md-12">
                    <h3 class="text-uppercase">Grab products for lowest prices</h3>

                    <p class="lead">Start Bidding Keep on Winning
                    </p>
                </div>
            </div>
        </div>



        <!-- *** BLOG HOMEPAGE END *** -->


    </div>
    <!-- /#content -->

    <?php include('includes/footer.php'); ?>