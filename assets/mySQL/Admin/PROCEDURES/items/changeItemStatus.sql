DELIMITER //
CREATE PROCEDURE ISAD251_STong.TeaAdmin_Change_Item_Status(IN itemId INT(11), IN itemStatus VARCHAR(10))
BEGIN

	UPDATE ISAD251_STong.Tearoom_item
    SET
    item_status = itemStatus
    WHERE
    item_id = itemId;
END//
DELIMITER;