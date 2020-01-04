DELIMITER //
CREATE PROCEDURE ISAD251_STong.TeaAdmin_Get_Table_Favourites(IN tableNumber INT(3))
BEGIN

	SELECT DISTINCT 
    tearoom_item.item_id, 
    tearoom_item.name,
    buying_cost,
    selling_price,
    category,
    quantity,
    min_reorder_amount,
    vegan,
    vegetarian,
    nut_free,
    img_path,
    item_status,
    COUNT(tearoom_favourite.item_id) AS favCount
    FROM tearoom_item,
	tearoom_favourite
    WHERE
    tearoom_favourite.table_number = tableNumber
	AND
	tearoom_favourite.item_id = tearoom_item.item_id
    GROUP BY item_id;
END//
DELIMITER;