CREATE VIEW isad251_stong.Tea_Admin_Ongoing_Orders AS

SELECT

tearoom_order.table_number,
tearoom_order.order_id,
tearoom_order.order_date
FROM
isad251_STong.tearoom_order
WHERE
tearoom_order.order_status = 'Confirmed - ONGOING';