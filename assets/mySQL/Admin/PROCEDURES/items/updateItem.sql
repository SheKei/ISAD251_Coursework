DELIMITER //
CREATE PROCEDURE ISAD251_STong.TeaAdmin_Update_Item(IN itemId INT(11), IN itemName VARCHAR(30), IN buy FLOAT(3,2), IN sell FLOAT(3,2), IN theCategory VARCHAR(5), IN stock INT(4), IN restock INT(4), IN isVegan BOOLEAN, IN isVeg BOOLEAN, IN isNutFree BOOLEAN)
BEGIN

	UPDATE ISAD251_STong.Tearoom_item
    SET
    
    name = itemName,
    buying_cost = buy,
    selling_price = sell,
    category = theCategory,
    quantity = stock,
    vegan = isVegan,
    vegetarian = isVeg,
    nut_free = isNutFree
    
    WHERE
    item_id = itemId;
    
END//
DELIMITER;