<?php
include_once 'php/keywords.php';
include_once 'php/analyticstracking.php';
include_once 'php/head.php';
include_once 'php/scripts.php';
require_once 'php/databaseConnection.php';
require_once 'php/formHandler.php';
require_once 'php/mailer.php';
require_once 'php/contactFormSubmit.php';

$keywords = new Keywords();
$head = new Head();
$tracker = new Analytics();
$scripts = new Scripts();

$connect = new DatabaseConnector();
$connect->setLink();
$connect->getLink();
$connect->selectDatabase();

$formHandler = new FormHandler($_POST['firstName'], $_POST['lastName'], $_POST['zipCode'], $_POST['emailAddress'], $_POST['phoneNumber'], $_POST['language'], $_POST['loan']);
$formHandler->testFullValidation();

if ($formHandler->getValid()) {
    $mailer = new Mailer();
    $mailer->setMessage($formHandler->getFullName(), $formHandler->getZipCode(), $formHandler->getEmail(), $formHandler->getPhoneNumber(), $formHandler->getLanguage(), $formHandler->getLoanType(), $keywords->getMainPageUrl());
    $mailer->mailOut();

    $insertData = new ContactFormSubmit($formHandler->getFirstName(), $formHandler->getLastName(), $formHandler->getZipCode(), $formHandler->getEmail(), $formHandler->getPhoneNumber(), $formHandler->getLanguage(), $formHandler->getLoanType(), $keywords->getMainPageUrl());
    $insertData->setQuery();
    $insertData->query();
}

$connect->closeConnection();
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
        echo "<meta http-equiv='refresh' content='5;index.php'>";
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
                </div>
            </nav>
        </header>
        <section>
            <div class="container-fluid text-center">
                <div class="jumbotron">
                    <h1 style="color: #fff">Thank you for contacting <?php echo $keywords->getName() ?>.</h1>
                    <h3 class="text-center"><?php
                        if ($formHandler->getValid()) {
                            echo "Thank you " . $formHandler->getFullName() . "." . "<br>"
                            . "You will now be redirected to the main page.";
                        } else {
                            echo $formHandler->getFirstNameError();
                            echo $formHandler->getLastNameError();
                            echo $formHandler->getZipCodeError();
                            echo $formHandler->getEmailError();
                            echo $formHandler->getPhoneNumberError();
                            echo $formHandler->getLanguageError();
                            echo $formHandler->getLoanTypeError();
                            echo "<br>" . "You will now be redirected to the main page to try again.";
                        }
                        ?></h3>
                    <h5>If not, <a href="<?php echo $keywords->getMainPageUrl(); ?>">click here to continue!</a></h5>
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

