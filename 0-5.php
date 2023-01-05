<!DOCTYPE html>

<html lang="en">
<!--
        Author: Lin Chen, Junjie Xu, Yang Xu
        Date: 10-11-2022
        Section: CST 8285 Assignment 2
        This is the index.html page.
    -->

<head>
    <meta name=" author " content="Lin Chen, Junjie Xu, Yang Xu">
    <meta name=" description " content="CST8285 Assignment2">
    <meta name="keywords" content="kids, books">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Category 0-5</title>
    <link rel="stylesheet" href="CSS/style.css" type="text/css">
    <link rel="stylesheet" href="CSS/category0-5.css" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="JS/filter.js" defer></script>
    <script src="JS/search.js" defer></script>
</head>

<body class="mainbody">
    <header>
        <img src="Picture/headerback.jpg" alt="background picture" id="imgheader">

        <nav class="navigation">
            <a class="navlink" href="index.php">HOME</a>
            <a class="navlink" href="0-5.php" id="page0">KIDS(0-5)</a>
            <a class="navlink" href="6-8.php" id="page6">KIDS(6-8)</a>
            <a class="navlink" href="login.php">LOG IN</a>
            <a class="navlink" href="signup.php">SIGN UP</a>
            <div class="searchsection">
                <input type="text" id="searchbar" oninput="searchName()" placeholder="Search for Books..." size="60">
                <!--add name atrribute-->
                <!--<button type="submit">Search</button>-->
            </div>
        </nav>
    </header>
    <!-- Books for kidss by age 0-5 -->
    <section class="product-container aaa">
        <h2 class="title">Kids' Books by Age 0-5</h2>
        <div class="selectbox">
            <label for="filter">Filter By Price</label>
            <select name="filter" id="filter">
                <option value="all" id="all">All</option>
                <option value="highprice" id="highprice">Above $17</option>
                <option value="medprice" id="midprice">$14-$17</option>
                <option value="lowprice" id="lowprice">Under $14</option>
            </select>
            <button id="filterbutton" onclick="filterPrice()">Filter</button>
        </div>

        <div class="flip-box">

            <div class="flip-box-one highp">
                <div class="flip-box-inner">
                    <div class="flip-box-front">
                        <img class="bookimg" src="Picture/00.jpg">
                    </div>
                    <div class="flip-box-back">
                        <h4 class="title">About</h4>
                        <p class="about">Take your toddler on an ocean adventure in this lift-the-flap pop-up book. Toddlers will have
                            fun
                            lifting the flaps
                            to reveal the adorable sea animals and play peekaboo!
                        </p>
                    </div>
                </div>
                <div class="bookinfo">
                    <h4 class="name">POP-UP PEEKABOO!</h4>
                    <h5 class="author">DK</h5>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                    <a href="login.php" target="_blank" class="addtocart">$11.99<i class="fa fa-shopping-cart"></i></a>
                </div>
            </div>

            <div class="flip-box-one lowp">
                <div class="flip-box-inner">
                    <div class="flip-box-front">
                        <img class="bookimg" src="Picture/01.jpg">
                    </div>
                    <div class="flip-box-back">
                        <h4 class="title">About</h4>
                        <p class="about">Winter has arrived and Bear is having a hard time falling asleep! Luckily, his friends are
                            here to help
                            in this cozy Classic Board Book! It’s winter and deep in the forest, Bear should be fast
                            asleep.
                        </p>
                    </div>
                </div>
                <div class="bookinfo">
                    <h4 class="name">BEAR CAN'T SLEEP</h4>
                    <h5 class="author">Karma Wilson</h5>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <a href="login.php" target="_blank" class="addtocart">$12.99<i class="fa fa-shopping-cart"></i></a>
                </div>
            </div>

            <div class="flip-box-one midp">
                <div class="flip-box-inner">
                    <div class="flip-box-front">
                        <img class="bookimg" src="Picture/02.jpg">
                    </div>
                    <div class="flip-box-back">
                        <h4 class="title">About</h4>
                        <p class="about">Meet Bluey and the Heeler family in this adorable shaped board book! Based on the wildly
                            successful animated series Bluey.Spend the day with Bluey, Bingo, and their parents in their home! Play
                             Hairdresser with Bluey, Rug Island with Bingo, and more in this colorful shaped board book.
                        </p>
                    </div>
                </div>
                <div class="bookinfo">
                    <h4 class="name">BLUEY: AT HOME WITH THE HEELERS</h4>
                    <h5 class="author">Penguin Young Readers Licenses</h5>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                    <a href="login.php" target="_blank" class="addtocart">$16.99<i class="fa fa-shopping-cart"></i></a>
                </div>
            </div>

            <div class="flip-box-one midp">
                <div class="flip-box-inner">
                    <div class="flip-box-front">
                        <img class="bookimg" src="Picture/03.jpg">
                    </div>
                    <div class="flip-box-back">
                        <h4 class="title">About</h4>
                        <p class="about">The award-winning team of Yolen and Teague have created a fun, engaging book sure to help children
                             handle anger and frustration. Everybody gets mad sometimes. Parents, educators, and children can talk about it.
                        </p>
                    </div>
                </div>
                <div class="bookinfo">
                    <h4 class="name">HOW DO DINOSAURS SAY I'M MAD?</h4>
                    <h5 class="author">Jane Yolen</h5>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                    <a href="login.php" target="_blank" class="addtocart"> $16.99<i class="fa fa-shopping-cart"></i></a>
                </div>
            </div>

            <div class="flip-box-one lowp">
                <div class="flip-box-inner">
                    <div class="flip-box-front">
                        <img class="bookimg" src="Picture/04.jpg">
                    </div>
                    <div class="flip-box-back">
                        <h4 class="title">About</h4>
                        <p class="about">A baby book inspired by one of the best-loved children’s books ever. Guess how much
                            it will be treasured when baby grows up! Set against beautiful illustrations from Guess How
                            Much I Love You.
                        </p>
                    </div>
                </div>
                <div class="bookinfo">
                    <h4 class="name">GUESS HOW MUCH I LOVE YOU: BABY BOOK</h4>
                    <h5 class="author">Sam Mcbratney</h5>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                    <a href="login.php" target="_blank" class="addtocart"> $12.99<i class="fa fa-shopping-cart"></i></a>
                </div>
            </div>

            <div class="flip-box-one highp">
                <div class="flip-box-inner">
                    <div class="flip-box-front">
                        <img class="bookimg" src="Picture/05.jpg">
                    </div>
                    <div class="flip-box-back">
                        <h4 class="title">About</h4>
                        <p class="about">The captivating new companion to international bestsellers Here We Are and What
                            We’ll Build.A timely story for families everywhere.
                        </p>
                    </div>
                </div>
                <div class="bookinfo">
                    <h4 class="name">MEANWHILE BACK ON EARTH</h4>
                    <h5 class="author">Oliver Jeffers</h5>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                    <a href="login.php" target="_blank" class="addtocart">$17.99<i class="fa fa-shopping-cart"></i></a>
                </div>
            </div>

            <div class="flip-box-one highp">
                <div class="flip-box-inner">
                    <div class="flip-box-front">
                        <img class="bookimg" src="Picture/06.jpg">
                    </div>
                    <div class="flip-box-back">
                        <h4 class="title">About</h4>
                        <p class="about">Take your toddler on an ocean adventure in this lift-the-flap pop-up book. Toddlers will have
                            fun lifting the flaps  to reveal the adorable sea animals and play peekaboo!
                        </p>
                    </div>
                </div>
                <div class="bookinfo">
                    <h4 class="name">THE SOUR GRAPE</h4>
                    <h5 class="author">JORY JOHN</h5>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                    <a href="login.php" target="_blank" class="addtocart">$11.99<i class="fa fa-shopping-cart"></i></a>
                </div>
            </div>

            <div class="flip-box-one lowp">
                <div class="flip-box-inner">
                    <div class="flip-box-front">
                        <img class="bookimg" src="Picture/07.jpg">
                    </div>
                    <div class="flip-box-back">
                        <h4 class="title">About</h4>
                        <p class="about">Don’t miss the sixth picture book in the #1 New York Times bestselling Food Group
                             series that’s ripe with humor from Jory John and Pete Oswald! The Sour Grape holds grudges
                              for every reason under the sun.
                        </p>
                    </div>
                </div>
                <div class="bookinfo">
                    <h4 class="name">BLACK GOLD</h4>
                    <h5 class="author">Laura Obuobi</h5>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <a href="login.php" target="_blank" class="addtocart">$12.99<i class="fa fa-shopping-cart"></i></a>
                </div>
            </div>

            <div class="flip-box-one midp">
                <div class="flip-box-inner">
                    <div class="flip-box-front">
                        <img class="bookimg" src="Picture/08.jpg">
                    </div>
                    <div class="flip-box-back">
                        <h4 class="title">About</h4>
                        <p class="about">A follow-up to A Place Called Home, this beautifully illustrated lift-the-flap book
                             explores and celebrates different people, places, cultures and traditions from across the world.
                             Featuring eight festivals, this title provides a glimpse into diverse traditions, customs and beliefs.
                        </p>
                    </div>
                </div>
                <div class="bookinfo">
                    <h4 class="name">LONELY PLANET KIDS A TIME TO CELEBRATE</h4>
                    <h5 class="author">Lonely Planet Kids, Kate Baker</h5>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                    <a href="login.php" target="_blank" class="addtocart">$16.99<i class="fa fa-shopping-cart"></i></a>
                </div>
            </div>

            <div class="flip-box-one highp">
                <div class="flip-box-inner">
                    <div class="flip-box-front">
                        <img class="bookimg" src="Picture/09.jpg">
                    </div>
                    <div class="flip-box-back">
                        <h4 class="title">About</h4>
                        <p class="about">Take your toddler on an ocean adventure in this lift-the-flap pop-up book. Toddlers will have
                            fun lifting the flaps to reveal the adorable sea animals and play peekaboo!
                        </p>
                    </div>
                </div>
                <div class="bookinfo">
                    <h4 class="name">PIXAR BUDDY BLOCK</h4>
                    <h5 class="author">Pixar Studios</h5>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                    <a href="login.php" target="_blank" class="addtocart">20.99<i class="fa fa-shopping-cart"></i></a>
                </div>
            </div>

            <div class="flip-box-one midp">
                <div class="flip-box-inner">
                    <div class="flip-box-front">
                        <img class="bookimg" src="Picture/10.jpg">
                    </div>
                    <div class="flip-box-back">
                        <h4 class="title">About</h4>
                        <p class="about">Ludwig Bemelmans's beloved character Madeline is back, and here to teach young readers
                             how to count. Using familiar faces and settings from the classic and beloved Madeline books, readers will
                              delight in learning how to count 1 through ten with Madeline!
                        </p>
                    </div>
                </div>
                <div class="bookinfo">
                    <h4 class="name">MADELINE'S 123</h4>
                    <h5 class="author">Ludwig Bemelmans</h5>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                    </div>
                    <a href="login.php" target="_blank" class="addtocart">$15.99<i class="fa fa-shopping-cart"></i></a>
                </div>
            </div>

            <div class="flip-box-one lowp">
                <div class="flip-box-inner">
                    <div class="flip-box-front">
                        <img class="bookimg" src="Picture/11.jpg">
                    </div>
                    <div class="flip-box-back">
                        <h4 class="title">About</h4>
                        <p class="about">Where do the trains go? There and back. Let’s sing a train song. All down the track.
                             Toddlers and babies love trains and the noises they make. Train Song uses repeating verse and bright photographs
                              to match this enthusiasm with a unique take on the conceptual sound book that is perfect for reading aloud.
                        </p>
                    </div>
                </div>
                <div class="bookinfo">
                    <h4 class="name">LISTEN UP! TRAIN SONG</h4>
                    <h5 class="author">Victoria Allenby</h5>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                    <a href="login.php" target="_blank" class="addtocart">$9.99<i class="fa fa-shopping-cart"></i></a>
                </div>
            </div>

        </div>
    </section>

    <footer>
        <div id="footercontainer">
            <p id="follow">Follow Us</p>
            <a id="fbicon" class="followicon" target="black" href="https://www.facebook.com/"><img src="Picture/facebook.jpg" alt="facebook icon"></a>
            <a id="twicon" class="followicon" target="black" href="https://twitter.com"><img src="Picture/twitter.jpg" alt="twitter icon"></a>
            <a id="isicon" class="followicon" target="black" href="https://www.instagram.com"><img src="Picture/instagram.jpg" alt="instagram icon"></a>
            <p id="copyright">© Copy right 2022 .All Rights Reserved.</p>
        </div>
    </footer>

</body>

</html>