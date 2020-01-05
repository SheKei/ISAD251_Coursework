CREATE VIEW ISAD251_STong.Tea_Admin_Order_Items AS
SELECT

tearoom_table_order.order_id,
tearoom_table_order.table_number,
tearoom_order.order_date,
tearoom_order.order_status,
tearoom_item.item_id,
tearoom_item.name,
tearoom_table_order.order_quantity,
SUM(tearoom_table_order.order_quantity * tearoom_item.selling_price) AS total_Price
FROM
isad251_stong.tearoom_item,
isad251_stong.tearoom_order,
isad251_stong.tearoom_table_order
WHERE
tearoom_item.item_id = tearoom_table_order.item_id
AND
tearoom_order.order_id = tearoom_table_order.order_id
AND
tearoom_order.table_number = tearoom_table_order.table_number
GROUP BY tearoom_table_order.item_id, tearoom_table_order.order_id  
ORDER BY `tearoom_table_order`.`order_id`  DESC