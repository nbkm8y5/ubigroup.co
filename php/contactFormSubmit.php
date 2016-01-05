<?php

/**
 * Contact Form Submit Class
 * For inserting information from contact form submission
 * @author Rolando Moreno <developer@rolandomoreno.com>
 * @copyright (c) 2015, rolandomoreno.com
 * @version 1.0
 */
class ContactFormSubmit {

    private $firstName;
    private $lastName;
    private $zipCode;
    private $email;
    private $phoneNumber;
    private $language;
    private $loanType;
    private $url;
    private $sql;

    /**
     * 
     * @param type $firstName
     * @param type $lastName
     * @param type $zipCode
     * @param type $email
     * @param type $phoneNumber
     * @param type $language
     * @param type $loanType
     * @param type $url
     */
    public function __construct($firstName, $lastName, $zipCode, $email, $phoneNumber, $language, $loanType, $url) {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->zipCode = $zipCode;
        $this->email = $email;
        $this->phoneNumber = $phoneNumber;
        $this->language = $language;
        $this->loanType = $loanType;
        $this->url = $url;
    }

    /**
     * Prepares Query information
     */
    public function setQuery() {
        $this->sql = "INSERT INTO Customer_Info (firstName, lastName, zipCode, email, phoneNumber, language, loanType, url, CONTACT_TIME)
                VALUES ('$this->firstName', '$this->lastName', '$this->zipCode', '$this->email', '$this->phoneNumber', '$this->language', '$this->loanType', '$this->url', now())";
    }

    /**
     * Queries database for data INSERT
     */
    public function query() {
        mysql_query($this->sql);
    }

}
