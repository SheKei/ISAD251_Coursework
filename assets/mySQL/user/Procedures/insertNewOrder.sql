DELIMITER //

CREATE PROCEDURE ISAD251_STong.Tearoom_Insert_Order(IN tableNumber INT(2))
BEGIN
    SET @orderDate = NOW();
    
    SET @orderStatus = "Ordering";
    
    SET @orderId = (SELECT MAX(tearoom_order.order_id) FROM ISAD251_STong.tearoom_order) + 1;
    
    INSERT INTO ISAD251_STong.tearoom_order(table_number, order_id, order_date, order_status)
    VALUES (tableNumber, @orderId, @orderDate, @orderStatus);
END//
DELIMITTER;