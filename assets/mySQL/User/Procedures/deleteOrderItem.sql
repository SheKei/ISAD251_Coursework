DELIMITER //
CREATE PROCEDURE ISAD251_STong.Tearoom_Delete_Order_Item(IN tableNumber INT(3), IN orderId INT(3), IN itemId INT(3))
BEGIN
	
    DELETE FROM ISAD251_STong.Tearoom_table_order
    WHERE
    table_number = tableNumber
    AND
    order_id = orderId
	AND
	item_id = itemId;
    
END//
DELIMITER;