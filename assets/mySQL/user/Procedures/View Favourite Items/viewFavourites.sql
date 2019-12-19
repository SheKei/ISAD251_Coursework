DELIMITER //
CREATE PROCEDURE ISAD251_STong.Tearoom_View_Favourites(IN tableNumber INT(2))
BEGIN
	SELECT
	COUNT(tearoom_favourite.item_id) AS numberOfLikes,
	name,
    tearoom_favourite.item_id
	FROM
	tearoom_favourite,
	tearoom_item
	WHERE
	table_number = tableNumber
	AND
	tearoom_favourite.item_id = tearoom_item.item_id;
    
END //
DELIMITER;