DELIMITER //
CREATE PROCEDURE ISAD251_STong.TeaAdmin_Deliver_Order(IN orderId INT(3))
BEGIN

	UPDATE ISAD251_STong.Tearoom_order
    SET
    order_date = NOW(),
    order_status = 'Delivered'
    WHERE
    order_id = orderId;
END//
DELIMITER;