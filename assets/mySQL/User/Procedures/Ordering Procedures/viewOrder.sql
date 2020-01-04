DELIMITER //
CREATE PROCEDURE ISAD251_STong.Tearoom_View_Order(IN tableNumber INT(2), IN orderId INT(2), IN orderStatus VARCHAR(30))
BEGIN
	SELECT
    Tearoom_order.order_id,
    Tearoom_order.table_number,
	tearoom_order.order_status,
	tearoom_table_order.item_id,
	Tearoom_item.name,
	Tearoom_table_order.order_quantity,
	Tearoom_item.selling_price,
	SUM(Tearoom_item.selling_price * Tearoom_table_order.order_quantity) AS totalItemPrice
    FROM
    ISAD251_STong.Tearoom_order,
	ISAD251_STong.Tearoom_item,
	ISAD251_STong.Tearoom_table_order
    WHERE
	tearoom_table_order.table_number = tearoom_order.table_number 
	AND
	tearoom_table_order.order_id = tearoom_order.order_id 
	AND
	tearoom_item.item_id = tearoom_table_order.item_id
	AND
    tearoom_table_order.table_number = tableNumber
    AND
    tearoom_table_order.order_id = orderId
    AND
    order_status = orderStatus
	GROUP BY tearoom_table_order.item_id;
	
END //
DELIMITER;