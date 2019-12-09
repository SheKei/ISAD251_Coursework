<?php
/**
 * Created by PhpStorm.
 * User: sheke
 * Date: 09/12/2019
 * Time: 18:24
 */

class DB_Context
{
    private $db_server = 'proj-mysql.uopnet.plymouth.ac.uk';
    private $dbUser = 'ISAD251_STong';
    private $dbPassword = 'ISAD251_22216856';
    private $dbDatabase = 'ISAD251_STong';
    private $dataSourceName;
    private $connection;

    public function __construct(PDO $connection = null)
    {
        $this->connection = $connection;
        try {
            if ($this->connection === null) {
                $this->dataSourceName = 'mysql:dbname=' . $this->dbDatabase . ';host=' . $this->db_server;
                $this->connection = new PDO($this->dataSourceName, $this->dbUser, $this->dbPassword);
                $this->connection->setAttribute(
                    PDO::ATTR_ERRMODE,
                    PDO::ERRMODE_EXCEPTION
                );

            }
        }catch (PDOException $err)
        {
            echo 'Connection failed: ', $err->getMessage();
        }
    }

    public function showMenu($nut, $veg, $vegan, $category1, $category2)
    {
        //Put parameters into procedure
        $sql = "CALL isad251_stong.Tearoom_Menu(".$nut.",".$veg.",".$vegan.",".$category1.",".$category2.")";

        $statement = $this->connection->prepare($sql);

        $statement->execute();

        $resultSet = $statement->fetchAll(PDO::FETCH_ASSOC);
    }
}