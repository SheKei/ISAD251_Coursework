DELIMITER //
CREATE PROCEDURE `ISAD251_STong.TeaAdmin_Add_Item`(IN theName VARCHAR(30), IN buyCost FLOAT(3,2), IN sellPrice FLOAT(3,2), IN theCategory VARCHAR(5), IN currentStock INT(4), IN minRestock INT(4), IN vegan BOOLEAN, IN veg BOOLEAN, IN nutFree BOOLEAN, IN imgPath VARCHAR(300), IN itemStatus VARCHAR(10))
BEGIN
    
    INSERT INTO ISAD251_STong.tearoom_item(name, buying_cost,selling_price,category,quantity,min_reorder_amount,vegan,vegetarian,nut_free,img_path,item_status)
    VALUES (theName, buyCost, sellPrice, theCategory, currentStock, minRestock, vegan, veg, nutFree, imgPath, itemStatus);
END//
DELIMITER ;