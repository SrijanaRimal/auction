<?php include('includes/header.php'); ?>


<?php
//     error_reporting(E_ALL);
// ini_set('display_errors', 1);
$bidEndDateTime = new DateTime($singleProduct->end_date);
$currentDateTime = new DateTime('now');
$bidremainingTime = $currentDateTime->diff($bidEndDateTime);
// if($bidremainingTime-> invert == 0){
//     echo($bidremainingTime->format('%R%a days %H hours %I minutes'));
//     die();
// }
// else{
//     echo ("expired");
//     die();
// }    

?>



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
                        <img src="<?php echo BASE_URI; ?>views/img/banner.jpg" alt="sales 2014" class="img-responsive">
                    </a>
                </div>
            </div>

            <div class="col-md-9">

                <div class="row" id="productMain">
                    <div class="col-sm-6">
                        <div id="mainImage">

                            <img src="<?php echo BASE_URI; ?>views/img/<?php echo $singleProduct->image; ?>" alt="" class="img-responsive">
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

                                <?php echo $singleProduct->name; ?>
                            </h1>
                            <p class="goToDescription"><a href="#details" class="scroll-to">Scroll to product
                                    details, material & care and sizing</a>

                            </p>

                            <p class="price"><?php  if($bidremainingTime-> invert == 1) 
                                echo 'Final'; else echo 'Current';?> Bid : Rs

                                <?php echo $singleProduct->current_bid; ?>
                            </p>
                            <?php  if($bidremainingTime-> invert != 0){
                                $bid = new Bid();
                                $user = new User();
                                $winningBid = $bid->getWiningBId($singleProduct->id, $singleProduct->current_bid);
                                $winningUser = $user->getUserInfo($winningBid->bidder);
                                echo("
                                <h4>Bid winner: ".$winningUser->first_name." ".$winningUser->last_name." </h4>");   
                            }
                                ?>

                            <?php if (isLoggedIn()) : ?>
                                <?php if ($_SESSION['user_id'] == $singleProduct->product_owner) : ?>
                                    <h4>You cannot bid on your own product</h4>
                                <?php else : ?>
                                    <?php if($bidremainingTime-> invert == 0):?>
                                    <form action="" method="post" align="center">

                                        <input type="text" name="bidValue" /><br><br>


                                        <p align="center">Enter a value greater than Rs

                                            <?php echo $singleProduct->current_bid; ?>
                                        </p>

                                        <input class="btn btn-primary" type="submit" align="center" name="bidnow" value="Bid Now"><br /><br>
                                    </form>
                                <?php endif; ?>
                                <?php endif; ?>
                            <?php else : ?>
                                <h3>Please <a href="register.php">login</a> to place your bid</h3>

                            <?php endif; ?>
                            <div style="color:red" align="center">


                            </div>

                            <br>




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
                                        <div class="numbers" id="dday">1</div>
                                    </td>
                                    <td align="center">
                                        <div class="numbers" id="dhour">2</div>
                                    </td>
                                    <td align="center">
                                        <div class="numbers" id="dmin">3</div>
                                    </td>
                                    <td align="center">
                                        <div class="numbers" id="dsec">4</div>
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




                            <!-- <p class="text-center buttons">
                                <a href="" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Buy now for
                                    Rs. 999
                                </a>

                            </p> -->


                        </div>


                    </div>

                </div>


                <div class="box" id="details">

                    <p>

                    <h4>Product details</h4>
                    <p>

                        <?php echo $singleProduct->discription; ?>
                    </p>


                    <hr>

                </div>

                <div class="row same-height-row">
                    <div class="col-md-3 col-sm-6">
                        <div class="box same-height">
                            <h3>You may also like these products</h3>
                        </div>
                    </div>



                   <?php foreach ($recommendedProducts as $product) : ?>
                        <div class="col-md-3 col-sm-6">
                            <div class="product same-height">
                                <div class="flip-container">
                                    <div class="flipper">
                                        <div class="front">

                                            <a href="<?php echo BASE_URI; ?>detail.html">
                                                <img src="<?php echo BASE_URI; ?>views/img/<?php echo $product->image; ?>" alt="" class="img-responsive">
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

                                        <?php echo $product->name; ?>
                                    </h3>
                                    <p class="price">Current bid: Rs.<?php echo $product->current_bid; ?>
                                    </p>
                                </div>
                            </div>
                            <!-- /.product -->
                        </div>
                    <?php endforeach; ?>





                </div>



            </div>
            <!-- /.col-md-9 -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /#content -->


    <script type="text/javascript">
    <?php
    // PHP code to calculate the target date
    $endDateTime = new DateTime($singleProduct->end_date);
    $year = $endDateTime->format("Y");
    $month = $endDateTime->format("m");
    $day = $endDateTime->format("d");
    $hour = $endDateTime->format("H");
    $minute = $endDateTime->format("i");
    $tz = -5;
    ?>

    var current = "Auction Ended!";
    var year = <?php echo $year; ?>;
    var month = <?php echo $month; ?>;
    var day = <?php echo $day; ?>;
    var hour = <?php echo $hour; ?>;
    var minute = <?php echo $minute; ?>;
    var tz = <?php echo $tz; ?>;

    // Function to calculate and update the countdown
    function updateCountdown() {
        var targetDate = new Date(year, month - 1, day, hour, minute);
        var now = new Date();
        var timeRemaining = targetDate - now + tz * 60 * 60 * 1000;

        if (timeRemaining <= 0) {
            // Auction has ended
            document.getElementById("count2").innerHTML = current;
            document.getElementById("spacer1").remove();
            document.getElementById("spacer2").remove();
        } else {
            var days = Math.floor(timeRemaining / (1000 * 60 * 60 * 24));
            var hours = Math.floor((timeRemaining % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((timeRemaining % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((timeRemaining % (1000 * 60)) / 1000);

            document.getElementById("dday").innerHTML = days;
            document.getElementById("dhour").innerHTML = hours;
            document.getElementById("dmin").innerHTML = minutes;
            document.getElementById("dsec").innerHTML = seconds;

            // Update the countdown every second
            setTimeout(updateCountdown, 1000);
        }
    }

    // Call the updateCountdown function initially
    updateCountdown();
</script>



    <?php include('includes/footer.php'); ?>


