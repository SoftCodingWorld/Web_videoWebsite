<?php session_start(); 
/* 
    Team Lead: Yujin Xiong
    Back End Developer: Michael Riesberry
    Front End Designer: Jingfei Wang
    Front End Developer(JS): Chunxia Pang
    Front End Developer(s)(HTML): Jingfei Wang, Yujin Xiong
*/
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="author" content="Group18_Section303_Assignment2">
    <title>Home Page_MovieStation</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <script src="js/jquery/jquery-1.12.1.min.js"></script> -->
    <link href="assignment2.css" rel="stylesheet" type="text/css">
    <script src="tstsearch.js" defer></script>
</head>

<body id="mainbody">

<?php include 'header.php' // Adds header.php to page, prints header and nav bar ?>

<!--creates contents of movie names, pictures and links to the trailers-->
<div id="main">
        <div id="content">
            <div class="box">
                <div class="head">
                    <h2 id="heading2">Popular TV Shows</h2>
                </div>
                <div class="movie">
                    <div class="movie-image">
                        <div class="title">
                            <span>Desperate Housewives</span>
                        </div>
                        <div class="picture">
                            <a href="https://www.youtube.com/watch?v=wgjs17XCXHc">
                                <img src="images/DesperateHousewives.jpg" alt="Deperate Housewives trailer" />
                            </a>
                        </div>
                    </div>
                </div>
                <div class="movie">
                    <div class="movie-image">
                        <div class="title">
                            <span>Friends</span>
                        </div>
                        <div class="picture">
                            <a href="https://www.youtube.com/watch?v=Q6OBgMxRons">
                                <img src="images/Friends.jpg" alt="Friends trailer" />
                            </a>
                        </div>
                    </div>
                </div>
                <div class="movie">
                    <div class="movie-image">
                        <div class="title">
                            <span>Grey's Anatomy</span>
                        </div>
                        <div class="picture">
                            <a href="https://www.youtube.com/watch?v=q1pcpgREQ5c">
                                <img src="images/Grey's_Anatomy.jpg" alt="Grey's Anatomy trailer" />
                            </a>
                        </div>
                    </div>
                </div>
                <div class="movie">
                    <div class="movie-image">
                        <div class="title">
                            <span>House of Cards</span>
                        </div>
                        <div class="picture">
                            <a href="https://www.youtube.com/watch?v=SvSkxBYuoQY">
                                <img src="images/HouseCards.jpg" alt="House of Cards trailer" />
                            </a>
                        </div>
                    </div>
                </div>
                <div class="movie">
                    <div class="movie-image">
                        <div class="title">
                            <span>Virgin River</span>
                        </div>
                        <div class="picture">
                            <a href="https://www.youtube.com/watch?v=DMNjH5MlQXc">
                                <img src="images/virgin_river.jpg" alt="Virgin River trailer" />
                            </a>
                        </div>
                    </div>
                </div>
                <div class="movie">
                    <div class="movie-image">
                        <div class="title">
                            <span>Young Sheldon</span>
                        </div>
                        <div class="picture">
                            <a href="https://www.youtube.com/watch?v=FStMMcj-RiA">
                                <img src="images/young_sheldon.jpg" alt="young_sheldon trailer" />
                            </a>
                        </div>
                    </div>
                </div>
                <div class="cl">&nbsp;</div>
            </div>
            <div class="box">
                <div class="head">
                    <h2 id="heading4">Popular Movies</h2>
                </div>
                <div class="movie">
                    <div class="movie-image">
                        <div class="title">
                            <span>Spider-Man</span>
                        </div>
                        <div class="picture">
                            <a href="https://www.youtube.com/watch?v=JfVOs4VSpmA">
                                <img src="images/spider-man-no-way-home.jpg" alt="Spider-Man trailer" />
                            </a>
                        </div>
                    </div>
                </div>
                <div class="movie">
                    <div class="movie-image">
                        <div class="title">
                            <span>Black Panther</span>
                        </div>
                        <div class="picture">
                            <a href="https://www.youtube.com/watch?v=4E2RNfQQImY">
                                <img src="images/Black_Panther.jpg" alt="Black_Panther trailer" />
                            </a>
                        </div>
                    </div>
                </div>
                <div class="movie">
                    <div class="movie-image">
                        <div class="title">
                            <span>John Wick</span>
                        </div>
                        <div class="picture">
                            <a href="https://www.youtube.com/watch?v=D-2KnLQFvsQ">
                                <img src="images/john-wick-4.jpg" alt="john-wick-4 trailer" />
                            </a>
                        </div>
                    </div>
                </div>
                <div class="movie">
                    <div class="movie-image">
                        <div class="title">
                            <span>Don't look up</span>
                        </div>
                        <div class="picture">
                            <a href="https://www.youtube.com/watch?v=RbIxYm3mKzI">
                                <img src="images/dont-look-up.jpg" alt="Don't-look-up trailer" />
                            </a>
                        </div>
                    </div>
                </div>
                <div class="movie">
                    <div class="movie-image">
                        <div class="title">
                            <span>Red Notice</span>
                        </div>
                        <div class="picture">
                            <a href="https://www.youtube.com/watch?v=Pj0wz7zu3Ms">
                                <img src="images/Red_Notice.jpg" alt="Red_Notice trailer" />
                            </a>
                        </div>
                    </div>
                </div>
                <div class="movie">
                    <div class="movie-image">
                        <div class="title">
                            <span>Halloween Kills</span>
                        </div>
                        <div class="picture">
                            <a href="https://www.youtube.com/watch?v=hL6R3HmQfPc">
                                <img src="images/Halloween-Kills.jpg" alt="Halloween-Kills trailer" />
                            </a>
                        </div>
                    </div>
                </div>
                <div class="cl">&nbsp;</div>
            </div>
            <div class="box">
                <div class="head">
                  <h2 id="heading5">Coming Soon</h2>
                </div>
                <div class="movie">
                    <div class="movie-image">
                        <div class="title">
                            <span>Orphan: First Kill</span>
                        </div>
                        <div class="picture">
                            <a href="https://www.youtube.com/watch?v=_uX6of3vBu0">
                                <img src="images/orphan-first-kill.jpg" alt="Orphan-First-Kills trailer" />
                            </a>
                        </div>
                    </div>
                </div>
                <div class="movie">
                    <div class="movie-image">
                        <div class="title">
                            <span>Beast</span>
                        </div>
                        <div class="picture">
                            <a href="https://www.youtube.com/watch?v=oQMc7Sq36mI">
                                <img src="images/beast.jpg" alt="Beast trailer" />
                            </a>
                        </div>
                    </div>
                </div>
                <div class="movie">
                    <div class="movie-image">
                        <div class="title">
                            <span>Blonde</span>
                        </div>
                        <div class="picture">
                            <a href="https://www.youtube.com/watch?v=aIsFywuZPoQ">
                                <img src="images/blonde.jpg" alt="Blonde trailer" />
                            </a>
                        </div>
                    </div>
                </div>
                <div class="movie">
                    <div class="movie-image">
                        <div class="title">
                            <span>Bros</span>
                        </div>
                        <div class="picture">
                            <a href="https://www.youtube.com/watch?v=BQIeBB9XMe8">
                                <img src="images/bros.jpg" alt="Bros trailer" />
                            </a>
                        </div>
                    </div>
                </div>
                <div class="movie">
                    <div class="movie-image">
                        <div class="title">
                            <span>Ticket to Paradise</span>
                        </div>
                        <div class="picture">
                            <a href="https://www.youtube.com/watch?v=hkP4tVTdsz8">
                                <img src="images/ticket-to-paradise.jpg" alt="Ticket to Paradise trailer" />
                            </a>
                        </div>
                    </div>
                </div>
                <div class="movie">
                    <div class="movie-image">
                        <div class="title">
                            <span>Black Adam</span>
                        </div>
                        <div class="picture">
                            <a href="https://www.youtube.com/watch?v=X0tOpBuYasI">
                                <img src="images/black-adam.jpg" alt="Black-Adam trailer" />
                            </a>
                        </div>
                    </div>
                </div>
                <div class="cl">&nbsp;</div>
            </div>
        </div>
    </div>
    <div>
            <h3 id="heading3">About Us</h3>
            <p id="intro">ALgonquin College: CST8285 group 18<br>
                Group member: Jingfei Wang; Chunxia Pang; Yujin Xiong; Michael Riesberry.
            </p>
        </div>
    <?php include 'footer.php' // Adds footer.php to page, prints footer ?>