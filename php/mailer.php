<?php

/**
 * Mailer Class
 * Send emails with this class.
 * @author Rolando Moreno <developer@rolandomoreno.com>
 * @copyright (c) 2015, rolandomoreno.com
 * @version 1.0
 */
class Mailer {

    private $compiledMessage = '';
    private $to = '';
    private $subject = '';
    private $message = '';
    private $headers = '';
    private $defaultDeveloperEmail = 'leads@homeloanssouthflorida.com';
    private $defaultSubject = 'Question/Comments homeloanssouthflorida.com';
    private $contactEmail = 'contactform@homeloansouthflorida.com';

    /**
     * Returns a complied message
     * @return type Returns a complied message
     */
    public function getCompiledMessage() {
        return $this->compiledMessage;
    }

    /**
     * Sets up the compiled message.
     */
    public function setMessage($fullName, $zip, $email, $phone, $language, $loanType, $url) {

        $this->compiledMessage = 'Name: ' . $fullName . "\r\n" .
                'Email: ' . $email . "\r\n" .
                'Zip Code: ' . $zip . "\r\n" .
                'Phone Number: ' . $phone . "\r\n" .
                'Preferred Language: ' . $language . "\r\n" .
                'Loan Type: ' . $loanType . "\r\n" .
                'Website it came from: ' . $url . "\r\n"
        ;
    }

    /**
     * Prepares mail and uses mail() function
     */
    public function mailOut() {

        $this->to = $this->defaultDeveloperEmail;
        $this->subject = $this->defaultSubject;
        $this->message = $this->compiledMessage;
        $this->headers = 'From: ' . $this->contactEmail;

        mail($this->to, $this->subject, $this->message, $this->headers);
    }

}
