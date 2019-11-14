CREATE TABLE ISAD251_STong.TeaRoom_Table(

	table_number INT(3) NOT NULL PRIMARY KEY,
	seat_capacity INT(2) NOT NULL

);

CREATE TABLE ISAD251_STong.TeaRoom_Item(

	item_id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
	name VARCHAR(30) NOT NULL,
	buying_cost FLOAT(3,2) NOT NULL,
	selling_price FLOAT(3,2) NOT NULL,
	category VARCHAR(5) NOT NULL,
	quantity INT(4) NOT NULL,
	min_reorder_amount INT(4) NOT NULL,
	vegan BOOLEAN NOT NULL,
	vegetarian BOOLEAN NOT NULL,
	nut_free BOOLEAN NOT NULL,
	img_path VARCHAR(300) NOT NULL,
	item_status VARCHAR(10) NOT NULL

);

CREATE TABLE ISAD251_STong.TeaRoom_Order(

	order_id INT AUTO_INCREMENT NOT NULL,
	table_number INT(3) NOT NULL,
	order_date DATETIME NOT NULL,
	item_id INT NOT NULL,
	quantity INT(3) NOT NULL,
	order_status VARCHAR(15) NOT NULL,
	CONSTRAINT PK_Order PRIMARY KEY(order_id, table_number, order_date, item_id),
	FOREIGN KEY (table_number) REFERENCES ISAD251_STong.TeaRoom_Table(table_number),
	FOREIGN KEY (item_id) REFERENCES ISAD251_STong.TeaRoom_Item(item_id)

);

CREATE TABLE ISAD251_STong.TeaRoom_Favourite(

	fav_id INT AUTO_INCREMENT NOT NULL,
	table_number INT(3) NOT NULL,
	item_id INT NOT NULL,
	CONSTRAINT PK_Favourite PRIMARY KEY(fav_id,table_number, item_id),
	FOREIGN KEY (item_id) REFERENCES ISAD251_STong.TeaRoom_Item(item_id)

);

--DROP TABLE ISAD251_STong.TeaRoom_Order
--DROP TABLE ISAD251_STong.TeaRoom_Favourite
--DROP TABLE ISAD251_STong.TeaRoom_Item
--DROP TABLE ISAD251_STong.TeaRoom_Table