<?php
/* PDO database class
 * connect to database
 * create prepared statements
 * bind values
 * returns rows and results
*/

class Database{
    private $host = DB_HOST;
    private $user = DB_USER;
    private $pass = DB_PASS;
    private $dbname = DB_NAME;

    //database handler
    private $dbh;
    private $stmt;
    private $error;

    public function __construct(){
        //DSN
        $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbname;
        $options = array(
            //increase performace by checking if connection exists
            PDO::ATTR_PERSISTENT => true,
            //more elegant way of throwing errors
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        );

        //create PDO instance
        try{
            $this->dbh = new PDO($dsn, $this->user, $this->pass, $options);
        } catch(PDOException $e){
            $this->error = $e->getMessage();
            echo $this->error;
        }
    }
}
