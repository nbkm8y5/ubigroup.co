<?php
include_once 'php/keywords.php';
include_once 'php/analyticstracking.php';
include_once 'php/head.php';
include_once 'php/scripts.php';
$keywords = new Keywords();
$head = new Head();
$tracker = new Analytics();
$scripts = new Scripts();
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
        <?php
        echo $head->getPrimaryHead();
        echo $keywords->getTitle();
        echo $head->getMetaGroup();
        echo $head->getHeadCssLinks();
        echo $head->getHeadJsLinks();
        echo $tracker->getAnalyticScript();
        echo $tracker->getOutboundClickScript();
        ?>
    </head>
    <body>
        <header>
            <nav class="navbar navbar-default navbar-fixed-top">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="<?php echo $keywords->getMainPageUrl(); ?>"><img src="<?php echo $keywords->getMainPageUrl(); ?>/images/home_loans_south_florida_logo.svg" alt="<?php echo $keywords->getName(); ?> Logo" style="max-height: 50px"><?php echo $keywords->getName(); ?></a>
                    </div>
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="<?php echo $keywords->getMainPageUrl(); ?>/<?php echo $keywords->getRedirectUrlUnique(); ?>-redirect.php" onclick="trackOutboundLink('<?php echo $keywords->getMainPageUrl(); ?>/<?php echo $keywords->getRedirectUrlUnique(); ?>-redirect.php');
                                    return false;">Need Help? Visit our recommended financial institutions!</a></li>
                            <li><a href="<?php echo $keywords->getPhoneLink(); ?>">Call Us at <?php echo $keywords->getPhoneNumber(); ?></a></li>
                            <li><a href="<?php echo $keywords->getMainPageUrl(); ?>/contact-<?php echo $keywords->getRedirectUrlUnique(); ?>-for-more-information.php">Contact Us at <?php echo $keywords->getName(); ?></a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <section>
            <div class="container-fluid text-center">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <img class="first-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="First slide">
                            <div class="container">
                                <div class="carousel-caption">
                                    <h1 class="featurette-heading">We have simplified the process of purchasing or refinancing your home at <?php echo $keywords->getName(); ?>.</h1>
                                    <p class="lead"><a class="btn btn-lg btn-primary" href="<?php echo $keywords->getMainPageUrl(); ?>/<?php echo $keywords->getRedirectUrlUnique(); ?>-redirect.php" role="button" onclick="trackOutboundLink('<?php echo $keywords->getMainPageUrl(); ?>/<?php echo $keywords->getRedirectUrlUnique(); ?>-redirect.php');
                                            return false;">Learn more with <?php echo $keywords->getName(); ?></a></p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <img class="second-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Second slide">
                            <div class="container">
                                <div class="carousel-caption">
                                    <h1 class="featurette-heading">FHA Loan information at <?php echo $keywords->getName(); ?></h1>
                                    <img style="margin-right: auto; margin-left: auto; display: block"class="img-responsive img-rounded" src="<?php echo $keywords->getMainPageUrl(); ?>/images/department_of_housing_and_urban_development_logo.png">
                                    <p class="lead">If you are a first-time home buyer, you will be interested in learning  about the
                                        Federal Housing Administration's programs for first time homebuyers. </p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <img class="third-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Third slide">
                            <div class="container">
                                <div class="carousel-caption">
                                    <h2 class="featurette-heading">Your credit score. <span class="text-info">Prepare it to enhance your purchasing power.</span></h2>
                                    <p class="lead"><?php echo $keywords->getName(); ?> recommends you prepare yourself to increase your purchasing power of a home.  Your credit score determines if a bank, credit card company or car dealership will extend credit to you and what the interest rate will be.
                                        Be mindful of the credit decisions that you make today that can potentially affect tomorrow. <p>
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
                </div>
            </div>
            <div class="container-fluid text-center">
                <div class="col-md-offset-4 col-md-4">
                    <h2>Contact Home Loans South Florida</h2>
                    <form action="<?php echo $keywords->getRedirectUrlUnique(); ?>-contact-confirmation.php" method="post" enctype="application/x-www-form-urlencoded" role="form">
                        <div class="form-group">
                            <label class="control-label" for="fName">First Name</label>
                            <input type="text" class="form-control" name="firstName"value="" placeholder="Enter First Name"
                                   required>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="lName">Last Name</label>
                            <input type="text" class="form-control" name="lastName" value="" placeholder="Enter Last Name"
                                   required>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="zip">Zip Code</label>
                            <input type="text" class="form-control" name="zipCode" value="" placeholder="Enter Zip Code"
                                   required>
                        </div>
                        <div class="form-group"> 
                            <label class="control-label" for="email">Email address</label>
                            <input type="email" class="form-control" name="emailAddress" value="" placeholder="Enter email"
                                   required>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="phone">Preferred Phone Number</label>
                            <input type="text" class="form-control" name="phoneNumber" value="" placeholder="Enter Preferred Phone Number"
                                   required>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="lang">I would prefer to be contacted in:</label>
                            <select class="form-control" name="language" required>
                                <option>English</option>
                                <option>Spanish</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="loan">I am interested in:</label>
                            <select class="form-control" name="loan" required>
                                <option>Purchasing a home</option>
                                <option>Refinancing my home</option>
                            </select>
                        </div>
                        <div class='form-group'>
                            <button type="submit" class="btn btn-default">Contact <?php echo $keywords->getName(); ?></button>
                            <button type="reset" class="btn btn-danger">Reset</button>
                        </div>
                </div>
                </form>
            </div>
        </div>
    </section>
    <footer>
        <div class="container-fluid">
            <p class="pull-right"><a href="<?php echo $keywords->getMainPageUrl(); ?>" target="_top">Back to top of <?php echo $keywords->getName(); ?></a></p>
            <p>&copy; <?php
                echo date('Y');
                echo ' ';
                echo $keywords->getName();
                ?>
        </div>
    </footer>
    <?php
    echo $scripts->getJquery();
    echo $scripts->getBootStrap();
    ?>
</body>
</html>