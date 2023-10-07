<?php include('includes/header.php') ;?>





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
                        <h1>Search Results for '
                            <?php echo $searchQuery;?>
                        </h1>

                    </div>
                    <?php if(empty($products)):?>
                    <h2>No results found</h2>
                    <?php endif;?>
                    <?php foreach($products as $product):?>
                    <div class="col-md-3 col-sm-6">
                        <div class="product same-height">
                            <div class="flip-container">
                                <div class="flipper">
                                    <div class="front">

                                        <a href="detail.php?id=<?php echo $product->id?>">
                                            <img src="<?php echo BASE_URI;?>views/img/<?php echo $product->image?>" alt="" class="img-responsive">
                                        </a>
                                    </div>
                                    <div class="back">

                                        <a href="detail.php?id=<?php echo $product->id?>">
                                            <img src="<?php echo BASE_URI;?>views/img/<?php echo $product->image?>" alt="" class="img-responsive">
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <a href="detail.php?id=<?php echo $product->id?>" class="invisible">
                                <img src="<?php echo BASE_URI;?>views/img/<?php echo $product->image?>" alt="" class="img-responsive">
                            </a>
                            <div class="text">
                                <h3>

                                    <?php echo $product->name;?>
                                </h3>
                                <p class="price">Current Bid:
                                    <?php echo $product->current_bid;?>
                                </p>
                            </div>
                        </div>
                        <!-- /.product -->
                    </div>

                    <?php endforeach;?>



                </div>
                <!-- /.col-md-9 -->

            </div>
            <!-- /.container -->
        </div>
        <!-- /#content -->

<?php include('includes/footer.php');?>