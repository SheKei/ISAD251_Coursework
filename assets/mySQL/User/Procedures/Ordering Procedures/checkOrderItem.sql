DELIMITER //
CREATE PROCEDURE ISAD251_STong.Tearoom_Check_Order_Item(IN tableNumber INT(2), IN itemId INT(3),IN orderId INT(3))

	BEGIN
	
	SELECT * FROM ISAD251_STong.tearoom_table_order
	WHERE
	table_number = tableNumber
	AND
	order_id = orderId
	AND
	item_id = itemId;
    
    END//
DELIMITER;