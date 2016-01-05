<?php

/**
 * Keywords Class
 * Class to differentiate various websites with keywords
 * @author Rolando Moreno <developer@rolandomoreno.com>
 * @copyright (c) 2015, rolandomoreno.com
 * @version 1.0
 */
class Keywords {

    private $title = "<title>Home Loans South Florida - Providing mortgage information to first-time homebuyers and refinance</title>";
    private $name = "Home Loans South Florida";
    private $metaDescription = "<meta name='description' content='Home Loans South Florida provides information for first time homebuyers, specializing in FHA home loans, refinance of a home and information regarding the entire process of home buying.'>";
    private $mainPageUrl = "http://homeloanssouthflorida.com";
    private $redirectUrlUnique = "home-loans-south-florida";
    private $phoneNumber = "+1 (305) 310-9178";
    private $phoneLink = "callto://13053109178";

    /**
     * 
     * @return type
     */
    public function getTitle() {
        return $this->title;
    }

    /**
     * 
     * @return type
     */
    public function getName() {
        return $this->name;
    }

    /**
     * 
     * @return type
     */
    public function getMetaDescription() {
        return $this->metaDescription;
    }

    /**
     * 
     * @return type
     */
    public function getRedirectUrlUnique() {
        return $this->redirectUrlUnique;
    }

    /**
     * 
     * @return type
     */
    public function getPhoneNumber() {
        return $this->phoneNumber;
    }

    /**
     * 
     * @return type
     */
    public function getPhoneLink() {
        return $this->phoneLink;
    }

    /**
     * 
     * @return type
     */
    public function getMainPageUrl() {
        return $this->mainPageUrl;
    }

}
