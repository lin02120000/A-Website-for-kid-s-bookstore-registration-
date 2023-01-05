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
    <title>Category 6-8</title>
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
            <a class="navlink" href="0-5.php">KIDS(0-5)</a>
            <a class="navlink" href="6-8.php">KIDS(6-8)</a>
            <a class="navlink" href="login.php">LOG IN</a>
            <a class="navlink" href="signup.php">SIGN UP</a>
            <div class="searchsection">
                <input type="text" id="searchbar" oninput="searchName()" placeholder="Search for Books..." size="60">
                <!--add name atrribute-->
                <!-- <button id="searchbutton">Search</button> -->
            </div>
        </nav>
    </header>
    <!-- Books for kidss by age 6-8 -->
    <section class="product-container">
        <h2 class="title">Kids' Books by Age 6-8</h2>
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

            <div class="flip-box-one lowp">
                <div class="flip-box-inner">
                    <div class="flip-box-front">
                        <img src="Picture/12.jpg">
                    </div>
                    <div class="flip-box-back">
                        <h4 class="title">About</h4>
                        <p class="about"> A new reader for younger fans based on the New York Times best-selling Emily
                            Windsnap novels. New York Times best-selling series by Liz Kessler, this underwater
                            adventure offers a sweet story about a confidence-bolstering friendship to new readers.
                        </p>
                    </div>
                </div>
                <div class="bookinfo">
                    <h4 class="name">SHONA FINDS HER VOICE</h4>
                    <h5 class="author">Liz Kessler</h5>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                    <a href="login.php" target="_blank" class="addtocart">$12.99<i class="fa fa-shopping-cart"></i></a>
                </div>
            </div>

            <div class="flip-box-one lowp">
                <div class="flip-box-inner">
                    <div class="flip-box-front">
                        <img src="Picture/13.jpg">
                    </div>
                    <div class="flip-box-back">
                        <h4 class="title">About</h4>
                        <p class="about">The Snow Queen is the most magical and profound of all Hans Andersen’s fairy tales. It is a
                            quest full of mystery, humour and adventure, and its uplifting theme is the power of
                            innocence and enduring love.
                        </p>
                    </div>
                </div>
                <div class="bookinfo">
                    <h4 class="name">THE SNOW QUEEN: A STORY IN SEVEN PARTS</h4>
                    <h5 class="author">Neil Philip</h5>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <a href="login.php" target="_blank" class="addtocart">$13.99<i class="fa fa-shopping-cart"></i></a>
                </div>
            </div>

            <div class="flip-box-one midp">
                <div class="flip-box-inner">
                    <div class="flip-box-front">
                        <img src="Picture/14.jpg">
                    </div>
                    <div class="flip-box-back">
                        <h4 class="title">About</h4>
                        <p class="about">Meet Bluey and the Heeler family in this adorable shaped board book! Based on the wildly
                            successful animated series Bluey.
                        </p>
                    </div>
                </div>
                <div class="bookinfo">
                    <h4 class="name">THE GREATEST IN THE WORLD!</h4>
                    <h5 class="author">Ben Clanton</h5>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                    <a href="login.php" target="_blank" class="addtocart">$15.99<i class="fa fa-shopping-cart"></i></a>
                </div>
            </div>

            <div class="flip-box-one midp">
                <div class="flip-box-inner">
                    <div class="flip-box-front">
                        <img src="Picture/15.jpg">
                    </div>
                    <div class="flip-box-back">
                        <h4 class="title">About</h4>
                        <p class="about">The world of Pokémon awaits you! Learn all about your favorite Pokémon in this fact-packed
                            updated guide to the animated series. Explore every region from Kanto to Galar, and discover
                            the people and Pokémon who live there. Trace Ash’s journey and get to know his friends and
                            travel companions.
                        </p>
                    </div>
                </div>
                <div class="bookinfo">
                    <h4 class="name">POKEMON VISUAL COMPANION</h4>
                    <h5 class="author">DK</h5>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                    </div>
                    <a href="login.php" target="_blank" class="addtocart">$16.99<i class="fa fa-shopping-cart"></i></a>
                </div>
            </div>

            <div class="flip-box-one highp">
                <div class="flip-box-inner">
                    <div class="flip-box-front">
                        <img src="Picture/16.jpg">
                    </div>
                    <div class="flip-box-back">
                        <h4 class="title">About</h4>
                        <p class="about">A giant panda who moves into the neighborhood and tells amazing tales. To Addy he tells a
                            story about the value of material goods. To Michael he pushes the boundaries of good and
                            bad. With graceful art and simple stories that are filled with love and enlightenment.
                        </p>
                    </div>
                </div>
                <div class="bookinfo">
                    <h4 class="name">ZEN SHORTS</h4>
                    <h5 class="author">Jon J Muth</h5>
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
                        <img src="Picture/17.jpg">
                    </div>
                    <div class="flip-box-back">
                        <h4 class="title">About</h4>
                        <p class="about">In the hilarious seventh book of this blockbuster graphic novel series, Narwhal wishes to see
                            a unicorn — and actually becomes one! When Jelly wonders what a unicorn is, Narwhal explains
                            that they’re pretty much narwhals of the land and then gets carried away with a grand plan to see one.
                        </p>
                    </div>
                </div>
                <div class="bookinfo">
                    <h4 class="name">NARWHALICORN AND JELLY</h4>
                    <h5 class="author">Ben Clanton</h5>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                    <a href="login.php" target="_blank" class="addtocart">$19.99<i class="fa fa-shopping-cart"></i></a>
                </div>
            </div>

            <div class="flip-box-one lowp">
                <div class="flip-box-inner">
                    <div class="flip-box-front">
                        <img src="Picture/18.jpg">
                    </div>
                    <div class="flip-box-back">
                        <h4 class="title">About</h4>
                        <p class="about">Learn about the Star Wars underworld in this thrilling, fully illustrated children’s book detailing the galaxy’s
                            most infamous bounty hunters, from Boba Fett to Cad Bane! Join wily pirate Hondo Ohnaka to learn about the galaxy’s shadowy
                            underworld in Star Wars: The Secrets of the Bounty Hunters.
                        </p>
                    </div>
                </div>

                <div class="bookinfo">
                    <h4 class="name">STAR WARS</h4>
                    <h5 class="author">Marc Sumerak</h5>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                    </div>
                    <a href="login.php" target="_blank" class="addtocart">$12.99<i class="fa fa-shopping-cart"></i></a>
                </div>
            </div>

            <div class="flip-box-one highp">
                <div class="flip-box-inner">
                    <div class="flip-box-front">
                        <img src="Picture/19.jpg">
                    </div>
                    <div class="flip-box-back">
                        <h4 class="title">About</h4>
                        <p class="about">As the Order of the Phoenix keeps watch over Harry Potter, troubled times have come to
                            Hogwarts in a year filled with secrets, subterfuge and suspicion. The deliciously dark fifth instalment
                            of Jim Kay's inspired reimagining of J.K. Rowling's classic series is an epic artistic achievement.
                        </p>
                    </div>
                </div>
                <div class="bookinfo">
                    <h4 class="name">HARRY POTTER</h4>
                    <h5 class="author">J.K. Rowling</h5>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                    <a href="login.php" target="_blank" class="addtocart">$23.99<i class="fa fa-shopping-cart"></i></a>
                </div>
            </div>

            <div class="flip-box-one midp">
                <div class="flip-box-inner">
                    <div class="flip-box-front">
                        <img src="Picture/20.jpg">
                    </div>
                    <div class="flip-box-back">
                        <h4 class="title">About</h4>
                        <p class="about">For young detective Aggie Morton and her friend Hector, an opportunity to dig up
                            fossils becomes even more thrilling when a corpse washes ashore in this fourth book in the Aggie
                            Morton, Mystery Queen series.
                        </p>
                    </div>
                </div>
                <div class="bookinfo">
                    <h4 class="name">AGGIE MORTON, MYSTERY QUEEN</h4>
                    <h5 class="author">Marthe Jocelyn</h5>
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
                        <img src="Picture/21.jpg">
                    </div>
                    <div class="flip-box-back">
                        <h4 class="title">About</h4>
                        <p class="about">New York Times Bestseller. National Book Award Longlist Finally in paperback! This handsome edition features French flaps. From bestselling and award-winning author Sara Pennypacker comes a beautifully wrought, utterly compelling novel about the powerful relationship between a boy and his fox. </p>
                    </div>
                </div>

                <div class="bookinfo">
                    <h4 class="name">PAX</h4>
                    <h5 class="author">Sara Pennypacker</h5>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                    <a href="login.php" target="_blank" class="addtocart">$14.99<i class="fa fa-shopping-cart"></i></a>
                </div>
            </div>

            <div class="flip-box-one highp">
                <div class="flip-box-inner">
                    <div class="flip-box-front">
                        <img src="Picture/22.jpg">
                    </div>
                    <div class="flip-box-back">
                        <h4 class="title">About</h4>
                        <p class="about">New York Times bestselling author Kazu Kibuishi says of Lightfall: “Beautifully drawn. Tim Probert has created a world readers will want to visit.” For fans of Amulet and middle grade readers who love sweeping worlds, two unlikely friends who get swept up in an epic quest to save their world. </p>
                    </div>
                </div>
                <div class="bookinfo">
                    <h4 class="name">LIGHTFALL: THE GIRL & THE GALDURIAN</h4>
                    <h5 class="author">Tim Probert</h5>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                    <a href="login.php" target="_blank" class="addtocart">$19.99<i class="fa fa-shopping-cart"></i></a>
                </div>
            </div>

            <div class="flip-box-one lowp">
                <div class="flip-box-inner">
                    <div class="flip-box-front">
                        <img src="Picture/23.jpg">
                    </div>
                    <div class="flip-box-back">
                        <h4 class="title">About</h4>
                        <p class="about">“Combines wonderful characters and history to create a story that will make you want to dive right in!” JERRY CRAFT, author of the Newbery Medal–winning New Kid. A splashy, contemporary middle grade graphic novel from bestselling comics creator Johnnie Christmas!
                        </p>
                    </div>
                </div>
                <div class="bookinfo">
                    <h4 class="name">SWIM TEAM</h4>
                    <h5 class="author">Johnnie Christmas</h5>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <a href="login.php" target="_blank" class="addtocart">$11.99<i class="fa fa-shopping-cart"></i></a>
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