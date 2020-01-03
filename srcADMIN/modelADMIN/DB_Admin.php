<?php
/**
 * Created by PhpStorm.
 * User: sheke
 * Date: 31/12/2019
 * Time: 13:17
 */
include_once 'previewItems.php';
include_once 'item.php';
include_once 'order.php';
include_once 'ongoingOrderItem.php';

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

    //Return result set from a SELECT ALL statement from a table
    public function getAllApi($theTableName)
    {
        $sql = "SELECT * FROM";

        switch ($theTableName)
        {
            case "tearoom_item" : $sql = $sql." ISAD251_STONG".".tearoom_item";
                break;
            case "tearoom_order" : $sql = $sql." ISAD251_STONG".".tearoom_order";
                break;
        }

        $sqlStatement = $this->connection->prepare($sql);
        $sqlStatement->execute();
        $outputSet = $sqlStatement->fetchAll(PDO::FETCH_ASSOC);

        return $outputSet;
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

    public function viewItemDetails($itemId)
    {
        $sql = "CALL isad251_stong.TeaAdmin_Get_Item_Details(".$itemId.")";
        $result = $this->executeStatement($sql);
        $item ="";

        if($result)//If there are any results returned from procedure
        {
            foreach($result as $row)
            {
                $item = new item( $row['item_id'],$row['name'], $row['buying_cost'], $row['selling_price'], $row['category'], $row['quantity'], $row['min_reorder_amount'], $row['vegan'], $row['vegetarian'], $row['nut_free'], $row['img_path'], $row['item_status']);
            }
        }

        return $item;

    }

    //Insert new item into item table once user passes all validation checks
    public function addItem($itemName, $buy, $sell,$category, $stock, $restock, $veg, $vegan, $nutFree,  $img, $itemStatus)
    {
        $sql = "CALL ISAD251_STong.TeaAdmin_Add_Item('".$itemName."',".$buy.",".$sell.",'".$category."',".$stock.",".$restock.",".$veg.",".$vegan.",".$nutFree.",'".$img."','".$itemStatus."')";
        $this->executeStatementNoOutput($sql);
    }

    //Change a status of an output, returns no output
    public function changeItemStatus($itemId, $newStatus)
    {
        $sql = "CALL ISAD251_STong.TeaAdmin_Change_Item_Status(".$itemId.",'".$newStatus."')";
        $this->executeStatementNoOutput($sql);

    }

    //Save changes made to an item's attributes - no output
    public function saveChangedItem($id,$name, $buy, $sell, $category, $stock, $restock, $vegan, $veg, $nutFree)
    {
        $sql = "CALL ISAD251_STong.TeaAdmin_Update_Item(".$id.",'".$name."',".$buy.",".$sell.",'".$category."',".$stock.",".$restock.",".$vegan.",".$veg.",".$nutFree.")";
        $this->executeStatementNoOutput($sql);

    }

    //Return array of ongoing orders using a VIEW statement
    public function getAllOngoingOrders()
    {
        $sql = "SELECT * FROM ISAD251_STong.Tea_Admin_Ongoing_Orders";
        $result = $this->executeStatement($sql);

        $allOrders = [];

        if($result)//If there are any results returned from procedure
        {
            foreach($result as $row)
            {
                $theOrder = new order( $row['table_number'],$row['order_id'], $row['order_date']);
                $allOrders[] = $theOrder;//Store object
            }
        }

        return $allOrders;

    }

    //Return all ordered items of an order id
    public function viewOrderItems($orderId)
    {
        $sql = "CALL ISAD251_STong.TeaAdmin_View_Order_Items(".$orderId.")";

        $result = $this->executeStatement($sql);

        $allOrderItems = [];

        if($result)//If there are any results returned from procedure
        {
            foreach($result as $row)
            {

                $orderItem = new ongoingOrderItem( $row['item_id'], $row['name'], $row['order_quantity']);

                $allOrderItems[] = $orderItem;//Store object
            }
        }

        return $allOrderItems;


    }

    //Change status of an order to "Delivered"
    public function deliverOrder($orderId)
    {
        $sql = "CALL ISAD251_STong.TeaAdmin_Deliver_Order(".$orderId.")";
        $this->executeStatementNoOutput($sql);

    }
}