<?php
error_reporting(0);
// $show_rsvp = !empty($_REQUEST['rsvp']) && $_REQUEST['rsvp'] == 'jd';
$show_rsvp = true;
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Joe and Mei-Ying's Wedding">
    <meta name="keywords" content="wedding,Laurendi,mei-ying,joe,wu">

    <!-- Title
    ================================================== -->
    <title>Joseph and Diana's Wedding</title>

    <!-- Google Fonts
    ================================================== -->
    <link href='http://fonts.googleapis.com/css?family=Quicksand:300,400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Playfair+Display:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Great+Vibes' rel='stylesheet' type='text/css'>

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="css/grid.css" media="all">
    <link rel="stylesheet" href="css/magnific-popup.css" media="all">
    <link rel="stylesheet" href="css/font-awesome.min.css" media="all">
    <link rel="stylesheet" href="css/animate.min.css" media="all">
    <link rel="stylesheet" href="css/flaticon.css" media="all">
    <link rel="stylesheet" href="css/style.css" media="all">
    <link id="colors" rel="stylesheet" href="css/colors/default.css" media="all">

    <!-- Favicons
    ================================================== -->
    <link rel="shortcut icon" href="images/elements/favicon.ico">
    <link rel="apple-touch-icon" href="images/elements/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/elements/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="images/elements/apple-touch-icon-114x114.png" />
    <link rel="apple-touch-icon" sizes="144x144" href="images/elements/apple-touch-icon-144x144.png" />
    <link rel="apple-touch-icon" sizes="180x180" href="images/elements/apple-touch-icon-180x180.png" />

    <!-- Load Main jQuery Files
    ================================================== -->
    <script src="js/jquery.min.js"></script>
    <script src="js/modernizr.js"></script>

    <script src='https://www.google.com/recaptcha/api.js'></script>

    <!--[if lt IE 9]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <link rel="stylesheet" type="text/css" href="css/ie8.css" />
    <![endif]-->

    <!--[if IE]>
        <link rel="stylesheet" type="text/css" href="css/ie.css" />
    <![endif]-->

</head>

<body>

    <div class="loaderOverlay"><i class="fa fa-heart animate-spin"></i></div>
    <!-- Hero Section -->
    <div id="logo">Joseph <span>&amp;</span> Diana</div>
    <section id="top" class="hero" data-type="parallax">
        <header id="main-menu">
            <div class="container">
                <div class="row">
                    <div id="menu-logo" >J <span>&amp;</span> D</div>
                    <nav id="navigation" class="column twelve">
                        <ul>
                            <li><a href="#logo">Home</a></li>
                            <li><a href="#couple">Story</a></li>
                            <li><a href="#timeline">Loveline</a></li>
                            <li><a href="#wedding-events">Events</a></li>
                            <li><a href="#important-people">People</a></li>
<!--                             <li><a href="#wedding-gallery">Gallery</a></li>
 -->                            <li><a href="#gift-registry">Gifts</a></li>
                            <li><a href="#guestbook">GuestBook</a></li>

                            <?php if ($show_rsvp) { ?>
                                <li><a href="#contact">RSVP</a></li>
                            <?php } ?>
                            <li class="country">
                                <a href="http://www.achiaohemeiying.com/tw-en.php">TW</a>
                                <p>/</p>
                                <a href="http://www.josephanddiana.com/us-en.php" class="selected-country">US</a>
                            </li>
                            <li><a href="http://www.josephanddiana.com/us-zh.php">中文</a></li>
                        </ul>
                    </nav>
                    <a href="#" id="menu-toggle-wrapper">
                        <div id="menu-toggle"></div>
                    </a>
                </div>
                <!-- close .ha-header-perspective -->
            </div>
            <!-- close grid container -->
        </header>
        <div class="overlay-dark"></div>
        <div class="container">
            <div class="hero-inner">
                <h1>We’re getting married.</h1>
                <div class="info">
                   <div id="countdown" class="countdown countdown-us"> 365 <span>days</span> 0 <span>hours</span> 0 <span>mins</span> 0 <span>secs</span></div>
                   <span id="date" class="date">
                        April 16th, 2016 - Charleston, SC, United States
                    </span>
                </div>
                <a href="#couple" class="mouse scrollTo"><i class="fa fa-long-arrow-down"></i></a>
            </div>
        </div>
    </section>
    <!-- #Hero Section Ends -->

    <section id="home-content" class="top-menu">

        <?php if ($show_rsvp) { ?>
            <!-- RSVP Now -->
            <section id="invitation" class="pattern">
                <span>You’re invited to our Wedding!</span>
                <a id="to-rsvp" href="#contact" class="button scrollTo">RSVP NOW</a>
            </section>
            <!-- #RSVP Now -->
        <?php } else { ?>
            <section id="invitation" class="pattern">
                <span>Welcome to our wedding website!</span>
            </section>
        <?php } ?>

        <!-- Couple Images -->
        <section id="couple">
            <div class="overlay-dark"></div>
            <div class="hero-heart"></div>
            <div class="images">
                <div class="column six girl">
                    <span class="fname">Diana</span>
                    <span class="lname">Wu</span>
                </div>
                <div class="column six boy">
                    <span class="fname">Joseph</span>
                    <span class="lname">Laurendi</span>
                </div>
            </div>
        </section>
        <!-- #Couple Images Ends -->

        <!-- Story Section -->
        <section id="story" class="pattern">
            <div class="container timeline">
                <span class="arrow-up"></span>
                <span class="arrow-down"></span>
                <div class="row">
                    <div class="column six right">
                        <h2 class="vibe">Bride’s story</h2>
                        <div class="story">
                            <p>Diana was born and raised in Taiwan and has lived there her entire life. She's an incredibly strong-willed, independent woman that puts family and friends above all else. She strives for excellence in everything that she does and her passion is to live life to the fullest, which is embodied by her daily approach to life. Her hobbies include traveling the world, enjoying the outdoors, and experiencing new cultures.</p>
                            <p>Recently Diana graduated from college and started her career as a front-end web programmer.</p>
                        </div>
                        <div class="social">
                            <ul>
                                <li><a href="http://www.facebook.com/darkplum"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="https://twitter.com/darkplumwu"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="https://www.linkedin.com/profile/view?id=325163428"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="column six left">
                        <h2 class="vibe">Groom’s story</h2>
                        <div class="story">
                            <p>Joe was born and raised in the USA. He shares in Diana's passion for life and pursuit of excellence with intellectual challenges at the forefront of his attention. Math, computer science, and entrepreneurship are the main disciplines he focuses on. Beyond intellectual pursuits, he loves running and exploring the world (which he often combines).</p>
                            <p>Recently Joe founded <a href="www.brightcellars.com">Bright Cellars</a>, an online wine company that makes discovering wine fun and easy, with his best man, Richard Yau.</p>
                        </div>
                        <div class="social">
                            <ul>
                                <li><a href="http://www.facebook.com/jlaurendi"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="https://twitter.com/jlaurendi"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="https://www.linkedin.com/profile/view?id=18122897"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="twelve">
                        <div class="box corner quote">
                            <div class="corners-topleft"></div>
                            <div class="corners-bottomleft"></div>
                            <div class="corners-topright"></div>
                            <div class="corners-bottomright"></div>
                “From opposite ends of the world, our paths crossed one summer day in Taiwan. A love was born that grew to unite us despite the immense challenges. True love indeed conquers all.”
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- #Story Section Ends -->

        <!-- Timeline Section -->
        <section id="timeline">
            <header class="section-header">
                <h3 class="section-title">OUR LOVELINE</h3>
                <p class="section-tagline">A brief timeline of our relationship together.</p>
            </header>
            <div class="container timeline">
                <span class="arrow-up"></span>
                <span class="arrow-down"></span>
                <div class="row">
                    <div class="timeline-year start"><span>2013</span></div>
                    <div class="column six heart right">
                        <div class="box pattern">
                            <span class="date">August 24</span>
                            <h2>The day we met</h2>
                            <div class="box-content">
                                <p>On his first trip to Taiwan, Joe was traveling along with his friend Sherry and one of her friends Tzu-li. After making their way down the West coast seeing Taipei, Taichung, and then Tainan, they were next in Kaohsiung. It's here that Joe met Tzu-li's friend, Diana. The rest is history.</p>
                            </div>
                        </div>

                    </div>

                    <div class="clearfix"></div>

                    <div class="column six heart left">
                        <div class="box pattern">
                            <span class="date">August 25</span>
                            <h2>Falling in love</h2>
                            <div class="box-content">
                                <p>After Kaohsiung, the core group (Joe, Sherry, and Tzu-li) was planning to travel to the beaches in Kenting at the far south of Taiwan. Diana spontaneously decided to come along. It's here that they started to really get to know each other -- talking for hours and spending a day together at the beach. They didn't really know it yet, but this is where they started to fall in love with each other.</p>
                            </div>

                        </div>
                    </div>

                    <div class="clearfix"></div>


                    <div class="column six heart right">
                        <div class="box pattern">
                            <span class="date">December 30</span>
                            <h2>Boyfriend and Girlfriend</h2>
                            <div class="box-content">
                                <p>After Joe's quick trip to Taiwan, he returned to the US while Diana was headed to Shanghai for a term abroad. They kept in touch quite a lot online and got to know each other really well. After a few months of getting to know each other and processing what had happened, Joe knew this girl was different from the rest. He knew he couldn't let this opportunity pass him by.
                                    Wanting to ask her to be his girlfriend in person, he decided to go all-in and go all the way to Shanghai. Luckily, when he got got there and asked her, she said yes. From there they spent the month together traveling.</p>
                            </div>
                        </div>
                    </div>

                    <div class="clearfix"></div>
                    <div class="timeline-year"><span>2014</span></div>

                    <div class="column six heart left">
                        <div class="box pattern">
                            <span class="date">January 13</span>
                            <h2>Trip to Thailand and Joe's first Chinese New Year in Taiwan</h2>
                            <div class="box-content">
                                <p>Diana and Joe's first big trip. Suffering from freezing cold winter in Shanghai and Boston, they headed to a tropical country -- Thailand. Starting from the northern city of Chiang Mai, then down to Bangkok and finally the immaculate beaches -- Phuket and Phi Phi Islands. After Thailand, Joe came to Taiwan for his very first Chinese Lunar New Year experience.</p>
                            </div>
                        </div>
                    </div>

                    <div class="clearfix"></div>

                    <div class="column six heart right">
                        <div class="box pattern">
                            <span class="date">June 10</span>
                            <h2>Summer in the US</h2>
                            <div class="box-content">
                                <p>In the summer, Diana came to visit Joe in the US. She met a ton of new friends in Boston. At the end of her stay, her, Joe, and Kelly (Joe's sister), embarked on an epic east coast road trip. From Boston, our first stop was in D.C. to see the nation's capital as well as to visit Joe's family in Maryland. Next on the trip was South Carolina and then Florida -- going to Orlando, Miami and the southernmost city in the continental United States -- Key West. A fun fact is that the one-way length of this trip is about 4 times of round-trip length from the north of Taiwan to the south.</p>
                            </div>

                        </div>
                    </div>

                    <div class="clearfix"></div>

                    <div class="column six heart left">
                        <div class="box pattern">
                            <span class="date">October 24</span>
                            <h2>Fall in Taichung</h2>
                            <div class="box-content">
                                <p>On Joe's third trip to Taiwan, he and Diana spent a month in Taichung for the fall. We spent most of our time working at the <a href="https://www.facebook.com/HappenTaichung">Happen coworking space</a>. Joe also got his first taste of training for and running a marathon in Taiwan. The Sun Moon Lake marathon was actually his favorite to date.</p>
                            </div>
                        </div>
                    </div>

                    <div class="clearfix"></div>

                    <div class="column six heart right">
                        <div class="box pattern">
                            <span class="date">November 23</span>
                            <h2>Southeast Asia Trip</h2>
                            <div class="box-content">
                                <p>After a month in Taichung, we went on an action-packed trip to SE Asia -- Malaysia, Singapore, Cambodia, and Vietnam! We a learned a ton about the multiple cultures (and food!) we encountered -- as well as  how plentiful their rainfall is.</p>
                            </div>
                        </div>
                    </div>

                    <div class="clearfix"></div>
                    <div class="timeline-year"><span>2015</span></div>

                    <div class="column six heart left">
                        <div class="box pattern">
                            <span class="date">January 18</span>
                            <h2>Winter in Taiwan</h2>
                            <div class="box-content">
                                <p>After only being back in the US for a month, Joe finds a cheap flight to Taiwan right before he moves to Madison for 3 months to do a startup accelerator. Knowing it'll be a while before they can see each other again he jumps on it.</p>
                            </div>
                        </div>
                    </div>

                    <div class="clearfix"></div>

                    <div class="column six heart right">
                        <div class="box pattern">
                            <span class="date">January 27</span>
                            <h2>The Proposal</h2>
                            <div class="box-content">
                                <p>About a week into his trip, Joe and Diana went on a trip back to Kenting, where they first fell in love. On sunset at 5:20pm of the 520th day after falling in love, Joe dropped to one knee, and proposed. Diana, in total shock and surprise, said yes!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- #Timeline Section Ends -->

        <!-- Parallax Section -->
<!--         <section class="parallax" data-type="parallax">
            <div class="overlay"></div>
            <div class="container">
                <h2 class="quote">“We’ve met one summer night in the club. The music was to loud so we really didn’t speak that much. One great thing led to another and the rest is history”</h2>
            </div>
        </section> -->
        <!-- #Parallax Section Ends -->

        <!-- Wedding Events Section -->
        <section id="wedding-events" class="pattern">
            <header class="section-header">
                <h3 class="section-title">Wedding Events</h3>
                <p class="section-tagline"></p>
            </header>
            <div class="container timeline">
                <span class="arrow-up"></span>
                <span class="arrow-down"></span>
                <div class="row">
                    <div class="timeline-year start"><span>TAIWAN</span></div>

<!--                     <div class="column six heart right">
                        <div class="box center corner">
                            <div class="corners-topleft"></div>
                            <div class="corners-bottomleft"></div>
                            <div class="corners-topright"></div>
                            <div class="corners-bottomright"></div>
                            <h2>Bachelor / Bachelorette Party</h2>
                            <div class="details">
                                <span class="waddress">where?</span>
                                <span class="waddress">where??</span>
                                <span class="wdate">when?</span>
                                <span class="wtime">when??</span>
                            </div>
                            <a href="event.html" class="button">Read More</a>
                        </div>
                    </div> -->
                    <div class="column six heart right">
                        <div class="box center corner">
                            <div class="corners-topleft"></div>
                            <div class="corners-bottomleft"></div>
                            <div class="corners-topright"></div>
                            <div class="corners-bottomright"></div>
                            <h2>Taiwan Wedding Ceremony</h2>
                            <div class="details">
                                <span class="waddress">Kaohsiung, Taiwan</span>
                                <span class="wdate">Saturday, January 9, 2016</span>
                            </div>
                        </div>
                    </div>

                    <div class="clearfix"></div>
                    <div class="timeline-year"><span>USA</span></div>

                    <div class="column six heart left">
                        <div class="box center corner">
                            <div class="corners-topleft"></div>
                            <div class="corners-bottomleft"></div>
                            <div class="corners-topright"></div>
                            <div class="corners-bottomright"></div>
                            <h2>Wedding Ceremony</h2>
                            <div class="details">
                                <span class="waddress">Charisma by the Sea</span>
                                <span class="waddress">Folly Beach, SC</span>
                                <span class="wdate">Saturday, April 16, 2016</span>
                                <span class="wtime">5:00 PM - 6:00 PM</span>
                            </div>
<!--                             <a href="event.html" class="button">Read More</a>
 -->                        </div>
                    </div>

                    <div class="clearfix"></div>

                    <div class="column six heart right">
                        <div class="box center corner">
                            <div class="corners-topleft"></div>
                            <div class="corners-bottomleft"></div>
                            <div class="corners-topright"></div>
                            <div class="corners-bottomright"></div>
                            <h2>Wedding Reception</h2>
                            <div class="details">
                                <span class="waddress">Charisma by the Sea</span>
                                <span class="waddress">Folly Beach, SC</span>
                                <span class="wdate">Saturday, April 16, 2016</span>
                                <span class="wtime">6:00 PM - 10:00 PM</span>
                            </div>
<!--                             <a href="event.html" class="button">Read More</a>
 -->                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </section>
        <!-- #Wedding Events Section Ends -->

        <!-- #Map Section -->
        <section id="usa-map-section" class="map-section pattern">
            <header class="section-header">
                <h3 class="section-title">USA Wedding Map
                    <div class="map-icon"><i class="fa fa-map-marker"></i></div>
                </h3>
                <p class="section-tagline"></p>
            </header>
            <div class="container">
                <div id="usa-map-pins" class="map-pins">
                    <ul>
                        <li class="wedding">Wedding</li>
                        <!-- <li class="weddingParty">Wedding Party</li> -->
                        <!-- <li class="bachelor">Bachelor</li> -->
                        <!-- <li class="bachelorette">Bachelorette</li> -->
                        <li class="hotels">Hotels</li>
                        <li class="airport">Airport</li>
                        <li class="attractions">Attractions</li>
                        <li class="restaurants">Restaurants</li>
                        <!-- <li class="shopping">Shopping</li> -->
                        <!-- <li class="special">Special</li> -->
                    </ul>
                </div>
            </div>
            <div id="usa-map" class="map"></div>
        </section>
        <!-- #Map Section Ends -->


        <!-- Important People Section -->
        <section id="important-people">
            <header class="section-header">
                <h3 class="section-title">Important People</h3>
                <p class="section-tagline"></p>
            </header>
            <div class="container timeline">
                <span class="arrow-up"></span>
                <span class="arrow-down"></span>
                <div class="row">
                    <div class="column six right">
                        <h2 class="vibe">Bridesmaids</h2>
                        <div class="tabs people-image">
                            <li><a href="#person1" class="active"><img src="images/important-people/bridesmaid1.jpg" alt="Wen-Yang Ruan" /></a></li>
                            <li><a href="#person2"><img src="images/important-people/bridesmaid2.jpg" alt="Ren-Ci Chen" /></a></li>
                            <li><a href="#person3"><img src="images/important-people/bridesmaid3.jpg" alt="Jing-Ru Zhuo" /></a></li>
                        </div>
                        <div class="tab-content-wrap">
                            <div id="person1" class="tab-content">
                                <h2>Wen-Yang Ruan</h2>
                                <div class="story">
                                    <p>Wen-Yang and Diana met in high school when they both joined the Girl Scouts. While majoring in Japanese, Wen-Yang spent a year in Japan doing an exchange program. After working in the iron and steel industry as a sales representative for a few years, she's looking forward to getting started in a new career field.</p>
                                </div>
                                <div class="social">
                                    <ul>
                                        <li><a href="https://www.facebook.com/softsheep"><i class="fa fa-facebook"></i></a>
                                        </li>
                                        <!-- <li><a href="#"><i class="fa fa-twitter"></i></a>
                                        </li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a>
                                        </li> -->
                                    </ul>
                                </div>
                            </div>
                            <div id="person2" class="tab-content">
                                <h2>Ren-Ci Chen</h2>
                                <div class="story">
                                    <p>Ren-Ci was also a member of the Girl Scouts and met Diana in high school. They not only went to the same high school but also the same college -- NCCU. With a Mathematical Sciences degree, Ren-Ci is working at ASE which is one of the largest providers of semiconductor manufacturing services in the world.</p>
                                </div>
                                <div class="social">
                                    <ul>
                                        <li><a href="https://www.facebook.com/profile.php?id=100000157616236"><i class="fa fa-facebook"></i></a>
                                        </li>
                                        <!-- <li><a href="#"><i class="fa fa-twitter"></i></a>
                                        </li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a>
                                        </li> -->
                                    </ul>
                                </div>
                            </div>
                            <div id="person3" class="tab-content">
                                <h2>Jing-Ru Zhuo</h2>
                                <div class="story">
                                    <p>Jing-Ru met Diana in Girl Scouts back in high school. She is currently the student club advisor of the scouts at their high school. Otherwise, Jing-Ru works in a middle school as well as a cram school as a teacher. In her leisure time, Jing-Ru enjoys planning trips and traveling.</p>
                                </div>
                                <div class="social">
                                    <ul>
                                        <li><a href="https://www.facebook.com/jingru.jhuo"><i class="fa fa-facebook"></i></a>
                                        </li>
                                       <!--  <li><a href="#"><i class="fa fa-twitter"></i></a>
                                        </li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a>
                                        </li> -->
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="column six left">
                        <h2 class="vibe">Groomsmen</h2>
                        <div class="tabs people-image">
                            <li><a href="#person4" class="active"><img src="images/important-people/groomsman1.jpg" alt="" /></a></li>
                            <li><a href="#person5"><img src="images/important-people/groomsman2.jpg" alt="" /></a></li>
                            <li><a href="#person6"><img src="images/important-people/groomsman3.jpg" alt="" /></a></li>
                        </div>
                        <div class="tab-content-wrap">
                            <div id="person4" class="tab-content">
                                <h2>Richard Yau</h2>
                                <div class="story">
                                    <p>
                                        Richard and Joe's friendship dates back to college where they were brothers
                                        in the MIT fraternity ZBT. After college Richard began
                                        working at a Boston startup NutraClick as a marketing analyst and, later, president
                                        of a subsidiary company, Bona Clara. In 2014, Richard and Joe both left their jobs to found <a href="www.brightcellars.com">Bright Cellars</a>.
                                    </p>
                                </div>
                                <div class="social">
                                    <ul>
                                        <li><a href="https://twitter.com/richard_yau"><i class="fa fa-twitter"></i></a>
                                        </li>
                                        <li><a href="www.linkedin.com/profile/view?id=38969067"><i class="fa fa-linkedin"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div id="person5" class="tab-content">
                                <h2>Mike Kling</h2>
                                <div class="story">
                                    <p>
                                        Mike and Joe also met as brothers of ZBT at MIT. Like Joe, Mike loves math, computer science
                                        and running. After completing his Masters in CS at MIT, Mike began working as a financial
                                        trading analyst at Jane Street Capital in NYC.
                                    </p>
                                </div>
                                <div class="social">
                                    <ul>
                                        <li><a href="https://www.facebook.com/mike.kling"><i class="fa fa-facebook"></i></a>
                                        </li>
                                        <li><a href="www.linkedin.com/profile/view?id=169949679"><i class="fa fa-linkedin"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div id="person6" class="tab-content">
                                <h2>David Hutchings</h2>
                                <div class="story">
                                    <p>
                                        David and Joe also met as brothers of ZBT. David was incredibly active in leadership positions at MIT,
                                        most notably holding the IFC president position while also being ZBT president. Since college David
                                        has remained heavily involved in MIT (currently ZBT trustee president) and works as an economic consultant
                                        at The Brattle Group. A Canadian at heart (and by birth),
                                        Hutch has recently relocated to Toronto.
                                    </p>
                                </div>
                                <div class="social">
                                    <ul>
                                        <li><a href="https://www.facebook.com/david.hutchings.184"><i class="fa fa-facebook"></i></a>
                                        </li>
                                        <li><a href="www.linkedin.com/profile/view?id=73006531"><i class="fa fa-linkedin"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- #Important People Section Ends -->

        <!-- Small Gallery Section -->
<!--         <section id="wedding-gallery" class="pattern">
            <header class="section-header">
                <h3 class="section-title">Photo Gallery</h3>
            </header>
            <div class="container">
                <div class="row">
                    <ul id="gallery-filter">
                        <li class="active"><a href="#" data-filter="*">All</a>
                        </li>
                        <li><a href="#" data-filter=".seasia">Southeast Asia 2014</a>
                        </li>
                        <li><a href="#" data-filter=".usa">USA Summer 2014</a>
                        </li>
                        <li><a href="#" data-filter=".photography">Asia 2013-2014</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div id="gallery-wrapper">
                <div class="block wedding">
                    <div class="image-holder">
                        <img src="images/album/WeddCouple1.jpg" alt="image">
                    </div>
                    <a href="images/album/WeddCouple1.jpg" class="video-hover">
                        <div class="portfolio-info">
                            <h3 class="portfolio-title">
                                This is some title
                                <span class="cat">Wedding</span>
                            </h3>
                        </div>
                    </a>
                </div>
                <div class="block photography">
                    <div class="image-holder">
                        <img src="images/album/WeddCouple2.jpg" alt="image">
                    </div>
                    <a href="images/album/WeddCouple2.jpg" class="portfolio-hover">
                        <div class="portfolio-info">
                            <h3 class="portfolio-title">
                                This is some title
                                <span class="cat">Wedding</span>
                            </h3>
                        </div>
                    </a>
                </div>
                <div class="block photography">
                    <div class="image-holder">
                        <img src="images/album/WeddCouple3.jpg" alt="image">
                    </div>
                    <a href="images/album/WeddCouple3.jpg" class="portfolio-hover">
                        <div class="portfolio-info">
                            <h3 class="portfolio-title">This is some title</h3>
                        </div>
                    </a>
                </div>
                <div class="block photography">
                    <div class="image-holder">
                        <img src="images/album/WeddCouple4.jpg" alt="image">
                    </div>
                    <a href="images/album/WeddCouple4.jpg" class="portfolio-hover">
                        <div class="portfolio-info">
                            <h3 class="portfolio-title">This is some title</h3>
                        </div>
                    </a>
                </div>
                <div class="block wedding">
                    <div class="image-holder">
                        <img src="images/album/WeddCouple5.jpg" alt="image">
                    </div>
                    <a href="images/album/WeddCouple5.jpg" class="video-hover">
                        <div class="portfolio-info">
                            <h3 class="portfolio-title">
                                This is some title
                                <span class="cat">Design</span>
                            </h3>
                        </div>
                    </a>
                </div>
                <div class="block paris">
                    <div class="image-holder">
                        <img src="images/album/WeddCouple6.jpg" alt="image">
                    </div>
                    <a href="images/album/WeddCouple6.jpg" class="portfolio-hover">
                        <div class="portfolio-info">
                            <h3 class="portfolio-title">
                                This is some title
                                <span class="cat">Design</span>
                            </h3>
                        </div>
                    </a>
                </div>
                <div class="block paris">
                    <div class="image-holder">
                        <img src="images/album/WeddCouple7.jpg" alt="image">
                    </div>
                    <a href="images/album/WeddCouple7.jpg" class="portfolio-hover">
                        <div class="portfolio-info">
                            <h3 class="portfolio-title">This is some title</h3>
                        </div>
                    </a>
                </div>
                <div class="block photography">
                    <div class="image-holder">
                        <img src="images/album/WeddCouple8.jpg" alt="image">
                    </div>
                    <a href="images/album/WeddCouple8.jpg" class="portfolio-hover">
                        <div class="portfolio-info">
                            <h3 class="portfolio-title">This is some title</h3>
                        </div>
                    </a>
                </div>
            </div>
        </section> -->
        <!-- #Small Gallery Section Ends -->

        <!-- Gift Registry Section -->
        <section id="gift-registry" class="pattern">
            <header class="section-header">
                <h3 class="section-title">Gift Registry</h3>
                <p class="section-tagline">We're currently working on our registries. Come back soon!</p>
            </header>
<!--             <div class="container">
                <ul class="small-box corner">
                    <li>
                        <a class="product" href="#"><img src="images/gifts/registry-amazon.png" alt=""></a>
                        <div class="corners-topleft"></div>
                        <div class="corners-bottomleft"></div>
                        <div class="corners-topright"></div>
                        <div class="corners-bottomright"></div>
                    </li>
                    <li>
                        <a class="product" href="#"><img src="images/gifts/registry-crate.png" alt=""></a>
                        <div class="corners-topleft"></div>
                        <div class="corners-bottomleft"></div>
                        <div class="corners-topright"></div>
                        <div class="corners-bottomright"></div>
                    </li>
                    <li>
                        <a class="product" href="#"><img src="images/gifts/registry-macys.png" alt=""></a>
                        <div class="corners-topleft"></div>
                        <div class="corners-bottomleft"></div>
                        <div class="corners-topright"></div>
                        <div class="corners-bottomright"></div>
                    </li>
                    <li>
                        <a class="product" href="#"><img src="images/gifts/registry-tiffany.png" alt=""></a>
                        <div class="corners-topleft"></div>
                        <div class="corners-bottomleft"></div>
                        <div class="corners-topright"></div>
                        <div class="corners-bottomright"></div>
                    </li>
                </ul>
                <ul class="small-box corner">
                    <li>
                        <div class="money">
                            <span class="amount">$100</span>
                            <a href="#" class="button donate">DONATE</a>
                            <div class="corners-topleft"></div>
                            <div class="corners-bottomleft"></div>
                            <div class="corners-topright"></div>
                            <div class="corners-bottomright"></div>
                        </div>
                    </li>
                    <li>
                        <div class="money">
                            <span class="amount">$200</span>
                            <a href="#" class="button donate">DONATE</a>
                            <div class="corners-topleft"></div>
                            <div class="corners-bottomleft"></div>
                            <div class="corners-topright"></div>
                            <div class="corners-bottomright"></div>
                        </div>
                    </li>
                    <li>
                        <div class="money">
                            <span class="amount">$400</span>
                            <a href="#" class="button donate">DONATE</a>
                            <div class="corners-topleft"></div>
                            <div class="corners-bottomleft"></div>
                            <div class="corners-topright"></div>
                            <div class="corners-bottomright"></div>
                        </div>
                    </li>
                    <li>
                        <div class="money">
                            <span class="amount">$1000</span>
                            <a href="#" class="button donate">DONATE</a>
                            <div class="corners-topleft"></div>
                            <div class="corners-bottomleft"></div>
                            <div class="corners-topright"></div>
                            <div class="corners-bottomright"></div>
                        </div>
                    </li>
                </ul>
            </div>
 -->
        </section>
        <!-- #Gift Registry Section Ends -->

        <!-- Guestbook Section -->
        <section id="guestbook">
            <header class="section-header">
                <h3 class="section-title">Guestbook</h3>
            </header>
            <div class="container timeline">
                <span class="arrow-up"></span>
                <span class="arrow-down"></span>
                <div class="row">
                    <?php
                        $db = new mysqli('localhost', 'fourplat_admin', 'l%9,wPfmG;k}', 'fourplat_wedding');
                        if ($db->connect_errno == 0) {
                            $query = "SELECT * FROM guestbook WHERE wedding='us'";
                            $posts = $db->query($query);
                            $posts_by_year = array();
                            foreach ($posts as $post) {
                                $date = new DateTime($post['date']);
                                $year = $date->format('Y');

                                if (empty($posts_by_year[$year])) $posts_by_year[$year] = array();
                                $posts_by_year[$year][] = $post;
                            }
                            $position = 'left';
                            $movetop = true;
                            foreach ($posts_by_year as $year => $posts) {
                    ?>
                            <div class="timeline-year start"><span><?php echo $year; ?></span></div>

                            <?php foreach ($posts as $post) {
                                $comment = htmlspecialchars($post['comment']);
                                $name = htmlspecialchars($post['name']);
                                $date = new DateTime($post['date']);
                                $date = $date->format('d F');

                            ?>
                                <?php
                                    $position = ($position == 'left') ? 'right' : 'left';
                                    if ($movetop && $position == 'left') {
                                        $class = $position.' movetop';
                                        $movetop = false;
                                    } else {
                                        $class = $position;
                                    }
                                ?>
                                <div class="column six heart <?php echo $class; ?>">
                                    <div class="box pattern">
                                        <span class="date"><?php echo $date; ?></span>
                                        <div class="guest">
                                            <p style="white-space: pre-line;"><?php echo $comment; ?></p>
                                            <span class="name"><?php echo $name; ?></span>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        <?php } ?>
                    <?php } ?>

                </div>
            </div>
            <div class="form color">
                <header class="section-header">
                    <h3>Write Something</h3>
                </header>
                <div class="container smaller">
                    <div class="row">
                        <form action="guestbook.php" method="POST" class="guestbook">
                            <div class="column six">
                                <label for="name">Name</label>
                                <input type="text" id="name" name="name">
                            </div>
                            <div class="column six">
                                <label for="email">Email</label>
                                <input type="text" id="email" name="email">
                            </div>
                            <div class="column twelve">
                                <label for="comment">Comment</label>
                                <textarea name="comment" cols="30" rows="10"></textarea>
                            </div>
                            <div class="clearfix"></div>
                            <input type="hidden" name="wedding" value="us" />
                            <div class="g-recaptcha" data-sitekey="6LedjgwTAAAAAKfuW18H60B02wbKbo_JLHAVxO5i"></div>
                            <input type="submit" class="color" value="Send your message &rarr;">
                            <div class="clearfix"></div>
                            <div class="notification"></div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- #Guestbook Section Ends -->

        <!-- Instagram Section -->
        <section id="instagram-section" class="pattern">
            <header class="section-header">
                <h3 class="section-title">Social Media
                    <div class="social-media-icons"><i class="fa fa-facebook-square"></i><i class="fa fa-twitter-square"></i><i class="fa fa-instagram"></i></div>
                </h3>
                <p class="section-tagline">Copy the hashtag below and share your experience from our Wedding :)</p>
            </header>
            <span class="hash">#joeanddianawedding</span>
        </section>
        <!-- #Instagram Section Ends -->

        <?php if ($show_rsvp) { ?>
            <!-- Contact Section -->
            <section id="contact" class="bgcolor">
                <header class="section-header">
                    <h3 class="section-title">SIGN YOUR RSVP</h3>
                    <p class="section-tagline">Please RSVP before 20 January 2016.</p>
                </header>
                <div class="form">
                    <div class="container smaller">
                        <div class="row">
                            <form action="action.php"  method="POST" autocomplete="off" class="actionform">
                                <div class="notification"></div>
                                <div class="column six">
                                    <label for="name">Name</label>
                                    <input type="text" id="name" name="name">
                                </div>
                                <div class="column six">
                                    <label for="email">Email</label>
                                    <input type="text" id="email" name="email">
                                </div>
                                <div class="column six">
                                    <label for="phone">Phone</label>
                                    <input type="text" id="phone" name="phone">
                                </div>
                                <div class="column six">
                                    <label for="persons">Number of guests</label>
                                    <select name="persons" id="persons">
                                        <option value="1" disabled selected="selected"> How many people? </option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                    </select>
                                </div>
                                <div class="column six">
                                    <label for="address">Mailing Address</label>
                                    <input type="text" id="address" name="address">
                                </div>

    <!--                             <div class="column six">
                                    <label for="which-wedding">Which wedding? 哪一場婚禮？</label>
                                    <select name="which-wedding" id="which-wedding">
                                        <option value="" disabled selected="selected"> Which wedding? 哪一場婚禮？</option>
                                        <option value="Taiwan">Taiwan Only 台灣</option>
                                        <option value="USA">USA Only 美國</option>
                                        <option value="Both">Both 台灣與美國</option>
                                    </select>
                                </div> -->
                                <input type="hidden" name="which-wedding" value="USA" />


    <!--                             <div class="column six auto-safe">
                                    <label for="autovalue">Security question</label>
                                    <input type="text" id="autovalue" name="autovalue">
                                    <i class="fa fa-refresh auto-refresh" title="Reload security question"></i>
                                </div> -->
                                <input type="hidden" name="submit">
                                <div class="clearfix"></div>
                                <input type="submit" value="I am attending &rarr;">
                                <div class="clearfix"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
            <!-- #Contact Section -->
        <?php } ?>

        <!-- Footer Section -->
        <footer>
            <div class="container">
                <div class="row">
                    <div class="column four copyright"><i class="fa fa-heart"></i> Love our parents,</div>
                    <div class="column four logo">J<span>&</span>D</div>
                    <div class="column four info">family, and friends <i class="fa fa-heart"></i></div>
                </div>
            </div>
        </footer>
        <!-- / Footer Section Ends -->
    </section>
    <!-- JavaScript Files - These ones are in footer
    ================================================== -->
    <script src="js/device.min.js"></script>
    <script src="js/imagesloaded.pkgd.js"></script>
    <!-- // <script src="js/SmoothScroll.js"></script> -->
    <script src="js/isotope.js"></script>
    <script src="js/jquery.isotope.sloppy-masonry.min.js"></script>
    <!-- // <script src="js/jquery.parallax.min.js"></script> -->
    <script src="js/jquery.scrollTo.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.mb.YTPlayer.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/retina.min.js"></script>
    <script src="js/jquery.soc-share.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyApYs2sM_nF1OI_udCnH5Jyyz4U2xe_-QA&amp;sensor=false"></script>
    <script src="js/custom.js"></script>
    <script>
        var usa_markers = [
            ['CHS Airport', 32.894547, -80.038164, 'airport', 'Charleston Airport'],
            ['Wedding Ceremony', 32.664664, -79.916277, 'wedding', 'The wedding will take place right on Folly Beach right behind the beach house where the reception will be.'],
            ['Wedding Reception', 32.664953, -79.916428, 'wedding', 'The wedding reception will take place in a beach house right on the water.'],
            ['The Battery', 32.770149, -79.930320, 'attraction', 'Originally constructed as a Civil War coastal defensive seawall, the battery is today famous for the beautiful antebellum houses that line the seafront.'],
            ['Arthur Ravenel Jr. Bridge', 32.804928, -79.931910, 'attraction', 'Known colloquially as the Cooper River bridge, the Arthur Ravenel Jr. Bridge is one of the best places to run or bike in Charleston with incredible views of the river and bay.'],
            ['Charleston Waterfront Park', 32.778027, -79.925253, 'attraction', 'A beautiful park along the Charleston waterfront.'],
            ['Magnolia Plantation', 32.878602, -80.090794, 'attraction', 'A historic plantation and popular tourist spot.'],
            ['College of Charleston', 32.783735, -79.937771, 'attraction', 'The top college in the city -- CofC boasts a beautiful campus'],
            ['Historic Charleston City Market', 32.781352, -79.927879, 'attraction', 'A must-see, this historic destination boasts a multitude of vendors and handmade, local products.'],
            ['Tides Folly Beach', 32.654533, -79.940278, 'hotel', 'Located right on Folly Beach, Tides is ideally located and well-reviewed.'],
            ['Water\'s Edge Inn', 32.657767, -79.944979, 'hotel', 'Within walking distance of Folly Beach, but in a little quieter area.'],
            ['Beach house rentals', 32.655175, -79.938563, 'hotel', 'Instead of getting a hotel room, another option is to rent a beach house. <a href="http://www.fredhollandrealty.com/" target="_blank">Fred Holland Realty</a> and <a href="http://www.avocetproperties.net/" target="_blank">Avocet Properties</a> are the two main companies'],
        ];
    </script>
</body>

</html>
