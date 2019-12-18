DELIMITER //
CREATE PROCEDURE ISAD251_STong.Tearoom_View_Item(IN id int(11))
BEGIN
SELECT
	item_id,
    name,
    selling_price,
	vegan,
	vegetarian,
	nut_free,
	img_path
    FROM
    isad251_stong.tearoom_item
    WHERE
    tearoom_item.item_status ='Sale'
    AND
	tearoom_item.item_id = id;
END//
DELIMITER ;