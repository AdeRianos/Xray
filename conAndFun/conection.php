<?php
class mypdoApp
{
    public $localhost;
    public $dbname;
    public $username;
    public $password;
    function myldup()
    {
        $this->localhost = 'localhost';
        $this->dbname = 'application';
        $this->user = 'root';
        $this->pass = '';
    }
}
$datConection = new mypdoApp;
$datConection->myldup();
//test($datConection);
try {
    $appConection = new PDO("mysql:local=$datConection->localhost;dbname=$datConection->dbname", $datConection->user, $datConection->pass);
    $appConection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $resCon= $appConection->query('SET NAMES utf8');
} catch (PDOException $e) {
    echo $e->getMessage();
}
?>

