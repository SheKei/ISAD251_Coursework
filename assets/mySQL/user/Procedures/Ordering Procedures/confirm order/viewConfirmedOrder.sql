DELIMITER //
CREATE PROCEDURE ISAD251_STong.Tearoom_View_Confirmed_Order(IN tableNumber INT(2), IN orderId INT(2))
BEGIN
	SELECT
    Tearoom_order.order_id,
    Tearoom_order.table_number,
    Tearoom_order.order_status
    FROM
    ISAD251_STong.Tearoom_order
    WHERE
    table_number = tableNumber
    AND
    order_id = orderId;
	
END //
DELIMITER;