DELIMITER //
CREATE PROCEDURE ISAD251_STong.Tearoom_Insert_Order_Item(IN tableNumber INT(2), IN itemId INT(3), IN orderQuantity INT(2), IN orderId INT(3))

	BEGIN
    
    INSERT INTO ISAD251_STong.tearoom_table_order(table_number, order_id, item_id, order_quantity)
    VALUES(tableNumber, orderId, itemId, orderQuantity);
    
    END//
DELIMITER;