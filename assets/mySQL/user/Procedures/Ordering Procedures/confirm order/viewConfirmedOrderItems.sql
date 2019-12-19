DELIMITER //
CREATE PROCEDURE ISAD251_STong.Tearoom_View_Confirmed_Order_Items(IN tableNumber INT(2), IN orderId INT(2))
BEGIN
	SELECT
    Tearoom_table_order.item_id,
    Tearoom_item.name,
    Tearoom_table_order.order_quantity,
    Tearoom_item.selling_price
    FROM
    ISAD251_STong.Tearoom_table_order,
    ISAD251_STong.Tearoom_item,
    ISAD251_STong.Tearoom_order
    WHERE
    Tearoom_table_order.table_number = tableNumber
    AND
    Tearoom_table_order.order_id = orderId
    AND
    Tearoom_table_order.item_id = Tearoom_item.item_id
    AND
    Tearoom_table_order.order_id = tearoom_order.order_id
    AND
    tearoom_table_order.table_number = tearoom_order.table_number
    AND
    Tearoom_order.order_status = "Confirmed - Ongoing";
END //
DELIMITER;