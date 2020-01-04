DELIMITER //
CREATE PROCEDURE ISAD251_STong.Tearoom_Update_Order_Item(IN tableNumber INT(2), IN itemId INT(3), IN orderQuantity INT(2), IN orderId INT(3))
BEGIN

	UPDATE ISAD251_STong.Tearoom_table_order
    SET
    order_quantity = order_quantity + orderQuantity
    WHERE
    table_number = tableNumber
	AND
	item_id = itemId
    AND
    order_id = orderId;
END//
DELIMITER;