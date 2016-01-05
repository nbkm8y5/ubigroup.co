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
                        <!-- Change the name of the logo svg -->
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
            </nav>
        </header>
        <section>
            <div class="jumbotron">
                <div class="container-fluid text-center">
                    <div class="col-md-offset-2 col-md-8">
                        <h3>We have simplified the process finding the right financial institutions for purchasing or refinancing your home at <?php echo $keywords->getName(); ?>.</h3>
                        <h5>I would like to:</h5>
                        <form>
                            <a href="<?php echo $keywords->getMainPageUrl(); ?>/<?php echo $keywords->getRedirectUrlUnique(); ?>-redirect.php" class="btn btn-info btn-default btn-lg" role="button" onclick="trackOutboundLink('<?php echo $keywords->getMainPageUrl(); ?>/<?php echo $keywords->getRedirectUrlUnique(); ?>-redirect.php');
                                    return false;">Visit our recommended financial institutions!</a>
                            <a href="<?php echo $keywords->getMainPageUrl(); ?>/contact-<?php echo $keywords->getRedirectUrlUnique(); ?>-for-more-information.php" class="btn btn-info btn-default btn-lg" role="button">Contact <?php echo $keywords->getName(); ?>!</a>
                        </form>
                        <h3>You can call <?php echo $keywords->getName(); ?> at (305) 310-9178, <a href="<?php echo $keywords->getMainPageUrl(); ?>/<?php echo $keywords->getRedirectUrlUnique(); ?>-redirect.php" style="color: #fff" onclick="trackOutboundLink('<?php echo $keywords->getMainPageUrl(); ?>/<?php echo $keywords->getRedirectUrlUnique(); ?>-redirect.php');
                                return false;">apply online</a>, or <a href="<?php echo $keywords->getMainPageUrl(); ?>/contact-<?php echo $keywords->getRedirectUrlUnique(); ?>-for-more-information.php" style="color: #fff">contact us!</a></h3>
                    </div>
                </div>
            </div>
            <div class="container-fluid text-center">
                <div class="container marketing">
                    <div class="row">
                        <div class="col-lg-offset-2 col-lg-4">
                            <img class="img-rounded" src="<?php echo $keywords->getMainPageUrl(); ?>/images/mortgage_calculator.png" alt="Online Mortgage Calculator" width="140" height="140">
                            <h2><?php echo $keywords->getName(); ?> Mortgage Calculator</h2>
                            <div class ="text-center" style="width:370px;overflow:hidden;margin: 0 auto;font-size:8pt;line-height:13x;background-color:#F58027;letter-spacing:0;text-transform:none;border-radius: 5px;webkit-border-radius:5px;" id="horizontalWidget">
                                <div style="margin:6px 0;">
                                    <a href="#" target="_blank" style="font-size:15px;text-decoration:none;color:#fff;cursor: pointer;display: block;text-align: center;" title="Mortgage Calculators on Zillow">Mortgage Payment Calculator</a>
                                </div>
                                <div style="width:352px;margin:0 auto;background-color:#f7f5f4;text-align:left; font-size:8pt;border-radius: 5px; border: 1px solid;border-color:#d6d2cd;webkit-border-radius: 5px;padding: 0 1px;">
                                    <iframe scrolling="no" src="http://www.zillow.com/mortgage/SmallMortgageLoanCalculatorWidget.htm?price=400000&wtype=spc&rid=102001&wsize=small&textcolor=736c5f&backgroundColor=f7f5f4&advTabColor=969086&bgcolor=e2e0dc&bgtextcolor=fff&headerTextShadow=fff&widgetOrientationType=horizontalWidget" width="352px" frameborder="0" style="float:left;" title="Mortgage Calculator" height="235px"></iframe>
                                    <div style="clear:both;">
                                    </div>
                                </div>
                                <div style="height:20px;"><span style="display:block;margin:0 auto;font-size:7pt;height:15px;width:178px;color:#fff;padding-top:2px;"><a href="#" target="_blank" style="text-decoration:none;color:#3366bb;font-weight:normal;font-size:7pt;color:#fff;" title="Zillow Mortgages">Zillow Mortgage Calculator</a></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <img class="img-circle" src="<?php echo $keywords->getMainPageUrl(); ?>/images/department_of_housing_and_urban_development_logo.png" alt="Department of Housing and Urban Development">
                            <h2>FHA Loan information at <?php echo $keywords->getName(); ?></h2>
                            <p>If you are a first-time home buyer, you will be interested in learning  about the
                                Federal Housing Administration's programs for first time homebuyers. </p>
                            <p><a class="btn btn-info btn-default" href="<?php echo $keywords->getMainPageUrl(); ?>/<?php echo $keywords->getRedirectUrlUnique(); ?>-redirect.php" role="button" onclick="trackOutboundLink('<?php echo $keywords->getMainPageUrl(); ?>/<?php echo $keywords->getRedirectUrlUnique(); ?>-redirect.php');
                                    return false;">Learn more with <?php echo $keywords->getName(); ?></a></p>
                        </div>
                    </div>
                    <p class="pull-right"><a href="<?php echo $keywords->getMainPageUrl(); ?>" target="_top">Back to top of <?php echo $keywords->getName(); ?></a></p>
                    <hr class="featurette-divider">
                    <div class="row featurette">
                        <div class="col-md-7">
                            <h2 class="featurette-heading">Your credit score. <span class="text-muted">Prepare it to enhance your purchasing power.</span></h2>
                            <p class="lead"><?php echo $keywords->getName(); ?> recommends you prepare yourself to increase your purchasing power of a home.  Your credit score determines if a bank, credit card company or car dealership will extend credit to you and what the interest rate will be.
                                Be mindful of the credit decisions that you make today that can potentially affect tomorrow.</p> <p><a class="btn btn-info btn-default" href="<?php echo $keywords->getMainPageUrl(); ?>/<?php echo $keywords->getRedirectUrlUnique(); ?>-redirect.php" role="button" onclick="trackOutboundLink('<?php echo $keywords->getMainPageUrl(); ?>/<?php echo $keywords->getRedirectUrlUnique(); ?>-redirect.php');
                                        return false;">Learn more with <?php echo $keywords->getName(); ?></a></p>
                        </div>
                        <div class="col-md-5">
                            <img class="featurette-image img-responsive center-block img-rounded" src="<?php echo $keywords->getMainPageUrl(); ?>/images/credit_score_chart.svg" alt="Credit Score Chart recommended by <?php echo $keywords->getName(); ?>">
                        </div>
                    </div>
                    <p class="pull-right"><a href="<?php echo $keywords->getMainPageUrl(); ?>" target="_top">Back to top of <?php echo $keywords->getName(); ?></a></p>
                    <hr class="featurette-divider">
                    <div class="row featurette">
                        <div class="col-md-7 col-md-push-5">
                            <h2 class="featurette-heading">Mortgage Options. <span class="text-muted">Finding the right loan for you.</span></h2>
                            <p class="lead">Fixed-rate loans for predictable payments &middot;
                                ARM loans with lower introductory rates &middot;
                                ARM loan payments may increase after loan consummation &middot;
                                Jumbo loans for costlier homes &middot;
                                FHA loans with low down-payment options &middot;
                                VA loans for servicemembers and veterans</p>
                            <p><a class="btn btn-info btn-default" href="<?php echo $keywords->getMainPageUrl(); ?>/<?php echo $keywords->getRedirectUrlUnique(); ?>-redirect.php" role="button" onclick="trackOutboundLink('<?php echo $keywords->getMainPageUrl(); ?>/<?php echo $keywords->getRedirectUrlUnique(); ?>-redirect.php');
                                    return false;">Learn more with <?php echo $keywords->getName(); ?></a></p>
                        </div>
                        <div class="col-md-5 col-md-pull-7">
                            <!-- Change alt attribute -->
                            <img class="featurette-image img-responsive center-block img-rounded" src="<?php echo $keywords->getMainPageUrl(); ?>/images/family-home-loans.jpg" alt="South Florida Home Loans">
                        </div>
                    </div>
                    <p class="pull-right"><a href="<?php echo $keywords->getMainPageUrl(); ?>" target="_top">Back to top of <?php echo $keywords->getName(); ?></a></p>
                    <hr class="featurette-divider">
                    <div class="row featurette">
                        <div class="col-md-7">
                            <h2 class="featurette-heading">Refinance Your Home. <span class="text-muted">Lower Your Monthly Payment Expense.</span></h2>
                            <p class="lead">We can help you identify potential ways to:

                                Lower Your Monthly Payment Expense &middot;
                                Shorten the Term of Your Loan &middot;
                                Switch to a Fixed-Rate Mortgage &middot;
                                Get Cash Out of Your Home</p>
                            <p><a class="btn btn-info btn-default" href="<?php echo $keywords->getMainPageUrl(); ?>/<?php echo $keywords->getRedirectUrlUnique(); ?>-redirect.php" role="button" onclick="trackOutboundLink('<?php echo $keywords->getMainPageUrl(); ?>/<?php echo $keywords->getRedirectUrlUnique(); ?>-redirect.php');
                                    return false;">Learn more with <?php echo $keywords->getName(); ?></a></p>
                        </div>
                        <div class="col-md-5">
                            <!-- Change image name and alt attribute -->
                            <img class="featurette-image img-responsive center-block img-rounded" src="<?php echo $keywords->getMainPageUrl(); ?>/images/home-loan-refinance-south-florida.jpg" alt="Refinancing Home Loans in South Florida">
                        </div>
                    </div>
                    <p class="pull-right"><a href="<?php echo $keywords->getMainPageUrl(); ?>" target="_top">Back to top of <?php echo $keywords->getName(); ?></a></p>
                    <hr class="featurette-divider">
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