DELIMITER //
CREATE TRIGGER isad251_stong.tea_admin_update_stock_trigger AFTER UPDATE on isad251_stong.tearoom_order
FOR EACH ROW
BEGIN
	
    	UPDATE isad251_stong.tearoom_item, isad251_stong.tearoom_table_order
        SET tearoom_item.quantity = tearoom_item.quantity - tearoom_table_order.order_quantity
        WHERE 
        NEW.order_status = 'Delivered'
        AND
        tearoom_table_order.order_id = NEW.order_id
        AND
        tearoom_table_order.item_id = tearoom_item.item_id
        AND 
        isad251_stong.tearoom_table_order.order_id = NEW.order_id;
   
END //
DELIMITER;