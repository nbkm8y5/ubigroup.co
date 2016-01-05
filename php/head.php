<?php

/**
 * Head Encapsulation Class
 * Class to encapsulate head information in various websites.
 * @author Rolando Moreno <developer@rolandomoreno.com>
 * @copyright (c) 2015, rolandomoreno.com
 * @version 1.0
 */
class Head {

    private $primaryHead = "<meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    ";
    private $metaGroup = "<meta name='keywords' content='home loans, south florida, mortgages, home buyer, miami-dade, broward, boca raton, hipoteca'>
    <meta name='author' content='http://rolandomoreno.com'>
    ";
    private $headCssLinks = "<!-- Latest compiled and minified CSS -->
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\" integrity=\"sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7\" crossorigin=\"anonymous\">
    <!-- Bootstrap -->
    <!--<link href='http://ubigroup.co/css/bootstrap.min.css' rel='stylesheet'>-->
    <link href='http://ubigroup.co/css/style.css' rel='stylesheet'>
    <link rel='icon' href='http://ubigroup.co/images/home-loans-south-florida-icon.png'>
    ";
    private $headJsLinks = "<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src='https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js'></script>
      <script src='https://oss.maxcdn.com/respond/1.4.2/respond.min.js'></script>
    <![endif]-->
    ";

    /**
     * 
     * @return type
     */
    public function getPrimaryHead() {
        return $this->primaryHead;
    }

    /**
     * 
     * @return type
     */
    public function getMetaGroup() {
        return $this->metaGroup;
    }

    /**
     * 
     * @return type
     */
    public function getHeadCssLinks() {
        return $this->headCssLinks;
    }

    /**
     * 
     * @return type
     */
    public function getHeadJsLinks() {
        return $this->headJsLinks;
    }

}
