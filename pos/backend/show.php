<?php

    class Show
    {
        private $con;
        public function __construct()
        {
            $dbhost = "localhost";
            $dbuser = "root";
            $dbpass = "";
            $dbname = "pos";

            $this->conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

            if(!$this->conn)
            {
                die("Database Connection Error!");
            }
        }
    }
?>