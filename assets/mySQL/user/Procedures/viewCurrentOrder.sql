DELIMITER //
CREATE PROCEDURE ISAD251_STong.viewCurrentOrder(IN tableNumber INT(2), IN orderId INT(3))

BEGIN
	SELECT
    tearoom_table_order.item_id,
    tearoom_item.name,
    tearoom_table_order.order_quantity,
    tearoom_item.selling_price,
   
    	(SELECT
         	SUM(tearoom_table_order.order_quantity * tearoom_item.selling_price) 
        	
         	FROM
         	ISAD251_STong.tearoom_table_order,
    		ISAD251_STong.tearoom_item
         	WHERE
         	table_number = tableNumber
    		AND
    		order_id = orderId
    		AND
    		tearoom_item.item_id = tearoom_table_order.item_id
        )AS totalPrice
        
    FROM
    ISAD251_STong.tearoom_table_order,
    ISAD251_STong.tearoom_item
    WHERE
    table_number = tableNumber
    AND
    order_id = orderId
    AND
    tearoom_item.item_id = tearoom_table_order.item_id;
END//
DELIMITER;