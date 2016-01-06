<?php
include_once 'includes/analyticstracking.php';
$tracker = new Analytics();
?>
<!DOCTYPE html>
<!--[if IE 8]>
<html class="no-js lt-ie9 ie8" lang="en"> <![endif]-->
<!--[if IE 9]>
<html class="ie9" lang="en"> <![endif]-->
<!--[if IE 10]>
<html class="ie10" lang="en"> <![endif]-->
<!--[if (gt IE 10)|!(IE)]>
<html lang="en"> <![endif]-->
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>UBI Group | Luxury Home Financing | Home Loans</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"
          integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"
            integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS"
            crossorigin="anonymous"></script>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php
    echo $tracker->getAnalyticScript();
    echo $tracker->getOutboundClickScript();
    ?>
</head>
<body>
<header>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="https://ubigroup.co"><img src="images/UBI-GROUP-LOGO-white.png"></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a href="http://saddydelgado.com/property/index/lang/en">Luxury Homes</a></li>
                    <li><a href="http://saddydelgado.com/property/index/lang/en">Luxury Condos</a></li>
                    <li><a href="#">Meet Raul Ruiz</a></li>
                    <li><a href="https://www.mortgage.com/citimortgage/BAH.aspx?LOID=raulruiz">Contact</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <p>Sign up for exclusive listing reports</p>
                    <a href="#">
                        <button id="newsletter" type="button" class="btn btn-danger">Sign Up!</button>
                    </a>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
</header>

<!-- Carousel
    ================================================== -->
<div id="carousel_container" class="container-fluid">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img class="first-slide"
                     src="images/630_leucadendra_dr/630_LEUCADENDRA_DR_ONE.jpg"

                     alt="First slide">
                <div class="container">
                    <div class="carousel-caption">
                        <h3>We have simplified the process of finding your dream luxury home and obtaining finance.</h3>
                        <h5>I would like to:</h5>
                        <p><a class="btn btn-lg btn-danger"
                              href="https://www.mortgage.com/citimortgage/BAH.aspx?LOID=raulruiz" role="button">Call
                                Raul Ruiz Today!</a></p>
                        <p><a class="btn btn-lg btn-danger"
                              href="https://www.mortgage.com/citimortgage/BAH.aspx?LOID=raulruiz" role="button">Set up
                                an appointment online!</a></p>
                    </div>
                </div>
            </div>
            <div class="item">
                <img class="second-slide"
                     src="images/630_leucadendra_dr/630_LEUCADENDRA_DR_TWO.jpg"
                     alt="Second slide">
                <div class="container">
                    <div class="carousel-caption">
                        <h1>Luxury homes and the financing all with one team.</h1>
                        <p><a class="btn btn-lg btn-danger"
                              href="https://www.mortgage.com/citimortgage/BAH.aspx?LOID=raulruiz" role="button">Call
                                today!</a></p>
                    </div>
                </div>
            </div>
            <div class="item">
                <img class="third-slide"
                     src="images/630_leucadendra_dr/630_LEUCADENDRA_DR_THREE.jpg"
                     alt="Third slide">
                <div class="container">
                    <div class="carousel-caption">
                        <h1>Luxury Penthouses</h1>
                        <p>It's about Style...Luxurious, Distinctive, Breathtaking. Every detail of these magnificent
                            one of a kind penthouses are perfectly executed.</p>
                        <p><a class="btn btn-lg btn-danger" href="#" role="button">Schedule an appointment today!</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div><!-- /.carousel -->
</div>
<div id="featured_properties" class="container">
    <h1>Featured Properties</h1>
</div>
<div id= "listings" class="container">
    <div class="embed-responsive embed-responsive-16by9">
        <iframe class="embed-responsive-item" width="560" height="315" src="https://www.youtube.com/embed/PMaKAAT1MlM" frameborder="0" allowfullscreen></iframe>
    </div>
    <div class="col-md-4 text-center">
        <img class="img-rounded" src="images/630_leucadendra_dr/630_LEUCADENDRA_DR_MINI.jpg" alt="630 Leucadendra Dr" height="140">
        <h2>630 LEUCADENDRA DR</h2>
        <p class="text-left">Located w/in the chic Gables Estates waterfront community, this Mediterranean compound is a rare combination of privacy & grandeur.The resort-style home conveys classic elegance throughout 12,098SF of interior luxury living space on a 70,461SF lot landscaped to accentuate South Florida's tropical wonders.The 7B, 9FB & 2HB SMART HOME complete w/high-end design features,state of the art gym, chef's kitchen, wine cellar & more. Boaters will appreciate 200ft of waterfront w/easy access to open waters. </p>
        <p><a class="btn btn-danger" href="http://saddydelgado.com/property/propertydetail/t/630-LEUCADENDRA-DR/type/featured/id/36488/lang/en" role="button">View details &raquo;</a></p>
    </div>
    <div class="col-md-4 text-center">
        <img class="img-rounded" src="images/20_CASUARINA_CONCOURSE/20.jpg" alt="20 CASUARINA CONCOURSE" height="140">
        <h2>20 CASUARINA CONCOURSE</h2>
        <p class="text-left">Opportunities abound in the unique waterfront property in Gables Estates, Coral Gables' most exclusive, guard gated, waterfront community. 2.55 acres with 515 feet on the water. No bridges to bay just around the corner. So many opportunities to build/deve lop. Lot One is 52,502 SF with 202 feet on the water- Offered at $8.2M. Lot Two is 60,245 SF with 313 feet on the water- offered at $8.9M. Or purchase the whole parcel for $16.9. Build the home of your dreams!</p>
        <p><a class="btn btn-danger" href="http://saddydelgado.com/property/propertydetail/t/20-CASUARINA-CONCOURSE/type/featured/id/36895/lang/en" role="button">View details &raquo;</a></p>
    </div>
    <div class="col-md-4 text-center">
        <img class="img-rounded" src="images/2050_n_bay_rd/2050.jpg" alt="2050 N Bay Road" height="140">
        <h2>2050 N BAY RD</h2>
        <p class="text-left">Old World Charm w/modern flair, this spectacular property sits on 33,000 sq ft of privacy. A long tree lined entrance takes you to your perfectly restored by Wallace Tutt 1930s Spanish estate. 9bd/8ba fill the ultra-luxurious home. Formal & casual areas p erfect for entertaining and daily living including tennis court, gym, resort style backyard, guesthouse and state of the art recording studio. 160 ft on the water with private dock and wide lagoon views. Minutes from dining, shopping and Lincoln Road.</p>
        <p><a class="btn btn-danger" href="http://saddydelgado.com/property/propertydetail/t/2050-N-BAY-RD/type/featured/id/34851/lang/en" role="button">View details &raquo;</a></p>
    </div>
</div>
<div id="featured_properties" class="container">
    <h1>Meet Raul Ruiz</h1>
</div>
<div class="container">
    <div class="row featurette">
        <div class="col-md-7 col-md-push-5">
            <h2 class="featurette-heading">Luxury Home Financing. <span class="text-muted">See for yourself.</span></h2>
            <p class="lead">Everyone’s economic and life situation is unique, and I keep that in mind when providing financial advice. My 15+ years of lending experience has enabled me to efficiently identify and support the diverse needs of my clients, which range from first time home buyers, non-U.S. residents, self-employed entrepreneurs, and multiple property owners. What stands out to my clients is my commitment to learning about their goals and using them to help build a solid financial plan to ensure they are not only met, but surpassed.
                My specialties include foreign national programs with currency exchanges, new construction business, jumbo loans & first time home buyer programs.</p>
        </div>
        <div id ="feature_img" class="col-md-5 col-md-pull-7">
            <img class="featurette-image img-responsive center-block" src="images/1b731af.jpg" alt="Raul Ruiz">
        </div>
    </div>
</div>
<footer>
    <div id="footer" class="container">
    </div>
</footer>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>
