CREATE VIEW isad251_stong.Tea_Admin_Restock_Report AS
SELECT 
item_id,
name,
quantity,
min_reorder_amount
FROM isad251_stong.tearoom_item
WHERE
quantity < min_reorder_amount;