<?php

/**
 * Form Handler Class
 * Checks all post from a form and runs through various tests for vailidation
 * @author Rolando Moreno <developer@rolandomoreno.com>
 * @copyright (c) 2015, rolandomoreno.com
 * @version 1.0
 */
class FormHandler {

    private $firstName = '';
    private $firstNameError = '';
    private $lastName = '';
    private $lastNameError = '';
    private $zipCode = '';
    private $zipCodeError = '';
    private $email = '';
    private $emailError = '';
    private $phoneNumber = '';
    private $phoneNumberError = '';
    private $language = '';
    private $languageError = '';
    private $loanType = '';
    private $loanTypeError = '';
    private $valid = false;
    private $firstNameValid = false;
    private $lastNameValid = false;
    private $zipCodeValid = false;
    private $emailValid = false;
    private $phoneNumberValid = false;

    /**
     * 
     * @param type $firstName
     * @param type $lastName
     * @param type $zipCode
     * @param type $email
     * @param type $phoneNumber
     * @param type $language
     * @param type $loanType
     */
    function __construct($firstName, $lastName, $zipCode, $email, $phoneNumber, $language, $loanType) {
        $this->firstName = $firstName;
        $this->testFirstName();
        $this->lastName = $lastName;
        $this->testLastName();
        $this->zipCode = $zipCode;
        $this->testZipCode();
        $this->email = $email;
        $this->testEmail();
        $this->phoneNumber = $phoneNumber;
        $this->testPhoneNumber();
        $this->language = $language;
        $this->loanType = $loanType;
    }

    /**
     * 
     */
    public function testFirstName() {
        if (isset($this->firstName)) {
            if (!preg_match("/^[a-zA-Z ]*$/", $this->firstName)) {
                $this->firstNameValid = false;
                $this->firstNameError = "Only letters and white space allowed in first name.<br>";
            } else {
                $this->firstName = $this->test_input($this->firstName);
                $this->firstNameValid = true;
            }
        } else {
            $this->firstNameValid = false;
            $this->firstNameError = "First name is required.<br>";
        }
    }

    /**
     * 
     */
    public function testLastName() {
        if (isset($this->lastName)) {
            if (!preg_match("/^[a-zA-Z ]*$/", $this->lastName)) {
                $this->lastNameValid = false;
                $this->lastNameError = "Only letters and white space allowed in last name.<br>";
            } else {
                $this->lastName = $this->test_input($this->lastName);
                $this->lastNameValid = true;
            }
        } else {
            $this->lastNameValid = false;
            $this->lastNameError = "Last name is required.<br>";
        }
    }

    /**
     * 
     */
    public function testZipCode() {
        if (isset($this->zipCode)) {
            if (!preg_match("/^[0-9 ]*$/", $this->zipCode)) {
                $this->zipCodeValid = false;
                $this->zipCodeError = "Only numbers and white space allowed in zip code.<br>";
            } else {
                $this->zipCode = $this->test_input($this->zipCode);
                $this->zipCodeValid = true;
            }
        } else {
            $this->zipCodeValid = false;
            $this->zipCodeError = "Zip Code is required.<br>";
        }
    }

    /**
     * 
     */
    public function testEmail() {
        if (isset($this->email)) {
            if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
                $this->emailValid = false;
                $this->emailError = "Invalid email format.<br>";
            } else {
                $this->email = $this->test_input($this->email);
                $this->emailValid = true;
            }
        } else {
            $this->emailValid = false;
            $this->emailError = "Email address is required.<br>";
        }
    }

    /**
     * 
     */
    public function testPhoneNumber() {
        if (isset($this->phoneNumber)) {
            if (!preg_match("/^[0-9 ]*$/", $this->phoneNumber)) {
                $this->phoneNumberValid = false;
                $this->phoneNumberError = "Only numbers and white space allowed in a phone number.<br>";
            } else {
                $this->phoneNumber = $this->test_input($this->phoneNumber);
                $this->phoneNumberValid = true;
            }
        } else {
            $this->phoneNumberValid = false;
            $this->phoneNumberError = "Phone number is required.<br>";
        }
    }

    /**
     * 
     * @return type
     */
    public function getFirstName() {
        return $this->firstName;
    }

    /**
     * This function returns the first name error
     * @return type
     */
    public function getFirstNameError() {
        return $this->firstNameError;
    }

    /**
     * This function returns the last name
     * @return type
     */
    public function getLastName() {
        return $this->lastName;
    }

    /**
     * This function returns the last name error
     * @return type
     */
    public function getLastNameError() {
        return $this->lastNameError;
    }

    /**
     * 
     * @return type
     */
    public function getZipCode() {
        return $this->zipCode;
    }

    /**
     * 
     * @return type
     */
    public function getZipCodeError() {
        return $this->zipCodeError;
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
    public function getPhoneNumberError() {
        return $this->phoneNumberError;
    }

    /**
     * 
     * @return type
     */
    public function getLanguage() {
        return $this->language;
    }

    /**
     * 
     * @return type
     */
    public function getLanguageError() {
        return $this->languageError;
    }

    /**
     * 
     * @return type
     */
    public function getLoanType() {
        return $this->loanType;
    }

    /**
     * 
     * @return type
     */
    public function getLoanTypeError() {
        return $this->loanTypeError;
    }

    /**
     * This function returns the full name
     * @return type
     */
    public function getFullName() {
        return $this->getFirstName() . ' ' . $this->getLastName();
    }

    /**
     * This function returns the email
     * @return type
     */
    public function getEmail() {
        return $this->email;
    }

    /**
     * This function retirns the email errors
     * @return type
     */
    public function getEmailError() {
        return $this->emailError;
    }

    /**
     * This function tests the data for possible hacking attempts
     * @param type $data
     * @return type
     */
    private function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        $data = strip_tags($data);
        return $data;
    }

    /**
     * Tests all boolean for all validation
     */
    public function testFullValidation() {
        if ($this->firstNameValid && $this->lastNameValid && $this->zipCode && $this->emailValid && $this->phoneNumber) {
            $this->valid = true;
        } else {
            $this->valid = false;
        }
    }

    /**
     * Returns true or false for full input validation
     * @return type
     */
    public function getValid() {
        return $this->valid;
    }

}
