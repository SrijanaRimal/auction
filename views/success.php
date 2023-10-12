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

                                price = <?php echo $singleProduct->current_bid ;?>
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

    <?php include('includes/footer.php'); ?>