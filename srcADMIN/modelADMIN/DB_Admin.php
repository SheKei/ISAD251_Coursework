<?php
/**
 * Created by PhpStorm.
 * User: sheke
 * Date: 31/12/2019
 * Time: 13:17
 */
include_once 'previewItems.php';

class DB_Admin
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

    //Return output from SELECT statements
    public function executeStatement($sqlStatement)
    {
        $sqlStatement = $this->connection->prepare($sqlStatement);

        $sqlStatement->execute();

        $theResult = $sqlStatement->fetchAll(PDO::FETCH_ASSOC); //Store results of stored procedure

        return $theResult;
    }

    //Same function but nothing is being returned as output - i.e INSERT/DELETE/UPDATE statements
    public function executeStatementNoOutput($sqlStatement)
    {
        $sqlStatement = $this->connection->prepare($sqlStatement);

        $sqlStatement->execute();
    }

    //Retrieve items depending on whether user wants sale, withdrawn or both statuses items
    public function getAllItems($status1, $status2)
    {
        $sql = "CALL ISAD251_STong.TeaAdmin_Get_Items('".$status1."','".$status2."')";
        $result = $this->executeStatement($sql);

        $allItems = [];

        if($result)//If there are any results returned
        {
            foreach($result as $row)
            {
                $anItem = new previewItems( $row['item_id'],$row['name'], $row['category'], $row['img_path'], $row['item_status']); //Create object from each row
                $allItems[] = $anItem;//Store object

            }
        }

        return $allItems;

    }

    //Insert new item into item table once user passes all validation checks
    public function addItem($itemName, $buy, $sell,$category, $stock, $restock, $veg, $vegan, $nutFree,  $img, $itemStatus)
    {
        $sql = "CALL ISAD251_STong.TeaAdmin_Add_Item('".$itemName."',".$buy.",".$sell.",'".$category."',".$stock.",".$restock.",".$veg.",".$vegan.",".$nutFree.",'".$img."','".$itemStatus."')";
        $this->executeStatementNoOutput($sql);
    }
}