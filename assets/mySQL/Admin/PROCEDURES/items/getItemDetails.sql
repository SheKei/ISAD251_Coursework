DELIMITER //
CREATE PROCEDURE ISAD251_STong.TeaAdmin_Get_Item_Details(IN itemId INT(11))
BEGIN

	SELECT * FROM ISAD251_STong.Tearoom_item
    WHERE tearoom_item.item_id = itemId;
    
END//
DELIMITER ;