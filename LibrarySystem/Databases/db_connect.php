<?php

/**
 * A class file to connect to database
 */
class DB_CONNECT {
    
    // constructor
    function __construct() {
        // connecting to database
        $this->connect();
    }

    // destructor
    function __destruct() {
        // closing db connection
        $this->close();
    }

    /**
     * Function to connect with database
     */
    function connect() {
        
        // import database connection variables
        require_once 'C:/wamp/www/LibrarySystem/Databases/db_config.php';

     
        $con = @mysql_connect(DB_SERVER, DB_USER, DB_PASSWORD) or die(mysql_error());
    
        // Selecing database
        $db = mysql_select_db(DB_DATABASE) or die(mysql_error()) or die(mysql_error());
        //$con->set_charset('utf8');
        mysql_query('SET NAMES "utf8"',$con);
       // mysql_query("SET NAMES utf8");
        // returing connection cursor
        return $con;
    }

    /**
     * Function to close db connection
     */
    function close() {
        // closing db connection
        @mysql_close();
    }

}

?>