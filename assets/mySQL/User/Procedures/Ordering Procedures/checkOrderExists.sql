DELIMITER //
CREATE PROCEDURE ISAD251_STong.Tearoom_Check_Order(IN orderId INT(3))
BEGIN
	SELECT

	table_number
	order_id
	FROM
	tearoom_order
	WHERE
	order_id = orderId
	AND NOT
	order_status = 'Ordering';
    
    END//
DELIMITER;