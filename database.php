<?php

class database{

    private $host;
    private $username;
    private $password;
    private $database;
    private $charset;
    private $dbh;

    public function __construct($host, $username, $password, $database, $charset){
        $this->host = $host;
        $this->username = $username;
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

            echo "Database Connection SUCCESSFULLY Established";

        }catch(PDOException $e){
            // exit-> Output a message and terminate the current script
            die("Error connecting: " . $e->getMessage());
        }
    }

    private function create_or_update_account($id, $type_id, $username, $email, $password){
        $updated_at = date('Y-m-d H:i:s');

        if(is_null($id)){
        // If id is null, update/insert

        // Hash password
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        $sql = "INSERT INTO account VALUES (NULL, :type_id, :username, :email, :password, :created, :updated)";

        $statement = $this->dbh->prepare($sql);

        $statement->execute([
            'type_id'=>$type_id,
            'username'=>$username, 
            'email'=>$email, 
            'password'=>$hashed_password, 
            'created'=> date('Y-m-d H:i:s'), 
            'updated'=> $updated_at
        ]);

        }
    }

}

?>
