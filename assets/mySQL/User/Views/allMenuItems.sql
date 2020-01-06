CREATE VIEW isad251_stong.Tearoom_All_Menu_Items AS

SELECT
    item_id,
    name,
    selling_price,
    vegan,
    vegetarian,
    nut_free,
    img_path
    FROM
    isad251_stong.tearoom_item
    WHERE
    tearoom_item.item_status ='Sale';