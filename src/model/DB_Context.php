<?php
include_once 'menuItem.php';
include_once 'item.php';

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

    //Show all menu items as a CUSTOMER under specific filters
    public function showMenu($nutFree,$veg,$vegan,$category1,$category2)
    {
        $sql = "CALL isad251_stong.Tearoom_Menu(".$nutFree.",".$veg.",".$vegan.",'".$category1."','".$category2."')";

        $statement = $this->connection->prepare($sql);

        $statement->execute(); //Execute statement

        $result = $statement->fetchAll(PDO::FETCH_ASSOC); //Store results of stored procedure

        $menuItems = []; //Create an array to store menu item objects

        if($result)//If there are any results returned from procedure
        {
            foreach($result as $row)
            {
                $aMenuItem = new menuItem( $row['item_id'],$row['name'], $row['selling_price'], $row['vegan'], $row['vegetarian'], $row['nut_free'], $row['img_path']); //Create object from each row
                $menuItems[] = $aMenuItem;//Store object

            }
        }

        return $menuItems; //Return to menuFilter controller

    }

    //View specific details of a single item from the menu as a CUSTOMER
    public function viewTheItem($id)
    {
        $sql = "CALL isad251_stong.Tearoom_View_Item(".$id.")";

        $statement = $this->connection->prepare($sql);

        $statement->execute(); //Execute statement

        $result = $statement->fetchAll(PDO::FETCH_ASSOC); //Store results of stored procedure

        $viewItem = [];

        if($result)//If there are any results returned from procedure
        {
            foreach($result as $row)
            {
                $item = new menuItem( $row['item_id'],$row['name'], $row['selling_price'], $row['vegan'], $row['vegetarian'], $row['nut_free'], $row['img_path']); //Create object from each row
                $viewItem[] = $item;//Store object
            }
        }

        return $item;
    }
}