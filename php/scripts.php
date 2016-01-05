<?php

/**
 * Scripts Class
 * Class to encapsulate Jquery and other scripts in various websites.
 * @author Rolando Moreno <developer@rolandomoreno.com>
 * @copyright (c) 2015, rolandomoreno.com
 * @version 1.0
 */
class Scripts {

    private $bootStrap = "<!-- Latest compiled and minified JavaScript -->
<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js\" integrity=\"sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS\" crossorigin=\"anonymous\"></script>
    ";
    private $jquery = "<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js\"></script>
    ";

    /**
     * 
     * @return type
     */
    public function getBootStrap() {
        return $this->bootStrap;
    }

    /**
     * 
     * @return type
     */
    public function getJquery() {
        return $this->jquery;
    }

}
