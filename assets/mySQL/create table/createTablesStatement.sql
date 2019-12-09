CREATE TABLE ISAD251_STong.TeaRoom_Table(

	table_number INT(2) NOT NULL PRIMARY KEY,
	seat_capacity INT(2) NOT NULL

);

CREATE TABLE ISAD251_STong.TeaRoom_Item(

	item_id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
	name VARCHAR(30) NOT NULL,
	buying_cost FLOAT(3,2) NOT NULL,
	selling_price FLOAT(3,2) NOT NULL,
	category VARCHAR(10) NOT NULL,
	quantity INT(4) NOT NULL,
	min_reorder_amount INT(3) NOT NULL,
	vegan BOOLEAN NOT NULL,
	vegetarian BOOLEAN NOT NULL,
	nut_free BOOLEAN NOT NULL,
	img_path VARCHAR(300) NOT NULL,
	item_status VARCHAR(10) NOT NULL

);

ALTER TABLE ISAD251_STong.TeaRoom_Item
ALTER TeaRoom_Item.category SET DEFAULT "SALE";

CREATE TABLE ISAD251_STong.TeaRoom_Order(

	table_number INT(2) NOT NULL,
	order_id INT(3) NOT NULL,
	order_date DATETIME NOT NULL,
	order_status VARCHAR(15) NOT NULL DEFAULT "ONGOING",
	CONSTRAINT PK_Order PRIMARY KEY(table_number, order_id),
	FOREIGN KEY(table_number) REFERENCES ISAD251_STong.TeaRoom_Table(table_number) 

);

CREATE TABLE ISAD251_STong.TeaRoom_Table_Order(

	table_number INT(2) NOT NULL,
	order_id INT(3) NOT NULL,
	product_id INT(3) NOT NULL,
	order_quantity INT(2) NOT NULL,
	CONSTRAINT PK_TableOrder PRIMARY KEY(table_number, order_id, product_id),
	CONSTRAINT FK_Order FOREIGN KEY (table_number, order_id)
	REFERENCES ISAD251_STong.TeaRoom_Order(table_number, order_id)

);
CREATE TABLE ISAD251_STong.TeaRoom_Favourite(

	fav_id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
	table_number INT(3) NOT NULL,
	item_id INT NOT NULL,
	FOREIGN KEY (item_id) REFERENCES ISAD251_STong.TeaRoom_Item(item_id),
	FOREIGN KEY (table_number) REFERENCES ISAD251_STong.TeaRoom_Table(table_number)

);

--DROP TABLE ISAD251_STong.TeaRoom_Order
--DROP TABLE ISAD251_STong.TeaRoom_Favourite
--DROP TABLE ISAD251_STong.TeaRoom_Item
--DROP TABLE ISAD251_STong.TeaRoom_Table
--DROP TABLE ISAD251_STong.TeaRoom_Table_Order