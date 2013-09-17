<?php

class DBLayer {

    var $dbname;
    var $dbuser;
    var $dbpass;
    var $dbhost;
    var $dbc;
    var $dbtbl;

    function __construct() {
        $ini = parse_ini_file('dbconfig.ini');
        setVars($ini);
        $conn=conn();
    }

    public function Create($c) {
        
    }

    public function Read($c) {
        
    }

    public function Update($c) {
        
    }

    public function Delete($c) {
        
    }

    public function GetAll($c) {
        $q="SELECT * FROM $this->dbtbl";
        $result= mysqli_query($c,$q)
                or die('Error querying database.');
        return $result;
        
    }

    public function GetWhere($c,$sql) {
        
    }

    public function conn() {
        $this->$dbc = mysqli_connect($this->dbhost, $this->dbuser, $this->dbpass, $this->dbname)
                or die('Error connecting to database.');
        return $this->$dbc;
    }

    public function setVars($vars)
    {
        $this->dbname = $vars['dbname'];
        $this->dbhost = $vars['dbhost'];
        $this->dbpass = $vars['dbpass'];
        $this->dbuser = $vars['dbuser'];
    }
    public function Closeconn()
    {
        mysqli_close($this->dbc);
    }

}