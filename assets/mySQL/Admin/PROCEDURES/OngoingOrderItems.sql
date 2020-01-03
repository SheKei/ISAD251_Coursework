DELIMITER //
CREATE PROCEDURE ISAD251_STong.TeaAdmin_View_Order_Items(IN orderNumber INT(2))
BEGIN

	SELECT
    
	tearoom_table_order.item_id,
	tearoom_item.name,
	tearoom_table_order.order_quantity
	FROM
	isad251_Stong.tearoom_table_order,
	isad251_STong.tearoom_item
	WHERE
	tearoom_table_order.order_id = orderNumber
	AND
	tearoom_item.item_id = tearoom_table_order.item_id;
	
END//
DELIMITER;