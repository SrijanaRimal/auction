<?php include('includes/header.php'); ?>

<div id="all">

    <div id="content">
        <div class="container">

            <div class="col-md-12">
                <ul class="breadcrumb">
                    <li><a href="<?php echo BASE_URI; ?>">Home</a>
                    </li>

                    <li><?php echo $category->name; ?></li>
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

                            <?php foreach ($categories as $category) : ?>
                                <li>
                                    <a href="<?php echo BASE_URI; ?>category.php?id=<?php echo $category->id; ?>"><?php echo $category->name ?></a>
                                </li>

                            <?php endforeach; ?>


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
                <div class="box">

                    <h1><?php echo ucfirst($category->name); ?></h1>
                    <p>Bid on a wide range of items</p>
                </div>

                <div class="box info-bar">
                    <div class="row">
                        <div class="col-sm-12 col-md-4 products-showing">
                            Showing <strong>12</strong> of <strong>25</strong> products
                        </div>

                        <div class="col-sm-12 col-md-8  products-number-sort">
                            <div class="row">
                                <form class="form-inline">
                                    <div class="col-md-6 col-sm-6">
                                        <div class="products-number">
                                            <strong>Show</strong> <a href="#" class="btn btn-default btn-sm btn-primary">12</a> <a href="#" class="btn btn-default btn-sm">24</a> <a href="#" class="btn btn-default btn-sm">All</a> products
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <div class="products-sort-by">
                                            <strong>Sort by</strong>
                                            <select name="sort-by" class="form-control">
                                                <option>Price</option>
                                                <option>Name</option>
                                                <option>Sales first</option>
                                            </select>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row products">

                    <?php foreach ($categoryProducts as $product) : ?>

                        <div class="col-md-4 col-sm-6">
                            <div class="product">
                                <div class="flip-container">
                                    <div class="flipper">
                                        <div class="front">

                                            <a href="<?php echo BASE_URI; ?>detail.php?id=<?php echo $product->id;?>">
                                                <img src="<?php echo BASE_URI; ?>views/img/<?php echo $product->image; ?>" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                        <div class="back">

                                            <a href="<?php echo BASE_URI; ?>detail.php?id=<?php echo $product->id;?>">
                                                <img src="<?php echo BASE_URI; ?>views/img/<?php echo $product->image; ?>" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <a href="<?php echo BASE_URI; ?>detail.php?id=<?php echo $product->id;?>" class=" invisible">
                                    <img src="<?php echo BASE_URI; ?>views/img/<?php echo $product->image; ?>" alt="" class="img-responsive">
                                </a>
                                <div class="text">
                                    <h3><a href="<?php echo BASE_URI; ?>detail.php?id=<?php echo $product->id;?>"><?php echo $product->name; ?></a></h3>
                                    <p class="price">Rs : <?php echo $product->price; ?></p>
                                    <p class="buttons">
                                        <!-- <a href="<?php //echo BASE_URI; ?>detail.php?id=<?php //echo $product->id;?>" class="btn btn-default">View detail</a> -->
                                        <a href="<?php echo BASE_URI; ?>detail.php?id=<?php echo $product->id;?>" class="btn btn-primary"><i class="fa fa-shopping-cart"></i>Bid Now</a>
                                    </p>
                                </div>
                                <!-- /.text -->
                            </div>
                            <!-- /.product -->
                        </div>

                    <?php endforeach; ?>


                </div>
                <!-- /.products -->

                <div class="pages">

                    <p class="loadMore">
                        <a href="#" class="btn btn-primary btn-lg"><i class="fa fa-chevron-down"></i> Load more</a>
                    </p>

                    <ul class="pagination">
                        <li><a href="#">&laquo;</a>
                        </li>
                        <li class="active"><a href="#">1</a>
                        </li>
                        <li><a href="#">2</a>
                        </li>
                        <li><a href="#">3</a>
                        </li>
                        <li><a href="#">4</a>
                        </li>
                        <li><a href="#">5</a>
                        </li>
                        <li><a href="#">&raquo;</a>
                        </li>
                    </ul>
                </div>


            </div>
            <!-- /.col-md-9 -->


        </div>
        <!-- /.container -->
    </div>
    <!-- /#content -->

    <?php include('includes/footer.php'); ?>