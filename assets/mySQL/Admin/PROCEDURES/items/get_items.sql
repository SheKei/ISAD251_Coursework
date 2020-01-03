DELIMITER //
CREATE PROCEDURE ISAD251_STong.TeaAdmin_Get_Items(IN itemStatus1 VARCHAR(30), IN itemStatus2 VARCHAR(30))
BEGIN

	SELECT * FROM tearoom_item
    WHERE
    item_status = itemStatus1
    OR
    item_status = itemStatus2;
END//
DELIMITER;