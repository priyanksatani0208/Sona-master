<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Sona Template">
    <meta name="keywords" content="Sona, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ROOMS details</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cabin:400,500,600,700&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/flaticon.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <style>
        .rating {
            display: inline-block;
            unicode-bidi: bidi-override;
            /* direction: rtl; */
        }

        .rating span {
            display: inline-block;
            width: 1em;
            font-size: 2em;
        }

        .rating span.full {
            color: #f90;
            /* Color for full stars */
        }

        .rating span.half {
            color: #f90;
            /* Color for half stars */
            position: relative;
            display: inline-block;
            width: 0.5em;
            overflow: hidden;
        }

        .rating span.half:before {
            content: '\2605';
            /* Unicode character for a full star */
            position: absolute;
            color: #ddd;
            /* Color for empty stars */
            width: 2em;
            /* Adjust the width to match a full star */
        }

        .rating span.empty {
            color: #ddd;
            /* Color for empty stars */
        }


        .rating input {
            display: none;
        }

        .rating label {
            float: right;
            padding: 0 0.2em;
            cursor: pointer;
        }

        .rating label:before {
            content: '\2605';
            /* Unicode character for a star */
            font-size: 2em;
            color: #ddd;
        }

        .rating input:checked~label:before,
        .rating input:checked~label:hover:before {
            color: #f90;
            /* Change color to yellow on hover or selection */
        }

        .underLinr::after {
            content: "";
            border: 1px solid #dfa974;
            width: 12%;
            display: block;
        }
    </style>
</head>

<body>
    <!-- Page Preloder -->
    <!-- <div id="preloder">
        <div class="loader"></div>
    </div> -->


    <!-- Header Section Begin -->
    <?php

    include_once('Header.php');

    ?>
    <!-- Header End -->

    <!-- Breadcrumb Section Begin -->
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <h2>Our Rooms</h2>
                        <div class="bt-option">
                            <a href="index">Home</a>
                            <span>Rooms</span>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section End -->

    <!-- Room Details Section Begin -->
    <section class="room-details-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <?php foreach ($roomDetail as $data) { ?>
                        <div class="room-details-item">
                            <img src="<?php echo "../admin/room_image/$data->room_image"; ?>" alt="">
                            <div class="rd-text">
                                <div class="rd-title">
                                    <h3>
                                        <?php echo $data->room_category ?>
                                    </h3>
                                    <div class="rdt-right">
                                        <!-- <div class="rating">
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star-half_alt"></i>
                                        </div> -->
                                        <?php
                                        function generateStarRating($rating)
                                        {
                                            $fullStars = floor($rating);
                                            $halfStar = ($rating - $fullStars) == 0.5 ? 1 : 0;
                                            $emptyStars = 5 - $fullStars - $halfStar;

                                            echo '<div class="rating">';

                                            for ($i = 0; $i < $fullStars; $i++) {
                                                echo '<span class="full">&#9733;</span>'; // Unicode character for a full star
                                            }

                                            if ($halfStar) {
                                                echo '<span class="half">&#9733;&#189;</span>'; // Unicode character for a half star
                                            }

                                            for ($i = 0; $i < $emptyStars; $i++) {
                                                echo '<span class="empty">&#9734;</span>'; // Unicode character for an empty star
                                            }

                                            echo '</div>';
                                        }

                                        // Example usage
                                        foreach ($feedBackReting as $rating) {
                                            generateStarRating($rating->average_value);
                                        }
                                        ?>


                                        <?php
                                        if (isset($_SESSION['email'])) {
                                            ?>
                                            <form action="booking" method="get">
                                                <input type="hidden" name="roomId" value="<?php echo $_GET['rooms-details'] ?>">
                                                <!-- <a href="#">Booking Now</a> -->
                                                <input class="btn btn-warning" type="submit" value="Booking Now">
                                            </form>
                                            <?php
                                        } else {
                                            ?>
                                            <form action="login" method="get">
                                                <input type="hidden" name="roomId" value="<?php echo $_GET['rooms-details'] ?>">
                                                <!-- <a href="#">Booking Now</a> -->
                                                <input class="btn btn-warning" type="submit" value="Booking Now">
                                            </form>
                                            <?php
                                        }
                                        ?>
                                    </div>
                                </div>
                                <h2>
                                    <?php echo $data->room_price ?> ₹<span>/Pernight</span>
                                </h2>
                                <table>
                                    <tbody>
                                        <tr>
                                            <td class="r-o">Size:</td>
                                            <td>
                                                <?php echo $data->room_size ?> ft
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="r-o">Capacity:</td>
                                            <td>
                                                <?php echo $data->room_capacity ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="r-o">Bed:</td>
                                            <td>
                                                <?php echo $data->room_bed ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="r-o">Services:</td>
                                            <td>
                                                <?php echo $data->room_services ?>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <p class="f-para">
                                    <?php echo $data->room_details ?>
                                </p>
                            </div>
                        </div>
                        <?php
                    }
                    ?>

                    <div class="rd-reviews">
                        <h4>Reviews</h4>
                        <?php 
                        if($feedBackList[0] !== "Data not found") {
                        foreach ($feedBackList as $value) {
                                ?>
                                <div class="review-item">
                                    <div class="ri-pic">
                                        <img src="./images/profile2.png" alt="">
                                    </div>
                                    <div class="ri-text">
                                        <span>
                                            <?php $date = new DateTime($value->feedback_date);
                                            echo $date->format('j M Y'); ?>
                                        </span>
                                        <div class="rating">
                                            <?php for ($i = 0; $i < $value->feed_rating; $i++) {
                                                echo '<i class="icon_star"></i>';
                                                # code...
                                            } ?>
                                        </div>
                                        <h5>
                                            <?php echo $value->cust_name ?>
                                        </h5>
                                        <p>
                                            <?php echo $value->feed_review ?>
                                        </p>
                                    </div>
                                </div>
                            <?php
                            }
                        } ?>
                    </div>
                    <div class="review-add">
                        <h4><span class="underLinr">Add Review</span></h4>
                        <form action="#" class="ra-form" method="post">
                            <div class="row">
                                <!-- <div class="col-lg-6">
                                    <input type="text" placeholder="Name*">
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" placeholder="Email*">
                                </div> -->
                                <div class="col-lg-12">
                                    <div class="row">
                                        <div class="col-md-6 d-flex">
                                            <div>
                                                <h5>You Rating:</h5>
                                            </div>
                                            <!-- </div>
                                        <div class="col-md-6"> -->
                                            <div class="rating">
                                                <input type="radio" id="star5" name="rating" value="5"><label
                                                    for="star5"></label>
                                                <input type="radio" id="star4" name="rating" value="4"><label
                                                    for="star4"></label>
                                                <input type="radio" id="star3" name="rating" value="3"><label
                                                    for="star3"></label>
                                                <input type="radio" id="star2" name="rating" value="2"><label
                                                    for="star2"></label>
                                                <input type="radio" id="star1" name="rating" value="1"><label
                                                    for="star1"></label>
                                            </div>
                                        </div>
                                    </div>
                                    <textarea placeholder="Your Review" name="review"></textarea>
                                    <?php if(isset($_SESSION['cust_id'])){ 
                                        echo '<button type="submit" name="feedBack">Submit Now</button>';
                                    } else {
                                        echo '<button  name="feedBack"><a href="login">Submit Now</a></button>';
                                    } ?>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- <div class="col-lg-4">
                    <div class="room-booking">
                        <h3>Your Reservation</h3>
                        <form action="#">
                            <div class="check-date">
                                <label for="date-in">Check In:</label>
                                <input type="text" class="date-input" id="date-in">
                                <i class="icon_calendar"></i>
                            </div>
                            <div class="check-date">
                                <label for="date-out">Check Out:</label>
                                <input type="text" class="date-input" id="date-out">
                                <i class="icon_calendar"></i>
                            </div>
                            <div class="select-option">
                                <label for="guest">Guests:</label>
                                <select id="guest">
                                    <option value="">3 Adults</option>
                                </select>
                            </div>
                            <div class="select-option">
                                <label for="room">Room:</label>
                                <select id="room">
                                    <option value="">1 Room</option>
                                </select>
                            </div>
                            <button type="submit">Check Availability</button>
                        </form>
                    </div>
                </div> -->
            </div>
        </div>
    </section>
    <!-- Room Details Section End -->

    <!-- Footer Section Begin -->
    <?php

    include_once('footer.php');

    ?>
    <!-- Footer Section End -->

    <!-- Search model Begin -->
    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch"><i class="icon_close"></i></div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Search here.....">
            </form>
        </div>
    </div>
    <!-- Search model end -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>