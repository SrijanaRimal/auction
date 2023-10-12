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

<?php include('includes/footer.php'); ?>