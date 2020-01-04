<?php
include_once 'menuItem.php';
include_once 'orderItem.php';
include_once 'favItem.php';

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

    //Return output from procedures containing SELECT statements
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

    //Show all menu items as a CUSTOMER under specific filters
    public function showMenu($nutFree,$veg,$vegan,$category1,$category2)
    {
        $sql = "CALL isad251_stong.Tearoom_Menu(".$nutFree.",".$veg.",".$vegan.",'".$category1."','".$category2."')";

        $result = $this->executeStatement($sql);

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
        $result = $this->executeStatement($sql);
        $item ="";

        if($result)//If there are any results returned from procedure
        {
            foreach($result as $row)
            {
                $item = new menuItem( $row['item_id'],$row['name'], $row['selling_price'], $row['vegan'], $row['vegetarian'], $row['nut_free'], $row['img_path']); //Create object from each row
            }
        }

        return $item;
    }

    //Insert order with status = ordering when user selects their table number
    //Return the order id of new order
    public function insertNewOrder($tableNumber)
    {
        $sql = "CALL isad251_stong.Tearoom_Insert_Order(".$tableNumber.")";
        $this->executeStatementNoOutput($sql);

        $sql = "SELECT MAX(tearoom_order.order_id) AS orderId FROM ISAD251_STong.tearoom_order";
        $result = $this->executeStatement($sql);
        $orderId =0;

        if($result)//If there are any results returned from procedure
        {
            foreach($result as $row)
            {
                $orderId = $row['orderId'];
            }
        }

        return $orderId;
    }

    //Add an item to order with its quantity or update quantity of existing item order
    public function insertNewOrderItem($tableNum, $itemId, $orderAmount, $orderId)
    {
        $firstSql = "CALL ISAD251_STong.Tearoom_Check_Order_Item(".$tableNum." , ".$itemId." , ".$orderId.")";

        $checkOutput = $this->executeStatement($firstSql);  //Check if an item has already been ordered

        if($checkOutput) //Update quantity of order item
        {
            $sql = "CALL ISAD251_STong.Tearoom_Update_Order_Item(".$tableNum." , ".$itemId." , ".$orderAmount." , ".$orderId.")";
        }
        else //Insert new order for an item
        {
            $sql = "CALL isad251_stong.Tearoom_Insert_Order_Item(".$tableNum." , ".$itemId." , ".$orderAmount." , ".$orderId.")";
        }

        $this->executeStatementNoOutput($sql);
    }


    //View orders depending on what order status user wishes to see
    public function viewOrders($table, $order, $orderStatus)
    {
        $sql = "CALL ISAD251_STong.Tearoom_View_Order(".$table.",".$order.",'".$orderStatus."')";

        $result = $this->executeStatement($sql);

        $orderItems = [];

        if($result)
        {
            foreach($result as $row)
            {
                $orderItem = new orderItem($row['table_number'], $row['order_id'],$row['order_status'], $row['name'], $row['order_quantity'], $row['selling_price'], $row['totalItemPrice']);
                $orderItems[] = $orderItem;
            }
        }

        return $orderItems;

    }

    //Set order status to "confirmed - ongoing" --> customer has finished ordering
    public function confirmOrder($tableNumber, $orderId)
    {
        $sql = "CALL ISAD251_STong.Tearoom_Confirm_Order(".$tableNumber.",".$orderId.")";
        $this->executeStatementNoOutput($sql);
    }


    //Returns a list of items that have been favourited and how many times they have been favourited.
    public function viewFavouriteItems($tableNumber)
    {
        $sql = "CALL ISAD251_STong.Tearoom_View_Favourites(".$tableNumber.")";
        $items = $this->executeStatement($sql);

        $favourites = [];

        if($items)
        {
            foreach($items as $row)
            {
                $fav = new favItem($row['numberOfLikes'],$row['name'],$row['item_id'], $row['img_path']);
                $favourites[] = $fav;
            }
        }

        return $favourites;
    }




}