<?php
include_once 'menuItem.php';

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

    public function showMenu($sql)
    {
        $statement = $this->connection->prepare($sql);

        $statement->execute(); //Execute statement

        $result = $statement->fetchAll(PDO::FETCH_ASSOC); //Store results of stored procedure

        $menuItems = []; //Create an array to store menu item objects

        if($result)//If there are any results returned from procedure
        {
            foreach($result as $row)
            {
                $aMenuItem = new menuItem( $row['name'], $row['selling_price']); //Create object from each row
                $menuItems[] = $aMenuItem;//Store object
            }
        }

        return $menuItems; //Return to menuFilter controller

    }
}