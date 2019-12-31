<?php


function displayItems($status1, $status2)
{
    $db = new DB_Admin();
    $items = $db->getAllItems($status1, $status2);

    if($items)
    {
        $startRow = "<div class='row'>";
        echo $startRow;

        foreach($items as $anItem)
        {
            $id = $anItem->getId();
            $name = $anItem->getName();

            $link = "<p>"."<a href='itemEdit.php?object=".$id."'>"."<h3><strong> Item ID: ".$id." - ".$name."</strong></h3>"."</a></p>";

            $category = "Item Category: ".$anItem->getCategory();
            $status = "Item Status: ".$anItem->getItemStatus();


            $img = '../../'.$anItem->getImgPath();
            $imgPath = "<img src='".$img."' alt='".$anItem->getName()."' width='150' height='150'>";

            $categoryPara = "<p>".$category."</p>";
            $statusPara = "<p>".$status."</p>";

            $container = "<div class='col-sm-4 text-center'>".$link.$imgPath.$categoryPara.$statusPara."</div>";

            echo $container;
        }

        echo $endRow = "</div>";

    }

}