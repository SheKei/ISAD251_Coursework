DELIMITER //
CREATE PROCEDURE ISAD251_STong.Tearoom_Confirm_Order(IN tableNumber INT(2), IN orderId INT(3))
BEGIN

	UPDATE ISAD251_STong.Tearoom_order
    SET
    order_date = NOW(),
    order_status = "Confirmed - Ongoing"
    WHERE
    table_number = tableNumber
    AND
    order_id = orderId;
END//
DELIMITER;