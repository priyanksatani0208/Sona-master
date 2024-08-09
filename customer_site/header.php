    <header class="header-section">
      <div class="top-nav">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <ul class="tn-left">
                            <li><i class="fa fa-phone"></i>+91 75735 70002</li>
                            <li><i class="fa fa-envelope"></i>hotelsindia@gmail.com</li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <div class="tn-right">
                            <div class="top-social">
                            <a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a>
                                <a href="https://twitter.com/i/flow/login"><i class="fa fa-twitter"></i></a>
                                <a href="https://www.instagram.com/ "><i class="fa fa-instagram"></i></a>
                                <a href="https://www.youtube.com/"><i class="fa fa-youtube-play"></i></a>
                            </div>
                            <a href="rooms" class="bk-btn">Booking Now</a>                            
                        </div>
                    </div>
                </div>
            </div>
        </div> 
        <div class="menu-item">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2">
                        <div class="logo">
                            <a href="./index">
                                <img src="img/logo.png" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-10">
                        <div class="nav-menu">
                            <nav class="mainmenu">
                                <ul>
                                    <li class="active"><a href="index">Home</a></li>
                                    <li><a href="rooms">Rooms</a></li>
                                    <li><a href="about-us">About Us</a></li>                    
                                    <li><a href="contact">Contact</a></li>
									
									<?php
										if(isset($_SESSION['email']))
										{
									?>
								    <li><a href="myprofile">Profile</a></li>
									 <li><a href="logout">LOGOUT</a></li>
									<?php
										}
										else
										{
									?>									
									 <li><a href="login">LOGIN</a></li>
									<?php 
										}
									?>
                                </ul>
                            </nav>                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>