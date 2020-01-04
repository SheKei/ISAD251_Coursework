DELIMITER //
CREATE PROCEDURE ISAD251_STong.Tearoom_View_Favourites(IN tableNumber INT(2))
BEGIN
	SELECT
	COUNT(tearoom_favourite.item_id) AS numberOfLikes,
	name,
    tearoom_favourite.item_id,
	tearoom_item.img_path
	FROM
	tearoom_favourite,
	tearoom_item,
	tearoom_table
	WHERE
	tearoom_favourite.table_number = tableNumber
	AND
	tearoom_favourite.item_id = tearoom_item.item_id
	AND
	tearoom_table.table_number = tearoom_favourite.table_number
	GROUP BY tearoom_favourite.item_id;
    
END //
DELIMITER;