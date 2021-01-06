<?php

class database{

    private $host;
    private $username;
    private $password;
    private $database;
    private $charset;
    private $dbh;
    
    // create class constants (admin and user)
    const ADMIN = 1;
    const USER = 2;

    public function __construct($host, $username, $password, $database, $charset){
        $this->host = $host; //localhost
        $this->username = $username; //root
        $this->password = $password;
        $this->database = $database;
        $this->charset = $charset;

        try{
            // DSN connection method
            /*
            - mysql driver
            - host (localhost/127.0.0.1)
            - database (schema) name
            - charset
            */
            $dsn = "mysql:host=$this->host;dbname=$this->database;charset=$this->charset";
            $this->dbh = new PDO($dsn, $this->username, $this->password);

            // echo "Database connection successfully established"; -> not nescessary to show this on the website!

        }catch(PDOException $e){
            // die and exit are equivalent
            // exit-> Output a message and terminate the current script
            die("Unable to connect: " . $e->getMessage());
        }
    }
}
?>
