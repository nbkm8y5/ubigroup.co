<?php

/**
 * Database Connection Class
 * For setting up any database to any website using PHP
 * @author Rolando Moreno <developer@rolandomoreno.com>
 * @copyright (c) 2015, rolandomoreno.com
 * @version 1.0
 */
class DatabaseConnector {

    private $link = '';
    private $server = 'mysql.homeloanssouthflorida.com';
    private $userName = 'home_loans_user';
    private $password = 'rvFJnWvREcS424523#@';
    private $databaseName = 'home_loans';
    private $connectComment = 'Could not connect: ';

    /**
     * This function returns the link
     * @return type Returns the link
     */
    public function getLink() {
        if (!$this->link) {
            die($this->connectComment . mysql_error());
        }
        return $this->link;
    }

    /**
     * This function prepares the link
     */
    public function setLink() {
        $this->link = mysql_connect($this->server, $this->userName, $this->password);
    }

    /**
     *  This function selects the database
     */
    public function selectDatabase() {
        mysql_select_db($this->databaseName);
    }

    /**
     * This function closes the database connection
     */
    public function closeConnection() {
        mysql_close($this->link);
    }

    /**
     *
     * @return type
     */
    public function getServerInfo() {
        return mysql_get_server_info();
    }

}
