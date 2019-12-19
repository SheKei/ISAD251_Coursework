<?php
include_once 'menuItem.php';
include_once 'item.php';
include_once 'orderItem.php';

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

    //Add an item to order with its quantity
    public function insertNewOrderItem($tableNum, $itemId, $orderAmount, $orderId)
    {
        $sql = "CALL isad251_stong.Tearoom_Insert_Order_Item(".$tableNum." , ".$itemId." , ".$orderAmount." , ".$orderId.")";
        $this->executeStatementNoOutput($sql);
    }

    //Return array of current items in order
    public function viewCurrentItems($tableNumber, $orderId)
    {
        $sql = "CALL isad251_stong.viewCurrentOrderItems(".$tableNumber.",".$orderId.")";
        $result = $this->executeStatement($sql);
        $orderItems = [];

        if($result)//If there are any results returned from procedure
        {
            foreach($result as $row)
            {
                $theOrderItem = new orderItem( $row['item_id'],$row['name'], $row['order_quantity'], $row['selling_price']); //Create object from each row
                $thePrice = $this->calculateTotalPriceForEachItem($tableNumber, $orderId, $theOrderItem->getId()); //Get calculated price
                $theOrderItem->setTotalItemPrice($thePrice);//Save to object
                $orderItems[] = $theOrderItem;//Store object

            }
        }

        return $orderItems;
    }

    //Returns calculated cost of item * quantity
    public function calculateTotalPriceForEachItem($tableNum, $orderNum, $item)
    {
        $sql = "CALL ISAD251_STong.calculateTotalItemPrice(".$tableNum.",".$orderNum.",".$item.")";
        $price = $this->executeStatement($sql);
        if($price)//If there are any results returned from procedure
        {
            foreach($price as $row)
            {
                $price = $row['totalPrice'];
            }
        }

        return $price;
    }

    //Returns total cost of an order
    public function calculateTotalOrderPrice($tableNumber, $orderId)
    {
        $sql = "CALL ISAD251_STong.calculateTotalOrder(".$tableNumber.",".$orderId.")";
        $orderPrice = $this->executeStatement($sql);
        if($orderPrice)
        {
            foreach($orderPrice as $row)
            {
                $orderPrice = $row['totalPrice'];
            }
        }

        return $orderPrice;

    }


}