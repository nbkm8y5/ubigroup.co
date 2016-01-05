<?php

/**
 * Contact Form Report Class
 * For querying a report of all comments received from a basic contact form
 * @author Rolando Moreno <developer@rolandomoreno.com>
 * @copyright (c) 2015, rolandomoreno.com
 * @version 1.0
 */
class ContactFormReport {

    private $sql = "SELECT * FROM `Customer_Info`";
    private $result = '';

    /**
     * This queries the database to select all records from contact form table
     */
    public function query() {
        $this->result = mysql_query($this->sql);
    }

    /**
     * 
     */
    public function getReport() {
        for ($i = 0; $i < mysql_num_rows($this->result); $i++) {
            $row = mysql_fetch_assoc($this->result);
            foreach ($row as $x => $x_value) {
                echo $x . " = " . $x_value;
                echo "<br>";
            }
            echo "<br>";
        }
    }

}
