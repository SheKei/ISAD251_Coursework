DELIMITER //
CREATE PROCEDURE ISAD251_STong.calculateTotalItemPrice(IN tableNumber INT(2), IN orderId INT(3), IN itemId INT(3))

BEGIN
    SELECT
        SUM(tearoom_table_order.order_quantity * tearoom_item.selling_price) AS totalPrice
        	
        FROM
        ISAD251_STong.tearoom_table_order,
    	ISAD251_STong.tearoom_item
        WHERE
        table_number = tableNumber
    	AND
    	order_id = orderId
        AND
        tearoom_table_order.item_id = itemId
    	AND
    	tearoom_item.item_id = tearoom_table_order.item_id;
        
        
    
END//
DELIMITER;