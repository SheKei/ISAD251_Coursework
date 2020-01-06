DELIMITER //
CREATE PROCEDURE ISAD251_STong.Tearoom_Cancel_Order(IN orderId INT(3))
BEGIN

	UPDATE ISAD251_STong.Tearoom_order
    SET
    order_date = NOW(),
    order_status = "Cancelled"
    WHERE
    order_id = orderId;
END//
DELIMITER;