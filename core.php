<?
//Don't touch code in Main Core
//Main core is the only one who have permissions to operate with database
//Created in 16.06.2021 by Daniil Pak
//License by LLC PAK SOLUTIONS

class Core {
    //Database configuration
    //listed below
        private $host = "localhost";
        private $login = "root";
        private $pwd = "root";
        private $db = "db";
    //You may change it while moving to hosting

    private $connection = null;
    //variable above stores mysql_connect return

    function __construct()
    {
        try {
            $this->connection = new mysqli($this->host , $this-> login , $this->pwd , $this->db);
            log("Connected to database successfully");
        } catch (Exception $e) {
            log($e->getMessage());
        } finally {
            log("constructor's work is over");
        }
    }
    //Function above is creating a connection with database and called automatically with creating a class
    //DON'T TOUCH CODE ABOVE

    //Main functionality...

    public function CoreSelectTable($table) {
        $mysql = "SELECT * FROM ";
        $mysql .= $table;
        $data = mysqli_query( $this->connection , $mysql);
        return $data;
    }

    




    //don't touch code below
    function __destruct()
    {
        $this->connection->close();
    }
}

?>