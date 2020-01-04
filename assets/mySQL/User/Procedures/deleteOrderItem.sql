DELIMITER //
CREATE PROCEDURE ISAD251_STong.Tearoom_Delete_Order_Item(IN tableNumber INT(3), IN orderId INT(3), IN itemId INT(3))
BEGIN
	
    DELETE FROM ISAD251_STong.Tearoom_Item
    WHERE
    table_number = table_number
    AND
    order_id = order_id
	AND
	item_id = itemId;
    
END//
DELIMITER;