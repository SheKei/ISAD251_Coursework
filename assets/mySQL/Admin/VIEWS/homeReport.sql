CREATE VIEW ISAD251_STong.Tea_Admin_Home_Report AS
SELECT 
SUM(order_quantity * selling_price) AS totalIncome,
COUNT(tearoom_order.order_id) AS totalOrders,
SUM(tearoom_item.quantity * tearoom_item.buying_cost) AS buyingCost,
SUM(tearoom_table_order.item_id * tearoom_table_order.order_quantity) AS itemsSold
FROM 
ISAD251_STong.tearoom_table_order,
ISAD251_STong.tearoom_item,
ISAD251_STong.tearoom_order
WHERE
tearoom_order.order_status = "Delivered"
AND
tearoom_item.item_id = tearoom_table_order.item_id
AND
tearoom_order.order_id = tearoom_table_order.order_id;