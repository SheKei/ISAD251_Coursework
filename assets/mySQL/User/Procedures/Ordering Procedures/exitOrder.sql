DELIMITER //
CREATE PROCEDURE ISAD251_STong.Tearoom_Exit_Order(IN orderId INT(3))
BEGIN

	UPDATE ISAD251_STong.Tearoom_order
    SET
    order_date = NOW(),
    order_status = "Cancelled"
    WHERE
    order_id = orderId
	AND
	order_status = "Ordering";
	
END//
DELIMITER;