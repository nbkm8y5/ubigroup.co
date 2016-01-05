<?php

/**
 * Scripts Class
 * Class to encapsulate Jquery and other scripts in various websites.
 * @author Rolando Moreno <developer@rolandomoreno.com>
 * @copyright (c) 2015, rolandomoreno.com
 * @version 1.0
 */
class Scripts {

    private $bootStrap = "<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js'></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src='http://homeloanssouthflorida.com/js/bootstrap.min.js'></script>
    ";
    private $jquery = "<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js'></script>
    <!-- Latest compiled and minified JavaScript -->
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
