DELIMITER //
CREATE PROCEDURE isad251_stong.Tearoom_Menu(IN nutFree BOOLEAN, IN veg BOOLEAN, IN vegan BOOLEAN, category1 varchar(5), category2 varchar(5))
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
    tearoom_item.nut_free = nutFree
    AND
    tearoom_item.vegetarian = veg
    AND
    tearoom_item.vegan = vegan
    AND
    tearoom_item.category = category1
    OR
    tearoom_item.category = category2;
END//
DELIMITER;

