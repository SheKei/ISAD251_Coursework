DELIMITER //
CREATE PROCEDURE ISAD251_STong.Tearoom_Insert_Fav(IN tableNumber INT(2), IN itemId INT(3))

	BEGIN
    
    INSERT INTO ISAD251_STong.tearoom_favourite(table_number, item_id)
    VALUES(tableNumber,itemId);
    
    END//
DELIMITER;