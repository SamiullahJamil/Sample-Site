<!DOCTYPE html>
<html>

	<head>
	    <title>Angle Electronics | Welcome to our website</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width,initial-scale=1.0" />
	    <link href="bootstrap/css/bootstrap.min.css" type="text/css" rel="stylesheet" />
	    <script src="jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="main.js" type="text/javascript"></script>
        <link href='https://fonts.googleapis.com/css?family=Russo+One|Maven+Pro' rel='stylesheet' type='text/css'>
        <link href="style.css" type="text/css" rel="stylesheet" />
	</head>

	<body>
        <?php include "components/navbar.php";?>
        <div style="margin-top: 50px;" id="topOfScroll"></div>
        <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="5000" style="display: none;">
        <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="images/carousel/1.jpg" alt="Tink time">
                </div>

                <div class="item">
                    <img src="images/carousel/2.jpg" alt="Get it">
                </div>

                <div class="item">
                    <img src="images/carousel/3.jpg" alt="Buisness is passionate">
                </div>
            </div>
        </div>
        <div class="section section1">
            <h1>What we do?</h1>
            <div class="row">
                <div class="col-md-6">
                    <h3>Project Development</h3>
                    <div class="sectionBox">
                        <p>Working on one? We are here to accomplish it.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <h3>Circuit Analysis</h3>
                    <div class="sectionBox">
                        <p>Doesn't Know what is the circuit? Get the one analyzed.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <h3>Solution Proposals</h3>
                    <div class="sectionBox">
                        <p>Doesn't Know how to start? We propose here what to do.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <h3>Market Products & Projects</h3>
                    <div class="sectionBox">
                        <p>Need an electronic component? Get it in the cheapest rates.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="section section2" id="imageChange">
            <h1>Our Team</h1>
            <div class="row">
                <div class="col-md-3">
                    <img src="images/team/1.jpg" alt="Sample Name">
                    <div class="sectionBox">
                        <h6>Sample Name</h6>
                    </div>
                </div>
                <div class="col-md-3">
                    <img src="images/team/1.jpg" alt="Sample Name">
                    <div class="sectionBox">
                        <h6>Sample Name</h6>
                    </div>
                </div>
                <div class="col-md-3">
                    <img src="images/team/1.jpg" alt="Sample Name" />
                    <div class="sectionBox">
                        <h6>Sample Name</h6>
                    </div>
                </div>
                <div class="col-md-3">
                    <img src="images/team/1.jpg" alt="Samiullah Jamil" />
                    <div class="sectionBox">
                        <h6>Sample Name</h6>
                    </div>
                </div>
            </div>
        </div>
        <div class="section section3">
            <h1>Picture Gallery</h1>
            <div class="row">
                <div class="col-md-3"><img src="images/gallery/1.jpg" alt="Picture1" /></div>
                <div class="col-md-3"><img src="images/gallery/1.jpg" alt="Picture1" /></div>
                <div class="col-md-3"><img src="images/gallery/1.jpg" alt="Picture1" /></div>
                <div class="col-md-3"><img src="images/gallery/1.jpg" alt="Picture1" /></div>
                <div class="col-md-3"><img src="images/gallery/1.jpg" alt="Picture1" /></div>
                <div class="col-md-3"><img src="images/gallery/1.jpg" alt="Picture1" /></div>
                <div class="col-md-3"><img src="images/gallery/1.jpg" alt="Picture1" /></div>
                <div class="col-md-3"><img src="images/gallery/1.jpg" alt="Picture1" /></div>
                <div class="col-md-3"><img src="images/gallery/1.jpg" alt="Picture1" /></div>
                <div class="col-md-3"><img src="images/gallery/1.jpg" alt="Picture1" /></div>
                <div class="col-md-3"><img src="images/gallery/1.jpg" alt="Picture1" /></div>
                <div class="col-md-3"><img src="images/gallery/1.jpg" alt="Picture1" /></div>
                <div class="col-md-3"><img src="images/gallery/1.jpg" alt="Picture1" /></div>
                <div class="col-md-3"><img src="images/gallery/1.jpg" alt="Picture1" /></div>
                <div class="col-md-3"><img src="images/gallery/1.jpg" alt="Picture1" /></div>
                <div class="col-md-3"><img src="images/gallery/1.jpg" alt="Picture1" /></div>
            </div>
        </div>
        <div class="section section4">
            <h1>Our Sponsors</h1>
            <div class="row">
                <div class="col-md-4"><a href="#" class="sponsor">Sponsor 1 Logo</a></div>
                <div class="col-md-4"><a href="#" class="sponsor">Sponsor 1 Logo</a></div>
                <div class="col-md-4"><a href="#" class="sponsor">Sponsor 1 Logo</a></div>
            </div>
        </div>
        <?php include "components/footer.php"?>
        <script src="main.js" type="text/javascript"></script>
	</body>

</html>