<?php
class Dbh {
    private $hostname = "localhost";
    private $username = "root";
    private $password = "";
    private $dbname = "zuriphp";

protected function connect() {
    $conn = 'mysqli:hostname=' . $this->hostname . '; username=' . $this->username . '; password=' . $this->password . '; dbname=' . $this->dbhostname . ';';
}
}
