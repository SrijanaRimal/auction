<?php include('includes/header.php') ;?>


<div id="all">

    <div id="content">
        <div class="container">

            <div class="col-md-12">
                <ul class="breadcrumb">
                    <li><a href="#">Home</a>
                    </li>
                    <li>Add Listing</li>
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
                                <a href="contact.php">Contact Us</a>
                            </li>
                            <li>
                                <a href="faq.php">FAQ</a>
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
            
            <?php if(isLoggedIn()):?>
            <div class="col-md-9">


                <div class="box" id="contact">
                    <h1>Add a new listing</h1>

                    <p class="lead">Do you want to sell something? Get the best price for it through our auction
                        system ! </p>


                    <hr>


                    <div class="panel-group" id="accordion">


                        <form class="form-horizontal" action="addlisting.php" method="POST">

                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <h4 class="panel-title">

                                        <a data-toggle="collapse" data-parent="#accordion" href="#faq1">

                                            1. What to do you want to sell?

                                        </a>

                                    </h4>
                                </div>
                                <div id="faq1" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <div class="form-group">

                                            <label class="control-label col-sm-2" for="pwd">Category :</label>
                                            <div class="col-sm-10">

                                                <select class="form-control" name="CategoryID">

                                                    <?php foreach($allcategories as $category) :?>

                                                    <option value="<?php echo $category->id;?>">
                                                        <?php echo $category->name;?>
                                                    </option>

                                                    <?php endforeach ;?>

                                                </select>
                                                <br>
                                            </div>
                                            <br>

                                            <label class="control-label col-sm-2">Item Name:</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="ItemName"
                                                    placeholder="Enter the listing name">
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>

                            <!-- /.panel -->

                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <h4 class="panel-title">

                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">

                                            2. Tell more about your product.

                                        </a>

                                    </h4>
                                </div>

                                <div id="collapseTwo" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <label class="control-label col-sm-2">Description:</label>
                                        <div class="col-sm-10">
                                            <textarea class="form-control" rows="5" name="Description"></textarea>
                                            <br>
                                        </div>

                                        <label class="control-label col-sm-2">Images :</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="PhotosID"
                                                placeholder="Enter the image URL Eg: img/image.jpg">
                                            <br>
                                        </div>


                                    </div>
                                </div>
                            </div>
                            <!-- /.panel -->


                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <h4 class="panel-title">

                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">

                                            3. Prices and Time period

                                        </a>

                                    </h4>
                                </div>
                                <div id="collapseThree" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <label class="control-label col-sm-2">Starting Price:</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="StartingPrice"
                                                placeholder="Enter the Starting Value in Rupees">
                                            <br>
                                        </div>

                                        <label class="control-label col-sm-2" for="comment">Expected Price:</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="ExpectedPrice"
                                                placeholder="Enter the Expected Value in Rupees">
                                            <br>
                                        </div>

                                        <label class="control-label col-sm-2" for="comment">End Date:</label>
                                        <div class="col-sm-10">
                                            <div class="container">

                                                <div class="container">

                                                    <input required value="2023-07-02" class="date-picker" type="text"
                                                        id="datepicker" name="EndTime">

                                                </div>
                                            </div>

                                        </div>

                                    </div>

                                </div>

                                <!-- /.panel -->

                            </div>
                            <br>

                            <input type="submit" align="left" class="btn btn-primary center-block" name="SubmitListing"
                                type="submit" value="SubmitListing">

                            <!-- /.panel-group -->
                        </form>

                    </div>


                </div>
                <!-- /.col-md-9 -->
            </div>
            <?php else:?>
                <h2>Please <a href="register.php"> login or register </a>to add your product</h2>
            <?php endif;?>
            <!-- /.container -->
        </div>

        <?php include('includes/footer.php') ;?>